<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/mask.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/summernote.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#ban_data_fim').datepicker();
        $('#ban_data_inicio').datepicker();
        $('#not_data').datepicker();
        $('.summernote').summernote({
            height: 150
        });

        $('.note-editable').text($('#not_texto').attr('value'));
        $('#not_texto').text($('.note-editable').html());
        
        $('.note-editable').keypress(function(){
            $('#not_texto').text($('.note-editable').html());
        });


    })
</script>

</body>
</html>