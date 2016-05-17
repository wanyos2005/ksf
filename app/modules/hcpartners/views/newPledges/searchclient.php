<?php
if (!is_object($model)): 
$model = new NewPledges;
 endif; 
 
$model->filterProperties = $val ;
$form=$this->beginWidget('CActiveForm', array(
'id'=>'filterProperties',
        'action'=>Yii::app()->createUrl($this->route),
        'enableAjaxValidation'=>true,
        'method'=>'get',

)); ?>


<div class="clearfix form-actions">
        <div class="col-lg-offset-2 col-lg-9">
        <div class="input-group margin-bottom-sm">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
     
         <?php echo $form->textField($model,'filterProperties',array('size'=>40,'maxlength'=>70,'placeholder'=>'Enter Code or Phone no' )); ?>

                <button class="btn btn-success" type="submit"><i class="icon-ok bigger-110"></i> <?php echo Lang::t('Search' ) ?></button>
                &nbsp; &nbsp; &nbsp;
                <a class="btn" href="<?php echo $this->createUrl('index') ?>"><i class="icon-remove bigger-110"></i><?php echo Lang::t('Cancel') ?></a>
               
       </div>  <?php echo $form->error($model,'filterProperties'); ?></div>
</div>


<?php $this->endWidget(); ?>


<!-- search-form -->
<?
//0718762063
//var_dump($model);die();


if ($val) {
	

 $this->renderPartial('create_display_record',array('model'=>$model,'val'=>$val));
 }
?>

</div>