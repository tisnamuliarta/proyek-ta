var channelTable;
var post_data = {
    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
}

$(document).ready(function() {
  channelsTable = $('#channelsTable').DataTable();
});

function addChannel() {
    $('#addChannelForm')[0].reset();
    $('#addChannelForm').unbind('submit').bind('submit', function() {
      var form  = $(this);

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: form.serialize(),
        dataType: 'json',
        success:function(response) {
          if (response.success === true) {
            $('.messages').html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong>Warning!</strong>' + response.messages+
            '</div>');
          }else {
            if (response.messages instanceof Object) {
              $.each(response.messages, function(index, value) {
                var element = $('#'+index);

                $(element)
                .closest('.form-group')
                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                .after(value);
              });
            }else {
              $('.messages').html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong>Warning!</strong>' + response.messages+
              '</div>');
            }
          }

        }
      });
      return false;
    });
  }