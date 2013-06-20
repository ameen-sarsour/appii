<?php
$this->pageTitle = Yii::app()->name . ' - ولوج';
$this->breadcrumbs = array('ولوج');
?>

<div class="form view" style=' height: 250px; position: relative; '>
  <h2 class='' >ولوج - للتمكن من إضافة مدخلات و التعليق وتسجيل الإعجاب و استلام الرسالة الإخبارية.</h2>
<p class='uthman fontxlarge'>
لا يتطلب موقعنا ملء نموذج للتسجيل، يمكنك الولوج مباشرة بواسطة إحدى الشبكات الاجتماعية التالية :</p>


<p>
يُرجى اختيار الشبكة التي تُفَضّلها و من ثم اعطاء الصلاحية للولوج.
</p>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableAjaxValidation'=>true,
)); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <div class="row">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email'); ?>
                <?php echo $form->error($model,'email'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password'); ?>
                <?php echo $form->error($model,'password'); ?>
                <p class="hint">
                        Hint: You may login with <tt>demo/demo</tt>.
                </p>
        </div>

        <div class="row rememberMe">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
        </div>

        <div class="row submit">
                <?php echo CHtml::submitButton('Login'); ?>
        </div>

<?php $this->endWidget(); ?>
</div><!-- form -->


<div class=row >
  <div class= >
    <form name="frmFacebookLogin" action="/site/Login">
      <input type="hidden" value="facebook" name="id" />
      <input type="image" style="max-width: 200px; float: right;padding: 15px;" type="submit" src="/images/btn_facebook_button.png"></input>
    </form>
  </span>
  <div class=offset1 >
    <form name="frmTwitterLogin" action="/site/Login">
      <input type="hidden" value="twitter" name="id" />
      <input type="image" style="max-width: 200px; float: right;padding: 15px;" type="submit" src="/images/btn_twitter_button.png"></input>
    </form>
  </div>
  <div class=offset2 >
    <form name="frmTwitterLogin" action="/site/Login">
      <input type="hidden" value="google" name="id" />
      <input type="image" style="max-width: 200px; float: right;padding: 15px;" type="submit" src="/images/btn_google_button.png"></input>
    </form>
  </div>
</div>
<br/>
</div>

