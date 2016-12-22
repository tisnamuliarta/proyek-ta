var channelsTable;
var memberTable;
var post_data = {
    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
}

$(document).ready(function() {
  channelsTable = $('#channelsTable').DataTable({
    'ajax' : 'fetch_channel',
      'order' : [[2, 'desc']]
  });
});

$(function () {
    memberTable = $('#member_data').DataTable({
      'ajax' : 'fetch_member',
        'order' : [[4, 'desc']]
    });
})

function addChannel() {
    $('#addChannelForm')[0].reset();
    $('#addChannelForm').unbind('submit').bind('submit', function(e) {
      e.preventDefault();
      if ($('#channel_icon').val() == ''){
        console.log('please select an image');
      }
      var form  = $(this);

      $('.text-danger').remove();
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
            //hide modal
            $('#modalAdd').modal('hide');

          //  update data
              channelsTable.ajax.reload(null, false);

          }else {
            if (response.messages instanceof Object) {
              $.each(response.messages, function(index, value) {
                var element = $('#'+index);

                element
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