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
<li><a target=blank href='http://muayyad-alsadi.github.io/bootstrap-rtl/' > جميع الميزات وتوثيقها موجود على هذا الرابط  http://muayyad-alsadi.github.io/bootstrap-rtl/ </a></li>
      </ul>
      
    </div>
    </div>
    
    <div class='span9' data-spy="scroll" data-target="#right-menu">

<section id="gridSystem">
          <div class="page-header">
            <h1>عرض الشبكة الافتراضي <small>
            Default grid system </small> </h1> <br/>
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

          <h5>قائمة منسدلة ومجموعة من الأزرار</h5>
          <div class="bs-docs-example">
            <div class="btn-group">
              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> المستخدم</a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-pencil"></i> تحرير</a></li>
                <li><a href="#"><i class="icon-trash"></i> حذف</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="i"></i> ترقيه</a></li>
              </ul>
            </div>
          </div>
          
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


        </section>








<section id="navbar">
          <div class="page-header">
            <h1>شريط التنقل</h1>
          </div>


          
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">العنوان</a>
                <ul class="nav">
                  <li class="active"><a href="#">الرئيسية</a></li>
                  <li><a href="#">رابط</a></li>
                  <li><a href="#">رابط</a></li>
                </ul>
              </div>
            </div>
          </div>


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
                  <a class="brand" href="#">مجمع الأحكام</a>
                  <ul class="nav">
                    <li class="active"><a href="#fat">حِلمٌ</a></li>
                    <li class=""><a href="#mdo">رُبَّ أخٍ لَكَ لَم تَلِدْه أمّك </a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">الشافعي <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class=""><a href="#one">طولُ الحياةِ طيبُ الذكر </a></li>
                        <li class=""><a href="#two">الحَثُّ على السفر</a></li>
                        <li class="divider"></li>
                        <li><a href="#three">مَحبَّةُ الصالِحين</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example">
              <h4 id="fat">حِلمٌ</h4>
              <p>قال خالدُ بنُ صفوان وهو مِن شُعراءِ العربِ : رأيتُ رَجلاً شَتَمَ عمرو بن عُبيد، فَما بَقّى لهُ شيئاً. فلمّا سَكَتَ، قال لهُ عمرو : آجركَ الله على الصوابِ وغفرَ لكَ الخطأ. قال خالد : فما حَسَدتُ أحداً حَسَدي لَهُ على حِلمِهِ وكلمَتِه.</p>
              <h4 id="mdo">رُبَّ أخٍ لَكَ لَم تَلِدْه أمّك </h4>
              <p> أخٌ لي عِندَهُ أدَبُ -- صَداقَةُ مِثلِهُ نَسَبُ <br/>
رَعى لي فَوقَ ما أرعى -- وأوجَبَ لي فوقَ ما يَجِبُ.</p>
              <h4 id="one">
طولُ الحياةِ طيبُ الذكر </h4>
              <p>قد ماتَ قَومٌ وما ماتت مكارِمُهُم -- وعاشَ قَومٌ وهُم في الناسِ أمواتُ.</p>
              <h4 id="two">الحَثُّ على السفر </h4>
              <p> ما في المُقامِ لذي عَقلٍ وذي أَدَبٍ -- مِن راحةٍ فَدَعْ الأوطانَ واغتربِ <br/>
سافرْ تَجِدْ عَوَضاً عَمَّن تُفارِقُهُ -- وانصَبْ فإنَّ لَذيذَ العَيشِ في النَصَبِ.</p>
              <h4 id="three">
مَحبَّةُ الصالِحين </h4>
              <p> أُحِبُّ الصالحينَ وَ لَستُ مِنهُم -- لَعَلي أَنْ أَنالَ بِهِم شَفاعَة <br />
وأَكرَهُ مَن تِجارَتُهُ المعاصي -- وَ لَو كُنَّا سَواءٌ في البِضاعَة
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
            <p class="muted" style="margin-bottom: 0;">
 وقال <a href="#" data-toggle="tooltip" title="شاعر وعالم وفقيه">الشافعي</a>  :
كُلَّما أَدَّبَني الدَّهرُ -- أَراني نَقصَ عَقلي
وَ إذا ما ازدَدتُ عِلماً -- زادَني عِلماً بِجَهلي

              
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
          <h3>Popover ثابت</h3>
        
                <div class="bs-docs-example bs-docs-example-popover">
          <div class="popover top">
            <div class="arrow"></div>
            <h3 class="popover-title">من الأعلى</h3>
            <div class="popover-content">
              <p> و قَد كُنتُ أُخفِي حُبَّ مَيٍّ  و ذِكرَهَا -- رَسيسَ الهَوَى حَتّى كأنْ لا أُريدُها <br/>
فَما زالَ يَغلُو حبُّ مَيَّةَ عِندَنا -- و يَزدادُ حَتّى لَمْ نَجِدْ ما يَزِيدُها .</p>
            </div>
          </div>


          <div class="popover right">
            <div class="arrow"></div>
            <h3 class="popover-title">من اليمين</h3>
            <div class="popover-content">

                <p> حَيِّ المَنَازِلَ إذْ لا نَبْتَغي بَدَلاً  --  بِالدارِ داراً، وَلا الجِيرَانِ جِيرَانَا <br/>

قَدْ كنْتُ في أثَرِ الأظْعانِ ذا طَرَبٍ  --  مُرَوَّعاً مِن حذارِ البينِ محزانا.</p>

            </div>
          </div>

          <div class="popover bottom">
            <div class="arrow"></div>
            <h3 class="popover-title">من الأسفل</h3>
            <div class="popover-content">

              <p> بَانَ الخَليطُ، وَلَو طُوِّعْتُ ما بَانَا،  --  و قَطَّعوا مِن حِبالِ الوَصلِ أقرانا.</p>            
            </div>
          </div>

          <div class="popover left">
            <div class="arrow"></div>
            <h3 class="popover-title">من اليسار</h3>
            <div class="popover-content">
              <p> إنّ العُيُونَ التي في طَرْفِها حَوَرٌ،  --  قتلننا ثمَّ لَم يُحيينَ قتلانا.</p>
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
              <h1>التدوير <small>Carousel</small></h1>
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
                      <h4>العنوان الأول</h4>
                      <p>النص الأول .</p>
                    </div>
                  </div>
                  <div class="item active">
                    <img src="/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>العنوان الثاني</h4>
                      <p>النص الثاني.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>العنوان الثالث</h4>
                      <p>النص الثالث.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">›</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">‹</a>
              </div>
            </div>

          </section>




    </div>
  </div>
</div>
</dvi>