<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<form class="navbar-search pull-left" action="/site/search"  >
    <input type="text" name="term" class="search-query" placeholder="بحث">
</form>

<h1> نتائج البحث في  صحيح بخاري</h1>
<hr />
<?php
echo '<h2> النتائج في العناوين </h2>';

foreach ( $captions as $hit )
{
	$title =  $hit->_source->title;
	if(isset( $hit->highlight ) ) {  
		preg_match('/<tag>(.*?)<\/tag>/s',  $hit->highlight->title[0]  , $matches); 
	  $title =      str_replace($matches[1], '<span style="background-color:yellow" >' . $matches[1] . '</span>', $title ) ;
	}
	echo $title  . '<br / > <hr />';
}

echo '<br/> <br/> <h2>النتائح في الصفحات</h2>' ;
foreach ( $pages as $hit ){
	  $title =  $hit->_source->content; 
  if(isset( $hit->highlight ) ) { 
foreach ( $hit->highlight->content as $content ) {
    preg_match('/<tag>(.*?)<\/tag>/s',  $content  , $matches);
    $title =      str_replace($matches[1], '<span style="background-color:yellow" >' . $matches[1] . '</span>', $title ) ;
}
  }
  echo $title . '<br / > <hr />';

}


 ?>

