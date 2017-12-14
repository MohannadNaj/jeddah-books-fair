    <script type="text/javascript">
    window.base_url = "<?= base_url('/');?>";
    window.row_template = <?= json_encode($this->load->view('shared/partials/datatable_row','',true));?>;
    </script>
    <script src="<?= base_url('js/app.js');?>?v=2017"></script>
    <script src="<?= base_url('js/all.js');?>?v=2017"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46735090-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-46735090-4');
    </script>

