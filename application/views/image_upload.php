<!DOCTYPE html>
<html>
<head>
    <title>Webslesson | <?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
</head>
<body>
<div class="container">
    <br /><br /><br />
    <h3 align="center"><?php echo $title; ?></h3>

<!--    --><?php
    $attribute = array("id" => "upload_form", "align" => "center");
    echo form_open_multipart("",$attribute); ?>
        <div class="form-group">
            <label for="description">descriptions: </label>
            <input type="text" name="description" id="description" class="form-control">
            <span class="text-danger"><?php echo form_error('description'); ?></span>
        </div>
        <input type="file" name="image_file" id="image_file" />
        <br />
        <br />
        <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />
    <?php echo  form_close() ?>
<!--    <form method="post" id="upload_form" align="center" enctype="multipart/form-data">-->
<!--        <input type="file" name="image_file" id="image_file" />-->
<!--        <br />-->
<!--        <br />-->
<!--        <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />-->
<!--    </form>-->
    <br />
    <br />
    <div id="uploaded_image">
        <?php echo $image_data; ?>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#upload_form').on('submit', function(e){
            e.preventDefault();
            if($('#image_file').val() == '')
            {
                console.log("Please Select the File");
            }
            else
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>main/ajax_upload",
                    //base_url() = http://localhost/tutorial/codeigniter
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(data)
                    {
                        $('#uploaded_image').html(data);
                    }
                });
            }
        });
    });
</script>