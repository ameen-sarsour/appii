<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
    <form class="navbar-search pull-left" action="/site/search"  >
    <input type="text" name="term" class="search-query" placeholder="بحث">
    </form>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'أهلا بك في '.CHtml::encode(Yii::app()->name),
)); ?>

<p> تهانينا ! لقد انشئت تطبيقي بنجاح</p>

<?php $this->endWidget(); ?>

<p> يمكنك تغير محتوى هذه الصفحة عن طريق تعديل هذه الملفات</p>

<ul>
    <li>ملف العرض: <code><?php echo __FILE__; ?></code></li>
    <li>ملف النموذج: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>
	للمزيد من التفاصيل، يمكنك متابعتنا <a href="https://github.com/kefahi/appii">هنا</a>.
	ويمكنك طرح الاسئلة  <a href="https://github.com/kefahi/appii/issues/new"> هنا </a>,
    .</p>
