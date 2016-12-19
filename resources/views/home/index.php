<div style="margin-bottom:  20px;" class="col-xs-12">
	<div class="row">
	  	<div class="pull-right text-center col-md-6 col-xs-12" style="    margin-bottom: 22px;">
			<a target="_blank" style="max-width: 100%; width: 220px; white-space: normal;" href="<?=base_url('jeddah_book_fair.pdf');?>" class="btn btn-default">
				<img src="<?=base_url('pdf-icon.png');?>" style="float: left"><div style="max-width: 100%">قائمة دور النشر مع خريطة المعرض</div>
			</a>
		</div>
	  	<div class="pull-right text-center col-md-6 col-xs-12">
			<a target="_blank" style="max-width: 100%; width: 220px; white-space: normal;" href="<?=base_url('booksfair.png');?>" class="btn btn-default">
				<img src="<?=base_url('png-icon.png');?>" style="float: left"><div style="max-width: 100%">صورة لخريطة المعرض</div>
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
		<div class="collapse accuracy">
			يوفِّر <a href="http://jeddahbookfair.com/">موقع معرض جدة الدولي للكتاب</a> قائمة <a href="http://jeddahbookfair.com/wp-content/uploads/2016/12/%D9%82%D8%A7%D9%8A%D9%94%D9%85%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D8%B1%D8%B6%D9%8A%D9%86.xlsx">بأسماء العارضين</a> كملف Excel Sheet وهي القائمة المُستخدمة هنا كمصدر البيانات. أما الخريطة المُشار إليها في أعلى الصفحة كصورة: حصلت عليها أثناء البحث في تويتر من <a href="https://twitter.com/nasserradwan/status/806399721938046985">تغريدة للمغرِّد ناصر رضوان</a>، وقمتُ بتعديلها -محاولةً لتحسين جودتها- من حيث الألوان والوضوح والتباين. أما ملف الـPDF المُشار إليه في أعلى الصفحة، فهو عبارة عن ترتيب للقائمة التي حصلت عليها من موقع المعرض، بالإضافة إلى ذات الخريطة المُشار إليها.<br>
			لأي اقتراحات، اكتُب لي فضلاً على تويتر: <a href="https://twitter.com/MohannadNaj">@MohannadNaj</a>
		</div>
	</div>
	<div style="margin-bottom: 20px; text-align: justify;" class="col-xs-12 col-sm-6">
  		<h5 class="btn btn-default" data-toggle="collapse" data-target=".about">عن هذه الصفحة <span class="caret"></span></h5>
  		<br>
		<div class="collapse about">
			أُنشِئت هذه الصفحة -على عجل- لمساعدة زوار معرض جدة الدولي للكتاب (15 ديسمبر - 25 ديسمبر 2016) تسهيلاً لعملية البحث عن أرقام أجنحة الدور المُشاركة في المعرض. لا تحمل هذه الصفحة أي صفة رسمية. وجدير بالذكر بأن المعرض يوفِّر في مواقع مختلفة منه شاشات الكترونية -يقف عليها متطوّعين للإرشاد والمساعدة- تسهّل عملية البحث عبر اسم المؤلِّف أو اسم الكتاب بالإضافة إلى البحث عن دور النشر وخريطة المعرض. استخدام هذه الشاشات يُغني -وبخصائص أفضل- عن استخدام هذه الصفحة ما لم يكُن حولها ازدحام.
		</div>
	</div>
</div>