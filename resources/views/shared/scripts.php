    <script type="text/javascript">
    window.base_url = "<?= base_url('/');?>";
    window.row_template = <?= json_encode($this->load->view('shared/partials/datatable_row','',true));?>;
    </script>
    <script src="<?= base_url('js/app.js');?>"></script>
    <script src="<?= base_url('js/all.js');?>"></script>