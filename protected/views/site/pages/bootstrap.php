<div data-spy="scroll" data-target=".bs-docs-sidebar">
<div class=container >
  <div class="row">
    <div class="span3 bs-docs-sidebar">
      <ul class="nav nav-list bs-docs-sidenav affix">
        <li><a href="#gridSystem"><i class="icon-chevron-right"></i>  عرض الشبكة </a></li>
        <li><a href="#responsive"><i class="icon-chevron-right"></i> مرونة العرض </a></li>
        <li><a href="#images"><i class="icon-chevron-right"></i> الصور</a></li>
        <li><a href="#icons"><i class="icon-chevron-right"></i> الأيقونات</a></li>
        <li><a href="#pagination"><i class="icon-chevron-right"></i> التصفح </a></li>

        
      </ul>
    </div>
    
    <div class=span9 >

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







        <section id="pagination">
          <div class="page-header">
            <h1>Pagination <small>Two options for paging through content</small></h1>
          </div>

          <h2>Standard pagination</h2>
          <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
          <div class="bs-docs-example">
            <div class="pagination">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Prev</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">3</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">4</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">5</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Next</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L9"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L0"><span class="tag">&lt;/div&gt;</span></li></ol></pre>


          <hr class="bs-docs-separator">


          <h2>Options</h2>

          <h3>Disabled and active states</h3>
          <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
          <div class="bs-docs-example">
            <div class="pagination pagination-centered">
              <ul>
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
             </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"disabled"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">&amp;laquo;</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">    ...</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L6"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
          <p>You can optionally swap out active or disabled anchors for spans to remove click functionality while retaining intended styles.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"disabled"</span><span class="tag">&gt;&lt;span&gt;</span><span class="pln">&amp;laquo;</span><span class="tag">&lt;/span&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;span&gt;</span><span class="pln">1</span><span class="tag">&lt;/span&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">    ...</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L6"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h3>Sizes</h3>
          <p>Fancy larger or smaller pagination? Add <code>.pagination-large</code>, <code>.pagination-small</code>, or <code>.pagination-mini</code> for additional sizes.</p>
          <div class="bs-docs-example">
            <div class="pagination pagination-large">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
            <div class="pagination">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
             </ul>
            </div>
            <div class="pagination pagination-small">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
            <div class="pagination pagination-mini">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination pagination-large"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="pln">    ...</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L4"><span class="tag">&lt;/div&gt;</span></li><li class="L5"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L7"><span class="pln">    ...</span></li><li class="L8"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L9"><span class="tag">&lt;/div&gt;</span></li><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination pagination-small"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="pln">    ...</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L4"><span class="tag">&lt;/div&gt;</span></li><li class="L5"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination pagination-mini"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L7"><span class="pln">    ...</span></li><li class="L8"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L9"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h3>Alignment</h3>
          <p>Add one of two optional classes to change the alignment of pagination links: <code>.pagination-centered</code> and <code>.pagination-right</code>.</p>
          <div class="bs-docs-example">
            <div class="pagination pagination-centered">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
             </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination pagination-centered"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
          <div class="bs-docs-example">
            <div class="pagination pagination-right">
              <ul>
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination pagination-right"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>


          <hr class="bs-docs-separator">


          <h2>Pager</h2>
          <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>

          <h3>Default example</h3>
          <p>By default, the pager centers links.</p>
          <div class="bs-docs-example">
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pager"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Previous</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Next</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>

          <h3>Aligned links</h3>
          <p>Alternatively, you can align each link to the sides:</p>
          <div class="bs-docs-example">
            <ul class="pager">
              <li class="previous"><a href="#">← Older</a></li>
              <li class="next"><a href="#">Newer →</a></li>
            </ul>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pager"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"previous"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">&amp;larr; Older</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"next"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Newer &amp;rarr;</span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L7"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>

          <h3>Optional disabled state</h3>
          <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
          <div class="bs-docs-example">
            <ul class="pager">
              <li class="previous disabled"><a href="#">← Older</a></li>
              <li class="next"><a href="#">Newer →</a></li>
            </ul>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pager"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"previous disabled"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">&amp;larr; Older</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="pln">  ...</span></li><li class="L5"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>

        </section>





<section id="navbar">
          <div class="page-header">
            <h1>Navbar</h1>
          </div>


          <h2>Basic navbar</h2>
          <p>To start, navbars are static (not fixed to the top) and include support for a project name and basic navigation. Place one anywhere within a <code>.container</code>, which sets the width of your site and content.</p>
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


          <h2>Navbar components</h2>

          <h3>Brand</h3>
          <p>A simple link to show your brand or project name only requires an anchor tag.</p>
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <a class="brand" href="#">Title</a>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Project name</span><span class="tag">&lt;/a&gt;</span></li></ol></pre>

          <h3>Nav links</h3>
          <p>Nav items are simple to add via unordered lists.</p>
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Link</a></li>
                </ul>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
          <p>You can easily add dividers to your nav links with an empty list item and a simple class. Just add this between links:</p>
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li class="divider-vertical"></li>
                  <li><a href="#">Link</a></li>
                  <li class="divider-vertical"></li>
                  <li><a href="#">Link</a></li>
                  <li class="divider-vertical"></li>
                </ul>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider-vertical"</span><span class="tag">&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  ...</span></li><li class="L4"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>

          <h3>Forms</h3>
          <p>To properly style and position a form within the navbar, add the appropriate classes as shown below. For a default form, include <code>.navbar-form</code> and either <code>.pull-left</code> or <code>.pull-right</code> to properly align it.</p>
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <form class="navbar-form pull-left">
                  <input class="span2" type="text">
                  <button type="submit" class="btn">Submit</button>
                </form>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar-form pull-left"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span2"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="tag">&gt;</span><span class="pln">Submit</span><span class="tag">&lt;/button&gt;</span></li><li class="L3"><span class="tag">&lt;/form&gt;</span></li></ol></pre>

          <h3>Search form</h3>
          <p>For a more customized search form, add <code>.navbar-search</code> to the <code>form</code> and <code>.search-query</code> to the input for specialized styles in the navbar.</p>
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <form class="navbar-search pull-left">
                  <input class="search-query" placeholder="Search" type="text">
                </form>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar-search pull-left"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"search-query"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Search"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;/form&gt;</span></li></ol></pre>

          <h3>Component alignment</h3>
          <p>Align nav links, search form, or text, use the <code>.pull-left</code> or <code>.pull-right</code> utility classes. Both classes will add a CSS float in the specified direction.</p>

          <h3>Using dropdowns</h3>
          <p>Add dropdowns and dropups to the nav with a bit of markup and the <a href="./javascript.html#dropdowns">dropdowns JavaScript plugin</a>.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span></li><li class="L3"><span class="pln">      Account</span></li><li class="L4"><span class="pln">      </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L7"><span class="pln">      ...</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;/ul&gt;</span></li><li class="L9"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L0"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
          <p>Visit the <a href="./javascript.html#dropdowns">JavaScript dropdowns documentation</a> for more markup and information on calling dropdowns.</p>

          <h3>Text</h3>
          <p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>


          <hr class="bs-docs-separator">


          <h2>Optional display variations</h2>
          <p>Fix the navbar to the top or bottom of the viewport with an additional class on the outermost div, <code>.navbar</code>.</p>

          <h3>Fixed to top</h3>
          <p>Add <code>.navbar-fixed-top</code> and remember to account for the hidden area underneath it by adding at least 40px <code>padding</code> to the <code>&lt;body&gt;</code>. Be sure to add this after the core Bootstrap CSS and before the optional responsive CSS.</p>
          <div class="bs-docs-example bs-navbar-top-example">
            <div class="navbar navbar-fixed-top" style="position: absolute;">
              <div class="navbar-inner">
                <div class="container" style="width: auto; padding: 0 20px;">
                  <a class="brand" href="#">Title</a>
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar navbar-fixed-top"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h3>Fixed to bottom</h3>
          <p>Add <code>.navbar-fixed-bottom</code> instead.</p>
          <div class="bs-docs-example bs-navbar-bottom-example">
            <div class="navbar navbar-fixed-bottom" style="position: absolute;">
              <div class="navbar-inner">
                <div class="container" style="width: auto; padding: 0 20px;">
                  <a class="brand" href="#">Title</a>
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar navbar-fixed-bottom"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h3>Static top navbar</h3>
          <p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-top</code> class, you do not need to change any padding on the <code>body</code>.</p>
          <div class="bs-docs-example bs-navbar-top-example">
            <div class="navbar navbar-static-top" style="margin: -1px -1px 0;">
              <div class="navbar-inner">
                <div class="container" style="width: auto; padding: 0 20px;">
                  <a class="brand" href="#">Title</a>
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar navbar-static-top"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>


          <hr class="bs-docs-separator">


          <h2>Responsive navbar</h2>
          <p>To implement a collapsing responsive navbar, wrap your navbar content in a containing div, <code>.nav-collapse.collapse</code>, and add the navbar toggle button, <code>.btn-navbar</code>.</p>
          <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">Title</a>
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="nav-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-search pull-left" action="">
                      <input class="search-query span2" placeholder="Search" type="text">
                    </form>
                    <ul class="nav pull-right">
                      <li><a href="#">Link</a></li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar-inner"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"container"</span><span class="tag">&gt;</span></li><li class="L3"><span class="pln">&nbsp;</span></li><li class="L4"><span class="pln">      </span><span class="com">&lt;!-- .btn-navbar is used as the toggle for collapsed navbar content --&gt;</span></li><li class="L5"><span class="pln">      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-navbar"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"collapse"</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">".nav-collapse"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-bar"</span><span class="tag">&gt;&lt;/span&gt;</span></li><li class="L7"><span class="pln">        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-bar"</span><span class="tag">&gt;&lt;/span&gt;</span></li><li class="L8"><span class="pln">        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-bar"</span><span class="tag">&gt;&lt;/span&gt;</span></li><li class="L9"><span class="pln">      </span><span class="tag">&lt;/a&gt;</span></li><li class="L0"><span class="pln">&nbsp;</span></li><li class="L1"><span class="pln">      </span><span class="com">&lt;!-- Be sure to leave the brand out there if you want it shown --&gt;</span></li><li class="L2"><span class="pln">      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Project name</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="pln">&nbsp;</span></li><li class="L4"><span class="pln">      </span><span class="com">&lt;!-- Everything you want hidden at 940px or less, place within here --&gt;</span></li><li class="L5"><span class="pln">      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav-collapse collapse"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">        </span><span class="com">&lt;!-- .nav, .navbar-search, .navbar-form, etc --&gt;</span></li><li class="L7"><span class="pln">      </span><span class="tag">&lt;/div&gt;</span></li><li class="L8"><span class="pln">&nbsp;</span></li><li class="L9"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L0"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L1"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
          <div class="alert alert-info">
            <strong>Heads up!</strong> The responsive navbar requires the <a href="./javascript.html#collapse">collapse plugin</a> and <a href="./scaffolding.html#responsive">responsive Bootstrap CSS file</a>.
          </div>


          <hr class="bs-docs-separator">


          <h2>Inverted variation</h2>
          <p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>
          <div class="bs-docs-example">
            <div class="navbar navbar-inverse" style="position: static;">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">Title</a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="nav-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-search pull-left" action="">
                      <input class="search-query span2" placeholder="Search" type="text">
                    </form>
                    <ul class="nav pull-right">
                      <li><a href="#">Link</a></li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
          </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"navbar navbar-inverse"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

        </section>        




<section id="dropdowns">
          <div class="page-header">
            <h1>Dropdowns <small>bootstrap-dropdown.js</small></h1>
          </div>


          <h2>Examples</h2>
          <p>Add dropdown menus to nearly anything with this simple plugin, including the navbar, tabs, and pills.</p>

          <h3>Within a navbar</h3>
          <div class="bs-docs-example">
            <div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">Project Name</a>
                  <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="http://google.com">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#anotherAction">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div> <!-- /navbar-example -->
          </div> 

          <h3>Within tabs</h3>
          <div class="bs-docs-example">
            <ul class="nav nav-pills">
              <li class="active"><a href="#">Regular link</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
                <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Dropdown 3 <b class="caret"></b></a>
                <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
            </ul> <!-- /tabs -->
          </div> 


          <hr class="bs-docs-separator">


          <h2>Usage</h2>

          <h3>Via data attributes</h3>
          <p>Add <code>data-toggle="dropdown"</code> to a link or button to toggle a dropdown.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Dropdown trigger</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pun">=</span><span class="atv">"menu"</span><span class="pln"> </span><span class="atn">aria-labelledby</span><span class="pun">=</span><span class="atv">"dLabel"</span><span class="tag">&gt;</span></li><li class="L3"><span class="pln">    ...</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L5"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
          <p>To keep URLs intact, use the <code>data-target</code> attribute instead of <code>href="#"</code>.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"dLabel"</span><span class="pln"> </span><span class="atn">role</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/page.html"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    Dropdown</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pun">=</span><span class="atv">"menu"</span><span class="pln"> </span><span class="atn">aria-labelledby</span><span class="pun">=</span><span class="atv">"dLabel"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">    ...</span></li><li class="L7"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L8"><span class="tag">&lt;/div&gt;</span></li></ol></pre>

          <h3>Via JavaScript</h3>
          <p>Call the dropdowns via JavaScript:</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'.dropdown-toggle'</span><span class="pun">).</span><span class="pln">dropdown</span><span class="pun">()</span></li></ol></pre>

          <h3>Options</h3>
          <p><em>None</em></p>

          <h3>Methods</h3>
          <h4>$().dropdown('toggle')</h4>
          <p>A programmatic api for toggling menus for a given navbar or tabbed navigation.</p>
        </section>


<section id="scrollspy">
          <div class="page-header">
            <h1>ScrollSpy <small>bootstrap-scrollspy.js</small></h1>
          </div>


          <h2>Example in navbar</h2>
          <p>The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.</p>
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


          <h2>Usage</h2>

          <h3>Via data attributes</h3>
          <p>To easily add scrollspy behavior to your topbar navigation, just add <code>data-spy="scroll"</code> to the element you want to spy on (most typically this would be the body) and <code>data-target=".navbar"</code> to select which nav to use. You'll want to use scrollspy with a <code>.nav</code> component.</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;body</span><span class="pln"> </span><span class="atn">data-spy</span><span class="pun">=</span><span class="atv">"scroll"</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">".navbar"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/body&gt;</span></li></ol></pre>

          <h3>Via JavaScript</h3>
          <p>Call the scrollspy via JavaScript:</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#navbar'</span><span class="pun">).</span><span class="pln">scrollspy</span><span class="pun">()</span></li></ol></pre>

          <div class="alert alert-info">
            <strong>Heads up!</strong>
            Navbar links must have resolvable id targets. For example, a <code>&lt;a href="#home"&gt;home&lt;/a&gt;</code> must correspond to something in the dom like <code>&lt;div id="home"&gt;&lt;/div&gt;</code>.
          </div>

          <h3>Methods</h3>
          <h4>.scrollspy('refresh')</h4>
          <p>When using scrollspy in conjunction with adding or removing of elements from the DOM, you'll need to call the refresh method like so:</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'[data-spy="scroll"]'</span><span class="pun">).</span><span class="pln">each</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L1"><span class="pln">  </span><span class="kwd">var</span><span class="pln"> $spy </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">).</span><span class="pln">scrollspy</span><span class="pun">(</span><span class="str">'refresh'</span><span class="pun">)</span></li><li class="L2"><span class="pun">});</span></li></ol></pre>

          <h3>Options</h3>
          <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-offset=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>offset</td>
               <td>number</td>
               <td>10</td>
               <td>Pixels to offset from top when calculating position of scroll.</td>
             </tr>
            </tbody>
          </table>

          <h3>Events</h3>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 150px;">Event</th>
               <th>Description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>activate</td>
               <td>This event fires whenever a new item becomes activated by the scrollspy.</td>
            </tr>
            </tbody>
          </table>
        </section>



<section id="tooltips">
          <div class="page-header">
            <h1>Tooltips <small>bootstrap-tooltip.js</small></h1>
          </div>


          <h2>Examples</h2>
          <p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.</p>
          <p>For performance reasons, the tooltip and popover data-apis are opt in, meaning <strong>you must initialize them yourself</strong>.</p>
          <p>Hover over the links below to see tooltips:</p>
          <div class="bs-docs-example tooltip-demo">
            <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a data-original-title="Another tooltip" href="#" data-toggle="tooltip" title="">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip" title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
            </p>
          </div>

          <h3>Four directions</h3>
          <div class="bs-docs-example tooltip-demo">
            <ul class="bs-docs-tooltip-examples">
              <li><a data-original-title="Tooltip on top" href="#" data-toggle="tooltip" data-placement="top" title="">Tooltip on top</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
            </ul>
          </div>


          <h3>Tooltips in input groups</h3>
          <p>When using tooltips and popovers with the Bootstrap input groups, you'll have to set the <code>container</code> (documented below) option to avoid unwanted side effects.</p>

          <hr class="bs-docs-separator">


          <h2>Usage</h2>
          <p>Trigger the tooltip via JavaScript:</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#example'</span><span class="pun">).</span><span class="pln">tooltip</span><span class="pun">(</span><span class="pln">options</span><span class="pun">)</span></li></ol></pre>

          <h3>Options</h3>
          <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
          <table class="table table-bordered table-striped">
            <thead>
             <tr>
               <th style="width: 100px;">Name</th>
               <th style="width: 100px;">type</th>
               <th style="width: 50px;">default</th>
               <th>description</th>
             </tr>
            </thead>
            <tbody>
             <tr>
               <td>animation</td>
               <td>boolean</td>
               <td>true</td>
               <td>apply a css fade transition to the tooltip</td>
             </tr>
             <tr>
               <td>html</td>
               <td>boolean</td>
               <td>false</td>
               <td>Insert html into the tooltip. If false, jquery's <code>text</code> method will be used to insert content into the dom. Use text if you're worried about XSS attacks.</td>
             </tr>
             <tr>
               <td>placement</td>
               <td>string | function</td>
               <td>'top'</td>
               <td>how to position the tooltip - top | bottom | left | right</td>
             </tr>
             <tr>
               <td>selector</td>
               <td>string</td>
               <td>false</td>
               <td>If a selector is provided, tooltip objects will be delegated to the specified targets.</td>
             </tr>
             <tr>
               <td>title</td>
               <td>string | function</td>
               <td>''</td>
               <td>default title value if `title` tag isn't present</td>
             </tr>
             <tr>
               <td>trigger</td>
               <td>string</td>
               <td>'hover focus'</td>
               <td>how tooltip is triggered - click | hover | focus | manual. Note you case pass trigger mutliple, space seperated, trigger types.</td>
             </tr>
             <tr>
               <td>delay</td>
               <td>number | object</td>
               <td>0</td>
               <td>
                <p>delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>
                <p>If a number is supplied, delay is applied to both hide/show</p>
                <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
               </td>
             </tr>
             <tr>
               <td>container</td>
               <td>string | false</td>
               <td>false</td>
               <td>
                <p>Appends the tooltip to a specific element <code>container: 'body'</code></p>
               </td>
             </tr>
            </tbody>
          </table>
          <div class="alert alert-info">
            <strong>Heads up!</strong>
            Options for individual tooltips can alternatively be specified through the use of data attributes.
          </div>

          <h3>Markup</h3>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"tooltip"</span><span class="pln"> </span><span class="atn">title</span><span class="pun">=</span><span class="atv">"first tooltip"</span><span class="tag">&gt;</span><span class="pln">hover over me</span><span class="tag">&lt;/a&gt;</span></li></ol></pre>

          <h3>Methods</h3>
          <h4>$().tooltip(options)</h4>
          <p>Attaches a tooltip handler to an element collection.</p>
          <h4>.tooltip('show')</h4>
          <p>Reveals an element's tooltip.</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">tooltip</span><span class="pun">(</span><span class="str">'show'</span><span class="pun">)</span></li></ol></pre>
          <h4>.tooltip('hide')</h4>
          <p>Hides an element's tooltip.</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">tooltip</span><span class="pun">(</span><span class="str">'hide'</span><span class="pun">)</span></li></ol></pre>
          <h4>.tooltip('toggle')</h4>
          <p>Toggles an element's tooltip.</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">tooltip</span><span class="pun">(</span><span class="str">'toggle'</span><span class="pun">)</span></li></ol></pre>
          <h4>.tooltip('destroy')</h4>
          <p>Hides and destroys an element's tooltip.</p>
          <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">tooltip</span><span class="pun">(</span><span class="str">'destroy'</span><span class="pun">)</span></li></ol></pre>
        </section>




<section id="popovers">
        <div class="page-header">
          <h1>Popovers <small>bootstrap-popover.js</small></h1>
        </div>

        <h2>Examples</h2>
        <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information. Hover over the button to trigger the popover. <strong>Requires <a href="#tooltips">Tooltip</a> to be included.</strong></p>

        <h3>Static popover</h3>
        <p>Four options are available: top, right, bottom, and left aligned.</p>
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
        <p>No markup shown as popovers are generated from JavaScript and content within a <code>data</code> attribute.</p>

        <h3>Live demo</h3>
        <div class="bs-docs-example" style="padding-bottom: 24px;">
          <a data-original-title="A Title" href="#" class="btn btn-large btn-danger" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?">Click to toggle popover</a>
        </div>

        <h4>Four directions</h4>
        <div class="bs-docs-example tooltip-demo">
          <ul class="bs-docs-tooltip-examples">
            <li><a data-original-title="Popover on top" href="#" class="btn" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover on top</a></li>
            <li><a data-original-title="Popover on right" href="#" class="btn" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover on right</a></li>
            <li><a data-original-title="Popover on bottom" href="#" class="btn" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover on bottom</a></li>
            <li><a data-original-title="Popover on left" href="#" class="btn" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="">Popover on left</a></li>
          </ul>
        </div>


        <hr class="bs-docs-separator">


        <h2>Usage</h2>
        <p>Enable popovers via JavaScript:</p>
        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#example'</span><span class="pun">).</span><span class="pln">popover</span><span class="pun">(</span><span class="pln">options</span><span class="pun">)</span></li></ol></pre>

        <h3>Options</h3>
        <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
        <table class="table table-bordered table-striped">
          <thead>
           <tr>
             <th style="width: 100px;">Name</th>
             <th style="width: 100px;">type</th>
             <th style="width: 50px;">default</th>
             <th>description</th>
           </tr>
          </thead>
          <tbody>
           <tr>
             <td>animation</td>
             <td>boolean</td>
             <td>true</td>
             <td>apply a css fade transition to the tooltip</td>
           </tr>
           <tr>
             <td>html</td>
             <td>boolean</td>
             <td>false</td>
             <td>Insert html into the popover. If false, jquery's <code>text</code> method will be used to insert content into the dom. Use text if you're worried about XSS attacks.</td>
           </tr>
           <tr>
             <td>placement</td>
             <td>string | function</td>
             <td>'right'</td>
             <td>how to position the popover - top | bottom | left | right</td>
           </tr>
           <tr>
             <td>selector</td>
             <td>string</td>
             <td>false</td>
             <td>if a selector is provided, tooltip objects will be delegated to the specified targets</td>
           </tr>
           <tr>
             <td>trigger</td>
             <td>string</td>
             <td>'click'</td>
             <td>how popover is triggered - click | hover | focus | manual</td>
           </tr>
           <tr>
             <td>title</td>
             <td>string | function</td>
             <td>''</td>
             <td>default title value if `title` attribute isn't present</td>
           </tr>
           <tr>
             <td>content</td>
             <td>string | function</td>
             <td>''</td>
             <td>default content value if `data-content` attribute isn't present</td>
           </tr>
           <tr>
             <td>delay</td>
             <td>number | object</td>
             <td>0</td>
             <td>
              <p>delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
              <p>If a number is supplied, delay is applied to both hide/show</p>
              <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
             </td>
           </tr>
           <tr>
             <td>container</td>
             <td>string | false</td>
             <td>false</td>
             <td>
              <p>Appends the popover to a specific element <code>container: 'body'</code></p>
             </td>
           </tr>
          </tbody>
        </table>
        <div class="alert alert-info">
          <strong>Heads up!</strong>
          Options for individual popovers can alternatively be specified through the use of data attributes.
        </div>

        <h3>Markup</h3>
        <p>For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.</p>

        <h3>Methods</h3>
        <h4>$().popover(options)</h4>
        <p>Initializes popovers for an element collection.</p>
        <h4>.popover('show')</h4>
        <p>Reveals an elements popover.</p>
        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">popover</span><span class="pun">(</span><span class="str">'show'</span><span class="pun">)</span></li></ol></pre>
        <h4>.popover('hide')</h4>
        <p>Hides an elements popover.</p>
        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">popover</span><span class="pun">(</span><span class="str">'hide'</span><span class="pun">)</span></li></ol></pre>
        <h4>.popover('toggle')</h4>
        <p>Toggles an elements popover.</p>
        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">popover</span><span class="pun">(</span><span class="str">'toggle'</span><span class="pun">)</span></li></ol></pre>
        <h4>.popover('destroy')</h4>
        <p>Hides and destroys an element's popover.</p>
        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#element'</span><span class="pun">).</span><span class="pln">popover</span><span class="pun">(</span><span class="str">'destroy'</span><span class="pun">)</span></li></ol></pre>
      </section>

<section id="collapse">
            <div class="page-header">
              <h1>Collapse <small>bootstrap-collapse.js</small></h1>
            </div>

            <h3>About</h3>
            <p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
            <p class="muted"><strong>*</strong> Requires the Transitions plugin to be included.</p>

            <h2>Example accordion</h2>
            <p>Using the collapse plugin, we built a simple accordion style widget:</p>

            <div class="bs-docs-example">
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Collapsible Group Item #3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"accordion2"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-group"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-heading"</span><span class="tag">&gt;</span></li><li class="L3"><span class="pln">      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"collapse"</span><span class="pln"> </span><span class="atn">data-parent</span><span class="pun">=</span><span class="atv">"#accordion2"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#collapseOne"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">        Collapsible Group Item #1</span></li><li class="L5"><span class="pln">      </span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"collapseOne"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-body collapse in"</span><span class="tag">&gt;</span></li><li class="L8"><span class="pln">      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-inner"</span><span class="tag">&gt;</span></li><li class="L9"><span class="pln">        Anim pariatur cliche...</span></li><li class="L0"><span class="pln">      </span><span class="tag">&lt;/div&gt;</span></li><li class="L1"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-group"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-heading"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"collapse"</span><span class="pln"> </span><span class="atn">data-parent</span><span class="pun">=</span><span class="atv">"#accordion2"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#collapseTwo"</span><span class="tag">&gt;</span></li><li class="L6"><span class="pln">        Collapsible Group Item #2</span></li><li class="L7"><span class="pln">      </span><span class="tag">&lt;/a&gt;</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L9"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"collapseTwo"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-body collapse"</span><span class="tag">&gt;</span></li><li class="L0"><span class="pln">      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"accordion-inner"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">        Anim pariatur cliche...</span></li><li class="L2"><span class="pln">      </span><span class="tag">&lt;/div&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L5"><span class="tag">&lt;/div&gt;</span></li><li class="L6"><span class="pln">...</span></li></ol></pre>
            <p>You can also use the plugin without the accordion markup. Make a button toggle the expanding and collapsing of another element.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-danger"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"collapse"</span><span class="pln"> </span><span class="atn">data-target</span><span class="pun">=</span><span class="atv">"#demo"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  simple collapsible</span></li><li class="L2"><span class="tag">&lt;/button&gt;</span></li><li class="L3"><span class="pln">&nbsp;</span></li><li class="L4"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"demo"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"collapse in"</span><span class="tag">&gt;</span><span class="pln"> … </span><span class="tag">&lt;/div&gt;</span></li></ol></pre>


            <hr class="bs-docs-separator">


            <h2>Usage</h2>

            <h3>Via data attributes</h3>
            <p>Just add <code>data-toggle="collapse"</code> and a <code>data-target</code> to element to automatically assign control of a collapsible element. The <code>data-target</code> attribute accepts a css selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you'd like it to default open, add the additional class <code>in</code>.</p>
            <p>To add accordion-like group management to a collapsible control, add the data attribute <code>data-parent="#selector"</code>. Refer to the demo to see this in action.</p>

            <h3>Via JavaScript</h3>
            <p>Enable manually with:</p>
            <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">".collapse"</span><span class="pun">).</span><span class="pln">collapse</span><span class="pun">()</span></li></ol></pre>

            <h3>Options</h3>
            <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-parent=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;">Name</th>
                 <th style="width: 50px;">type</th>
                 <th style="width: 50px;">default</th>
                 <th>description</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>parent</td>
                 <td>selector</td>
                 <td>false</td>
                 <td>If selector then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior)</td>
               </tr>
               <tr>
                 <td>toggle</td>
                 <td>boolean</td>
                 <td>true</td>
                 <td>Toggles the collapsible element on invocation</td>
               </tr>
              </tbody>
            </table>


            <h3>Methods</h3>
            <h4>.collapse(options)</h4>
            <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.
</p><pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#myCollapsible'</span><span class="pun">).</span><span class="pln">collapse</span><span class="pun">({</span></li><li class="L1"><span class="pln">  toggle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">false</span></li><li class="L2"><span class="pun">})</span></li></ol></pre>
            <h4>.collapse('toggle')</h4>
            <p>Toggles a collapsible element to shown or hidden.</p>
            <h4>.collapse('show')</h4>
            <p>Shows a collapsible element.</p>
            <h4>.collapse('hide')</h4>
            <p>Hides a collapsible element.</p>

            <h3>Events</h3>
            <p>Bootstrap's collapse class exposes a few events for hooking into collapse functionality.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 150px;">Event</th>
                 <th>Description</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>show</td>
                 <td>This event fires immediately when the <code>show</code> instance method is called.</td>
               </tr>
               <tr>
                 <td>shown</td>
                 <td>This event is fired when a collapse element has been made visible to the user (will wait for css transitions to complete).</td>
               </tr>
               <tr>
                 <td>hide</td>
                 <td>
                  This event is fired immediately when the <code>hide</code> method has been called.
                 </td>
               </tr>
               <tr>
                 <td>hidden</td>
                 <td>This event is fired when a collapse element has been hidden from the user (will wait for css transitions to complete).</td>
               </tr>
              </tbody>
            </table>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'#myCollapsible'</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">'hidden'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L1"><span class="pln">  </span><span class="com">// do something…</span></li><li class="L2"><span class="pun">})</span></li></ol></pre>
          </section>



<section id="carousel">
            <div class="page-header">
              <h1>Carousel <small>bootstrap-carousel.js</small></h1>
            </div>

            <h2>Example carousel</h2>
            <p>The slideshow below shows a generic plugin and component for cycling through elements like a carousel.</p>
            <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li class="active" data-target="#myCarousel" data-slide-to="1"></li>
                  <li class="" data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img src="assets/img/bootstrap-mdo-sfmoma-01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item active">
                    <img src="assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
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

            <div class="alert alert-warning">
              <strong>Heads up!</strong>
              When implementing this carousel, remove the images we have provided and replace them with your own.
            </div>


            <hr class="bs-docs-separator">


            <h2>Usage</h2>

            <h3>Via data attributes</h3>
            <p>Use data attributes to easily control the position of the carousel. <code>data-slide</code> accepts the keywords <code>prev</code> or <code>next</code>, which alters the slide position relative to it's current position. Alternatively, use <code>data-slide-to</code> to pass a raw slide index to the carousel <code>data-slide-to="2"</code>, which jump's the slide position to a particular index beginning with <code>0</code>.</p>

            <h3>Via JavaScript</h3>
            <p>Call carousel manually with:</p>
            <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'.carousel'</span><span class="pun">).</span><span class="pln">carousel</span><span class="pun">()</span></li></ol></pre>

            <h3>Options</h3>
            <p>Options can be passed via data attributes or JavaScriptz. For data attributes, append the option name to <code>data-</code>, as in <code>data-interval=""</code>.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 100px;">Name</th>
                 <th style="width: 50px;">type</th>
                 <th style="width: 50px;">default</th>
                 <th>description</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>interval</td>
                 <td>number</td>
                 <td>5000</td>
                 <td>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</td>
               </tr>
               <tr>
                 <td>pause</td>
                 <td>string</td>
                 <td>"hover"</td>
                 <td>Pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave.</td>
               </tr>
              </tbody>
            </table>

            <h3>Methods</h3>
            <h4>.carousel(options)</h4>
            <p>Initializes the carousel with an optional options <code>object</code> and starts cycling through items.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">'.carousel'</span><span class="pun">).</span><span class="pln">carousel</span><span class="pun">({</span></li><li class="L1"><span class="pln">  interval</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2000</span></li><li class="L2"><span class="pun">})</span></li></ol></pre>
            <h4>.carousel('cycle')</h4>
            <p>Cycles through the carousel items from left to right.</p>
            <h4>.carousel('pause')</h4>
            <p>Stops the carousel from cycling through items.</p>
            <h4>.carousel(number)</h4>
            <p>Cycles the carousel to a particular frame (0 based, similar to an array).</p>
            <h4>.carousel('prev')</h4>
            <p>Cycles to the previous item.</p>
            <h4>.carousel('next')</h4>
            <p>Cycles to the next item.</p>

            <h3>Events</h3>
            <p>Bootstrap's carousel class exposes two events for hooking into carousel functionality.</p>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                 <th style="width: 150px;">Event</th>
                 <th>Description</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                 <td>slide</td>
                 <td>This event fires immediately when the <code>slide</code> instance method is invoked.</td>
               </tr>
               <tr>
                 <td>slid</td>
                 <td>This event is fired when the carousel has completed its slide transition.</td>
               </tr>
              </tbody>
            </table>
          </section>




    </div>
  </div>
</div>
</dvi>