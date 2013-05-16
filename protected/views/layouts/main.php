<!DOCTYPE html>
<?php /* @var $this Controller */ ?>

<html lang="ar">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="/css/ourstyle.css">
	<script src="<?php echo Yii::app()->bootstrap->getAssetsUrl();?>/js/bootstrap-dropdown.js" type="text/javascript" ></script>
</head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

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
<!-- Le javascript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php Yii::app()->bootstrap->registerAllJsPlugin(); /*

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="/assets/f9472bbc/js/jquery.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-transition.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-alert.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-modal.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-dropdown.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-tab.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-tooltip.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-popover.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-button.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-collapse.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-carousel.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-typeahead.js"></script>
    <script src="/assets/f9472bbc/js/bootstrap-affix.js"></script>

    <script src="/assets/f9472bbc/js/holder/holder.js"></script>
    <script src="/assets/f9472bbc/js/google-code-prettify/prettify.js"></script>

    <script src="/assets/f9472bbc/js/application.js"></script>

*/ ?>

    

</body>
</html>