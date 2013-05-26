<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1> نتائج البحث في  صحيح بخاري</h1>
<hr />
<?php
echo '<h2> النتائج في العناوين </h2>';
foreach ( $captions as $hit )
echo $hit->_source->title;
echo '<br/> <br/> <h2>النتائح في الصفحات</h2>' ;
foreach ( $pages as $hit )
echo $hit->_source->content;


 ?>

