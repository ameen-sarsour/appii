<?php
        $cs = Yii::app()->getClientScript();
    $cs->registerCoreScript('jquery');

$cs->registerScriptFile(Yii::app()->bootstrap->getAssetsUrl() . '/js/application.js');
?>

<div class='container' >
  <div class="row">
    <div class="span3 bs-docs-sidebar" id="right-menu">
      <div>
      <ul class="nav nav-list bs-docs-sidenav affix">
        <li><a href="#gridSystem" ><i class="icon-chevron-right"></i>  عرض الشبكة </a></li>
        <li><a href="#responsive" ><i class="icon-chevron-right"></i> مرونة العرض </a></li>
        <li><a href="#images" ><i class="icon-chevron-right"></i> الصور</a></li>
        <li><a href="#icons" ><i class="icon-chevron-right"></i> الأيقونات</a></li>
        <li><a href="#navbar" ><i class="icon-chevron-right"></i>شريط التنقل</a></li>
        <li><a href="#scrollspy" ><i class="icon-chevron-right"></i>مراقب التنقل</a></li>
        <li><a href="#tooltips" ><i class="icon-chevron-right"></i>تلميحات</a></li>
        <li><a href="#popovers" ><i class="icon-chevron-right"></i>Popovers</a></li>
        <li><a href="#carousel" ><i class="icon-chevron-right"></i>Carousel</a></li>       
<li><a href='http://muayyad-alsadi.github.io/bootstrap-rtl/' > جميع الميزات والوثائق موجودة هنا </a></li>
      </ul>
      
    </div>
    </div>
    
    <div class='span9' data-spy="scroll" data-target="#right-menu">

<section id="gridSystem">
          <div class="page-header">
            <h1>عرض الشبكة الافتراضي </h1> 
            Default grid system <br/>
            - الصفحة الحالية: القائمة التي على اليمين تتكون من 3 اعمدة ( class="span3" ) وهذا الشرح يتكون من 9 أعمدة  ( class="span9" )
          </div>

          <h2>مثال</h2>
          <p> نظام الشبكة الافتراضي يستخدم 12 عامود، عرض الشاشة هو 940px اذا لم تكن ميزة الاستجابة مفعلة. عند تفعيل ميزة الاستجابةتتكيف الشبكة لتكون 724px 1170px واسعة اعتمادا على منفذ العرض الخاص بك.اذا كان العرض اقل من 767px، الأعمدة تصبح على شكل كومة عمودية.          </p>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div title="" data-original-title="" class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div title="" data-original-title="" class="span2">2</div>
              <div title="" data-original-title="" class="span3">3</div>
              <div class="span4">4</div>
            </div>
            <div class="row show-grid">
              <div title="" data-original-title="" class="span4">4</div>
              <div class="span5">5</div>
            </div>
            <div class="row show-grid">
              <div title="" data-original-title="" class="span9">9</div>
            </div>
          </div>

        </section>



<section id="responsive">
          <div class="page-header">
            <h1>مرونة العرض <small>Responsive design </small></h1>
            
          </div>
          
          <p> خاصية مرونة العرض تتيح اظهار الصفحة بشكل يتناسب مع جهاز العرض، شاشة عادية، او شاشر كبيرة او هاتف، يمكنك اذا كنت تستخدم حهاز عرض كبير، يمكنك تصغير شاشة المتصبح لرؤية ماذا يحصل للشاشة.</p>

          <h2>ميزات اكثر!</h2>

          <p> ليكون تصميمك خاص بالهاتف الجهوال، يمكنك اختيار التصينف المناسب (class) لعرض او اخفاء جزء معين، 

          <table class="table table-bordered table-striped responsive-utilities">
            <thead>
              <tr>
                <th>التصنيف <small>Class</small></th>
                <th>الهاتف <small>767px و اقف</small></th>
                <th>الاجهزة اللوحية <small>979px الى 768px</small></th>
                <th>سطح المكتب <small>افتراضي</small></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><code>.visible-phone</code></th>
                <td class="is-visible">اظهار</td>
                <td class="is-hidden">اخفاء</td>
                <td class="is-hidden">اخفاء</td>
              </tr>
              <tr>
                <th><code>.visible-tablet</code></th>
                <td class="is-hidden">اخفاء</td>
                <td class="is-visible">اظهار</td>
                <td class="is-hidden">اخفاء</td>
              </tr>
              <tr>
                <th><code>.visible-desktop</code></th>
                <td class="is-hidden">اخفاء</td>
                <td class="is-hidden">اخفاء</td>
                <td class="is-visible">اظهار</td>
              </tr>
              <tr>
                <th><code>.hidden-phone</code></th>
                <td class="is-hidden">اخفاء</td>
                <td class="is-visible">اظهار</td>
                <td class="is-visible">اظهار</td>
              </tr>
              <tr>
                <th><code>.hidden-tablet</code></th>
                <td class="is-visible">اظهار</td>
                <td class="is-hidden">اخفاء</td>
                <td class="is-visible">اظهار</td>
              </tr>
              <tr>
                <th><code>.hidden-desktop</code></th>
                <td class="is-visible">اظهار</td>
                <td class="is-visible">اظهار</td>
                <td class="is-hidden">اخفاء</td>
              </tr>
            </tbody>
          </table>


          <h3>مثال على المرونة</h3>
          <p>قم بتغير شاشة المتصفح او قم بفتح الصفحة على جهاز اخر لاختبار المثال.</p>
          <h4>يظهر عندما ...</h4>
          <p>المربع الاخضر يتغير حسب جهاز العرض.</p>
          <ul class="responsive-utilities-test">
            <li>هاتف<span class="visible-phone">✔ هاتف</span></li>
            <li>جهاز لوحي<span class="visible-tablet">✔ جهاز لوحي</span></li>
            <li>سطح المكتب<span class="visible-desktop">✔ جهاز سطح المكتب</span></li>
          </ul>
          <h4>يختفي عندما...</h4>
          <p>سيختفي المرع الاخضر عند جهاز العرض الحالي.</p>
          <ul class="responsive-utilities-test hidden-on">
            <li>هاتف<span class="hidden-phone">✔ هاتف</span></li>
            <li>جهاز لوحي<span class="hidden-tablet">✔ جهاز لوحي</span></li>
            <li>سطح المكتب<span class="hidden-desktop">✔ سطح المكتب</span></li>
          </ul>

        </section>


<section id="images">
          <div class="page-header">
            <h1>الصور</h1>
          </div>

          <p>يمكنك ادخال تصنيف (class) لوسم الصورة <code>&lt;img&gt;</code> لتسهيل تنسيقه  .</p>
          <div class="bs-docs-example bs-docs-example-images">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADEklEQVR4nO3YzWrqUBRA4b7/o+wESWPosCpFBx3bgkjtIIKm2rzCvoNLC/27t2vQWu0afGDwwJZkBXNy1vd9Sp91dugfoONiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEHF0wEfHCR+v2+31eXFy8u+7m5iabpsmyLLNpmry9vf3xs3+Kowvm9cX76Pvr6+scjUZv1t3d3WVE5Gw2y67rcjqdZkTkarU6itmHdpLB3N/f5/n5eW632zfrLi8vMyJyvV5n3/e5Xq8zInI0GuVkMsmIyOVymX3f53K5zIjIyWTy5bMPfT5/bTC73S6bpsnFYvHuurquMyJyv99n3//9+4iIrOs6u67Lqqqyqqps2/b5c9d1Xz770Ofz1wYzm83y6urqw3VlWb44fnx8zIjIsiyz7/tcLBbPxxHxfPG/Y/YxOLlg6rrOh4eHD9e9vst3u92bu7xpmoyIbJrm22f/dCcXzOudzOtdzdNzRNu22fd9tm374jliPp9nRGRVVRkROZ/Pv232MTi5YP637mmnMp1O3+xUNptNDgaDHA6Hud1uczgc5mAwyM1m8+WzD30+TzaYf93Bnw3r6V1IURQv3oWMx+MsiuL5Aq5WqyyKIsfj8ZfPPhZHF4wOy2CEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIyQP7hmPwOB/743AAAAAElFTkSuQmCC" style="width: 140px; height: 140px;" alt="140x140" data-src="holder.js/140x140" class="img-rounded">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADEklEQVR4nO3YzWrqUBRA4b7/o+wESWPosCpFBx3bgkjtIIKm2rzCvoNLC/27t2vQWu0afGDwwJZkBXNy1vd9Sp91dugfoONiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEHF0wEfHCR+v2+31eXFy8u+7m5iabpsmyLLNpmry9vf3xs3+Kowvm9cX76Pvr6+scjUZv1t3d3WVE5Gw2y67rcjqdZkTkarU6itmHdpLB3N/f5/n5eW632zfrLi8vMyJyvV5n3/e5Xq8zInI0GuVkMsmIyOVymX3f53K5zIjIyWTy5bMPfT5/bTC73S6bpsnFYvHuurquMyJyv99n3//9+4iIrOs6u67Lqqqyqqps2/b5c9d1Xz770Ofz1wYzm83y6urqw3VlWb44fnx8zIjIsiyz7/tcLBbPxxHxfPG/Y/YxOLlg6rrOh4eHD9e9vst3u92bu7xpmoyIbJrm22f/dCcXzOudzOtdzdNzRNu22fd9tm374jliPp9nRGRVVRkROZ/Pv232MTi5YP637mmnMp1O3+xUNptNDgaDHA6Hud1uczgc5mAwyM1m8+WzD30+TzaYf93Bnw3r6V1IURQv3oWMx+MsiuL5Aq5WqyyKIsfj8ZfPPhZHF4wOy2CEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIyQP7hmPwOB/743AAAAAElFTkSuQmCC" style="width: 140px; height: 140px;" alt="140x140" data-src="holder.js/140x140" class="img-circle">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADEklEQVR4nO3YzWrqUBRA4b7/o+wESWPosCpFBx3bgkjtIIKm2rzCvoNLC/27t2vQWu0afGDwwJZkBXNy1vd9Sp91dugfoONiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEHF0wEfHCR+v2+31eXFy8u+7m5iabpsmyLLNpmry9vf3xs3+Kowvm9cX76Pvr6+scjUZv1t3d3WVE5Gw2y67rcjqdZkTkarU6itmHdpLB3N/f5/n5eW632zfrLi8vMyJyvV5n3/e5Xq8zInI0GuVkMsmIyOVymX3f53K5zIjIyWTy5bMPfT5/bTC73S6bpsnFYvHuurquMyJyv99n3//9+4iIrOs6u67Lqqqyqqps2/b5c9d1Xz770Ofz1wYzm83y6urqw3VlWb44fnx8zIjIsiyz7/tcLBbPxxHxfPG/Y/YxOLlg6rrOh4eHD9e9vst3u92bu7xpmoyIbJrm22f/dCcXzOudzOtdzdNzRNu22fd9tm374jliPp9nRGRVVRkROZ/Pv232MTi5YP637mmnMp1O3+xUNptNDgaDHA6Hud1uczgc5mAwyM1m8+WzD30+TzaYf93Bnw3r6V1IURQv3oWMx+MsiuL5Aq5WqyyKIsfj8ZfPPhZHF4wOy2CEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIwQgxFiMEIMRojBCDEYIQYjxGCEGIyQP7hmPwOB/743AAAAAElFTkSuQmCC" style="width: 140px; height: 140px;" alt="140x140" data-src="holder.js/140x140" class="img-polaroid">
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"..."</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"img-rounded"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"..."</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"img-circle"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"..."</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"img-polaroid"</span><span class="tag">&gt;</span></li></ol></pre>


        </section>


        <section id="icons">
          <div class="page-header">
            <h1>الأيقونات </h1>
          </div>

          <p>يوجد 140 ايقونة مقدمة من  <a href="http://glyphicons.com" target="_blank">Glyphicons</a> يمكنك استخدامها عن طريق كتابة اسم التصنيف</p>
          <p> امثلى على الايقونات </p>
          <ul class="the-icons clearfix">
            <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
            <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
            <li><i class="icon-retweet"></i> icon-retweet</li>
            <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
            <li><i class="icon-folder-close"></i> icon-folder-close</li>
            <li><i class="icon-folder-open"></i> icon-folder-open</li>
            <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
            <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
            <li><i class="icon-hdd"></i> icon-hdd</li>
            <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
            <li><i class="icon-bell"></i> icon-bell</li>
            <li><i class="icon-certificate"></i> icon-certificate</li>
            <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
            <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
            <li><i class="icon-hand-right"></i> icon-hand-right</li>
            <li><i class="icon-hand-left"></i> icon-hand-left</li>
            <li><i class="icon-hand-up"></i> icon-hand-up</li>
            <li><i class="icon-hand-down"></i> icon-hand-down</li>
            <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
            <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
            <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
            <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
            <li><i class="icon-globe"></i> icon-globe</li>
            <li><i class="icon-wrench"></i> icon-wrench</li>
            <li><i class="icon-tasks"></i> icon-tasks</li>
            <li><i class="icon-filter"></i> icon-filter</li>
            <li><i class="icon-briefcase"></i> icon-briefcase</li>
            <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
          </ul>

          

          <h2>كيفية الاستخدام</h2>
          <p>يمكنك استخدماها عن بواسطة وسم ال <code>&lt;i&gt;</code> مع اسم التصنيف (class) , </p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-search"</span><span class="tag">&gt;&lt;/i&gt;</span></li></ol></pre>



          <h2>امثلة</h2>
          <p> اسخدمنا الايقونات في القائمة التي على اليميمن.</p>

          

          <h4>الأزرار</h4>

          <div class="bs-docs-example">
            <div class="btn-toolbar">
              <div class="btn-group">
                <a class="btn" href="#"><i class="icon-align-left"></i></a>
                <a class="btn" href="#"><i class="icon-align-center"></i></a>
                <a class="btn" href="#"><i class="icon-align-right"></i></a>
                <a class="btn" href="#"><i class="icon-align-justify"></i></a>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-left"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-center"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-right"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-align-justify"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h5>Dropdown in a button group</h5>
          <div class="bs-docs-example">
            <div class="btn-group">
              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="i"></i> Make admin</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-user icon-white"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> User</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;&lt;/a&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-pencil"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Edit</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-trash"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Delete</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-ban-circle"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Ban</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"i"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Make admin</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L9"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L0"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          
          <h4>التنقل</h4>
          <div class="bs-docs-example">
            <div class="well" style="padding: 8px 0; margin-bottom: 0;">
              <ul class="nav nav-list">
                <li class="active"><a href="#"><i class="icon-home icon-white"></i> الرئيسية</a></li>
                <li><a href="#"><i class="icon-book"></i> المكتبة</a></li>
                <li><a href="#"><i class="icon-pencil"></i> تطبيقات</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-list"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-home icon-white"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Home</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-book"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Library</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-pencil"</span><span class="tag">&gt;&lt;/i&gt;</span><span class="pln"> Applications</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"i"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>


        </section>








<section id="navbar">
          <div class="page-header">
            <h1>شريط التنقل</h1>
          </div>


          
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Title</a>
                <ul class="nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Link</a></li>
                </ul>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar-inner"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Title</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="pln">      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;/ul&gt;</span></li><li class="L8"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L9"><span class="tag">&lt;/div&gt;</span></li></ol></pre>


          <hr class="bs-docs-separator">

        </section>        






<section id="scrollspy">
          <div class="page-header">
            <h1> مراقب التنقل <small> ScrollSpy</small></h1>
          </div>          
          
          <div class="bs-docs-example">
            <div id="navbarExample" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">Project Name</a>
                  <ul class="nav">
                    <li class="active"><a href="#fat">@fat</a></li>
                    <li class=""><a href="#mdo">@mdo</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class=""><a href="#one">one</a></li>
                        <li class=""><a href="#two">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#three">three</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example">
              <h4 id="fat">@fat</h4>
              <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
              <h4 id="mdo">@mdo</h4>
              <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
              <h4 id="one">one</h4>
              <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
              <h4 id="two">two</h4>
              <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
              <h4 id="three">three</h4>
              <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
              <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
              </p>
            </div>
          </div>


          <hr class="bs-docs-separator">


        </section>



<section id="tooltips">
          <div class="page-header">
            <h1>تلميحات <small> tooltips</small></h1>
          </div>


          <div class="bs-docs-example tooltip-demo">
            <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a data-original-title="Another tooltip" href="#" data-toggle="tooltip" title="">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip" title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
            </p>
          </div>

          <h3>من الاتجاهات الأربع</h3>
          <div class="bs-docs-example tooltip-demo">
            <ul class="bs-docs-tooltip-examples">
              <li><a data-original-title="تلميح من الأعلى" href="#" data-toggle="tooltip" data-placement="top" title="">تلميح من الأعلى</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="right" title="تلميح من اليمين">تلميح من اليمين</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="تلميح من الأسفل">تلميح من الأسفل</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="left" title="تلميح من اليسار">تلميح من اليسار</a></li>
            </ul>
          </div>


          
           </section>




<section id="popovers">
          <h3>Static popover</h3>
        
                <div class="bs-docs-example bs-docs-example-popover">
          <div class="popover top">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover top</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>


          <div class="popover right">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover right</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover bottom">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover bottom</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="popover left">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover left</h3>
            <div class="popover-content">
              <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>

          <div class="clearfix"></div>
        </div>

        <h3>مثال</h3>
        
        <h4>اربع اتجاهات</h4>
        <div class="bs-docs-example tooltip-demo">
          <ul class="bs-docs-tooltip-examples">
            <li><a data-original-title="Popover من الأعلى" href="#" class="btn" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover من الأعلى</a></li>
            <li><a data-original-title="Popover من اليمين" href="#" class="btn" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover من اليمين</a></li>
            <li><a data-original-title="Popover من الأسفل" href="#" class="btn" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover من الأسفل</a></li>
            <li><a data-original-title="Popover من اليسار" href="#" class="btn" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover من اليسار</a></li>
          </ul>
        </div>


        <hr class="bs-docs-separator">


      </section>




<section id="carousel">
            <div class="page-header">
              <h1>Carousel <small>bootstrap-carousel.js</small></h1>
            </div>

            <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li class="active" data-target="#myCarousel" data-slide-to="1"></li>
                  <li class="" data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img src="/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item active">
                    <img src="/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">›</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">‹</a>
              </div>
            </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"myCarousel"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"carousel slide"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"carousel-indicators"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">"#myCarousel"</span><span class="pln"> </span><span class="atn">data-slide-to</span><span class="pun">=</span><span class="atv">"0"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">"#myCarousel"</span><span class="pln"> </span><span class="atn">data-slide-to</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">"#myCarousel"</span><span class="pln"> </span><span class="atn">data-slide-to</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;/ol&gt;</span></li><li class="L6"><span class="pln">  </span><span class="com">&lt;!-- Carousel items --&gt;</span></li><li class="L7"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"carousel-inner"</span><span class="tag">&gt;</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active item"</span><span class="tag">&gt;</span><span class="pln">…</span><span class="tag">&lt;/div&gt;</span></li><li class="L9"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"item"</span><span class="tag">&gt;</span><span class="pln">…</span><span class="tag">&lt;/div&gt;</span></li><li class="L0"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"item"</span><span class="tag">&gt;</span><span class="pln">…</span><span class="tag">&lt;/div&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="pln">  </span><span class="com">&lt;!-- Carousel nav --&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"carousel-control left"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#myCarousel"</span><span class="pln"> </span><span class="atn">data-slide</span><span class="pun">=</span><span class="atv">"prev"</span><span class="tag">&gt;</span><span class="pln">&amp;lsaquo;</span><span class="tag">&lt;/a&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"carousel-control right"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#myCarousel"</span><span class="pln"> </span><span class="atn">data-slide</span><span class="pun">=</span><span class="atv">"next"</span><span class="tag">&gt;</span><span class="pln">&amp;rsaquo;</span><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          </section>




    </div>
  </div>
</div>
</dvi>