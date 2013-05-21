<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'عنا',
);
?>
<h1>عنا</h1>

<p> هذه صفحة ثابتة. يمكنك تغير محتوى هذه الصفحة عن طريق تعديل هذا الملف  <code><?php echo __FILE__; ?></code>.</p>
<?php
$this->widget('ext.duciscounter.DucisCounter', 
        array(
              'header'=>'Header',
              'body'=>'body',
               'footer'=>'footer',
              'start_timestamp' => strtotime("2014-04-04 02:00:00 GMT"), 
              'end_timestamp' => strtotime("2014-05-04 02:00:00 GMT"), 
               'now' => strtotime("2014-04-02 02:00:00 GMT")
            )
        );
