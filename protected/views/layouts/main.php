<!DOCTYPE html>
<?php /* @var $this Controller */ ?>

<html lang="ar">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	 <link rel="stylesheet" type="text/css" href="/css/ourstyle.css">
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'الرئيسية', 'url'=>array('/site/index')),
                array('label'=>'عنا', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'التواصل', 'url'=>array('/site/contact')),
                array('label'=>'جديد', 'url'=>array('/site/page', 'view'=>'bootstrap')),
                array('label'=>'ولوج', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'خروح ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>



<div class="container" id="page">



	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		<hr />
		حقوق النسخة  &copy; <?php echo date('Y'); ?> لشركتي.<br/>
		حميع الحقوق محفوظة.<br/>
		مدعومة بواسطة 
	<a href="https://github.com/kefahi/appii/" rel="external">تطبيقي</a>	
	
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>