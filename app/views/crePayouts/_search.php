<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FSERIAL'); ?>
		<?php echo $form->textField($model,'FSERIAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDFNAME'); ?>
		<?php echo $form->textField($model,'IDFNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDLNAME'); ?>
		<?php echo $form->textField($model,'IDLNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDMNAME'); ?>
		<?php echo $form->textField($model,'IDMNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDNO'); ?>
		<?php echo $form->textField($model,'IDNO',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADMI_NO'); ?>
		<?php echo $form->textField($model,'ADMI_NO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UNCODE'); ?>
		<?php echo $form->textField($model,'UNCODE',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAMPUS_CODE'); ?>
		<?php echo $form->textField($model,'CAMPUS_CODE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AWARD'); ?>
		<?php echo $form->textField($model,'AWARD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRINTDATE'); ?>
		<?php echo $form->textField($model,'PRINTDATE',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAYMENT_SUBSET'); ?>
		<?php echo $form->textField($model,'PAYMENT_SUBSET',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACADEMIC_YEAR'); ?>
		<?php echo $form->textField($model,'ACADEMIC_YEAR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REF'); ?>
		<?php echo $form->textField($model,'REF'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE'); ?>
		<?php echo $form->textField($model,'DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pri'); ?>
		<?php echo $form->textField($model,'id_pri'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->