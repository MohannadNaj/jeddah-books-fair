<div style="margin-bottom:  20px;" class="col-xs-12">
	<div class="row">
	  	<div class="pull-right text-center col-xs-12" style="    margin-bottom: 22px;">
			<a target="_blank" style="max-width: 100%; width: 220px; white-space: normal;" href="http://jeddahbookfair.com/wp-content/uploads/2017/12/%D9%82%D8%A7%D9%8A%D9%94%D9%85%D8%A9-%D8%A7%D9%84%D9%85%D8%B4%D8%A7%D8%B1%D9%83%D9%8A%D9%86-%D8%B9%D9%86-%D8%A7%D9%84%D9%85%D8%B9%D8%B1%D8%B6.pdf" class="btn btn-default">
				<img src="<?=base_url('pdf-icon.png');?>" style="float: left"><div style="max-width: 100%">قائمة دور النشر</div>
			</a>
		</div>
	</div>
</div>
<hr style="border: 2px solid #eee;">

<div style="max-width: 100%; width: 100%">
    <div class="row">
    	<div class="col-xs-12 text-right">
    	    <div class="container-fluid">
		        <div class="row" style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #eee;">
					<search-control></search-control>
		        </div>
		    </div>
    	</div>
    </div>
	<div style="margin-bottom: 30px;" class="row">
		<div class="col-md-push-1 col-md-10 col-xs-12">
		<?
			$this->load->view('shared/partials/datatable');
		?>
		</div>
	</div>
</div>
<div style="direction: rtl;" class="row text-right">
	<div style="text-align: justify;" class="col-xs-12 col-sm-6">
		<h5 class="btn btn-default" data-toggle="collapse" data-target=".accuracy">عن دقة البيانات <span class="caret"></span></h5>
		<br>
		<div class="collapse in accuracy">
			يوفِّر <a href="http://jeddahbookfair.com/">موقع معرض جدة الدولي للكتاب</a> قائمة <a href="http://jeddahbookfair.com/wp-content/uploads/2017/12/%D9%82%D8%A7%D9%8A%D9%94%D9%85%D8%A9-%D8%A7%D9%84%D9%85%D8%B4%D8%A7%D8%B1%D9%83%D9%8A%D9%86-%D8%B9%D9%86-%D8%A7%D9%84%D9%85%D8%B9%D8%B1%D8%B6.pdf">بأسماء العارضين</a> كملف PDF وهي القائمة المُستخدمة هنا كمصدر البيانات. قد تكون هناك بعض الأخطاء التي حدثت أثناء تحويل البيانات من ملف PDF إلى صيغة JSON، اضطررتُ لمعالجة بعض الأخطاء الكتابية الناتجة عن التحويل يدوياً.<br>
			لأي اقتراحات، اكتُب لي فضلاً على تويتر: <a href="https://twitter.com/MohannadNaj">@MohannadNaj</a>
		</div>
	</div>
	<div style="margin-bottom: 20px; text-align: justify;" class="col-xs-12 col-sm-6">
  		<h5 class="btn btn-default" data-toggle="collapse" data-target=".about">عن هذه الصفحة <span class="caret"></span></h5>
  		<br>
		<div class="collapse in about">
			أُنشِئت هذه الصفحة -على عجل- لمساعدة زوار معرض جدة الدولي للكتاب العام الماضي 2016. وتمّ تعديلها الآن لتتوافق مع معرض جدة الدولي للكتاب للعام الحالي (14 ديسمبر - 24 ديسمبر 2017) تسهيلاً لعملية البحث عن أرقام أجنحة الدور المُشاركة في المعرض. لا تحمل هذه الصفحة أي صفة رسمية. وهي مفتوحة المصدر بإمكانك المساهمة في تعديلها أو متابعة التعديلات التي جرت عليها <a href="https://github.com/MohannadNaj/jeddah-books-fair">من هنا</a>. وجدير بالذكر أن المعرض يوفِّر في مواقع مختلفة منه شاشات الكترونية -يقف عليها متطوّعين للإرشاد والمساعدة- تسهّل عملية البحث عبر اسم المؤلِّف أو اسم الكتاب بالإضافة إلى البحث عن دور النشر وخريطة المعرض. استخدام هذه الشاشات يُغني -وبخصائص أفضل- عن استخدام هذه الصفحة ما لم يكُن حولها ازدحام.
		</div>
	</div>
</div>