    <script type="text/javascript">
    window.base_url = "<?= base_url('/');?>";
    window.row_template = <?= json_encode($this->load->view('shared/partials/datatable_row','',true));?>;
    </script>
    <?php
    if($yield == 'home/search') {
      ?>
    <script src="<?= base_url('js/books.js');?>?v=2017"></script>
    <script type="text/javascript">
      $.fn.dataTable.ext.errMode = 'none';

      $(document).ready(() => {
          $('.dataTable').DataTable( {
            data: window.data,
            columns: [
              {data: "no"},
              {data: "title"},
              {data: "author"},
              {data: "author_nationality"},
              {data: "category"},
              {data: "isbn"},
              {data: "clearance"},
              {data: "size"},
              {data: "pages"},
              {data: "publish_year"},
              {data: "price"}
            ]
          })
          $('.loading-gif').fadeOut()
      })
    </script>
      <?php
    } else {
      ?>
    <script src="<?= base_url('js/all.js');?>?v=2017"></script>
    <script src="<?= base_url('js/app.js');?>?v=2017"></script>
      <?php
    }
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46735090-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-46735090-4');
    </script>

