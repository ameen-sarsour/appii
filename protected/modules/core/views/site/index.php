<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<p>
    <form class="navbar-search pull-left" action="/site/search"  >
    <input type="text" name="term" class="search-query" placeholder="بحث">
    </form>
</p>

<br />
<?php
echo 'أحدث التدوينات';

$this->widget('FivePost');
?>



