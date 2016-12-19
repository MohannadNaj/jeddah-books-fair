<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
  <meta itemprop="description" content="صفحة مُساعدة لزوار معرض جدة الدولي للكتاب للبحث عن دور النشر بالإضافة لتحميل خريطة المعرض.">
  <meta itemprop="image" content="<?=base_url('logo120.png');?>">
<head>
    <? $this->load->view('shared/head'); ?>
</head>
<body>

<div class="container">
    <header class="row">
        <? $this->load->view('shared/header'); ?>
    </header>

    <div id="main" class="row">
        <div class="container">
            <? $this->load->view($yield); ?>
        </div>
    </div>
</div>
<? $this->load->view('shared/scripts'); ?>
</body>
</html>