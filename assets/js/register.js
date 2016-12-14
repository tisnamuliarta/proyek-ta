$(document).ready(function() {
  $('#registerform').unbind('submit').bind('submit', function(){
    var form = $(this);
    var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(),
      dataType: 'json',
      success:function(response) {
 
        if (response.success == true) {
          $('#messages').html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+ response.messages+
          '</div>');

          $('#registerform')[0].reset();
          $('.text-danger').remove();
          $('.form-group').removeClass('has-error').removeClass('has-success');
          window.location = response.messages;
        }else {
          $.each(response.messages, function(index, value) {
            var element = $('#'+index);

            $(element)
            .closest('.form-group')
            .removeClass('has-error')
            .removeClass('has-success')
            .addClass(value.length > 0 ? 'has-error' : 'has-success')
            .find('.text-danger').remove();

            $(element).after(value);
          });
        }
      }
    });

    return false;
  });
});
