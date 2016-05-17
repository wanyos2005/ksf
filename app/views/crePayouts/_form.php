<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cre-payouts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FSERIAL'); ?>
		<?php echo $form->textField($model,'FSERIAL'); ?>
		<?php echo $form->error($model,'FSERIAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDFNAME'); ?>
		<?php echo $form->textField($model,'IDFNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDFNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDLNAME'); ?>
		<?php echo $form->textField($model,'IDLNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDLNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDMNAME'); ?>
		<?php echo $form->textField($model,'IDMNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDMNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDNO'); ?>
		<?php echo $form->textField($model,'IDNO',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'IDNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADMI_NO'); ?>
		<?php echo $form->textField($model,'ADMI_NO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ADMI_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UNCODE'); ?>
		<?php echo $form->textField($model,'UNCODE',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'UNCODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAMPUS_CODE'); ?>
		<?php echo $form->textField($model,'CAMPUS_CODE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'CAMPUS_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AWARD'); ?>
		<?php echo $form->textField($model,'AWARD'); ?>
		<?php echo $form->error($model,'AWARD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRINTDATE'); ?>
		<?php echo $form->textField($model,'PRINTDATE',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'PRINTDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAYMENT_SUBSET'); ?>
		<?php echo $form->textField($model,'PAYMENT_SUBSET',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PAYMENT_SUBSET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACADEMIC_YEAR'); ?>
		<?php echo $form->textField($model,'ACADEMIC_YEAR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ACADEMIC_YEAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REF'); ?>
		<?php echo $form->textField($model,'REF'); ?>
		<?php echo $form->error($model,'REF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE'); ?>
		<?php echo $form->textField($model,'DATE'); ?>
		<?php echo $form->error($model,'DATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->