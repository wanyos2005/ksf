<?php
/* @var $this TblPastapplicantsController */
/* @var $model TblPastapplicants */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-pastapplicants-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDNO'); ?>
		<?php echo $form->textField($model,'IDNO',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'IDNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PINNO'); ?>
		<?php echo $form->textField($model,'PINNO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PINNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL_ADD'); ?>
		<?php echo $form->textField($model,'EMAIL_ADD',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'EMAIL_ADD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELNO'); ?>
		<?php echo $form->textField($model,'TELNO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TELNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AMOUNT'); ?>
		<?php echo $form->textField($model,'AMOUNT'); ?>
		<?php echo $form->error($model,'AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRINTED'); ?>
		<?php echo $form->textField($model,'PRINTED'); ?>
		<?php echo $form->error($model,'PRINTED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POSTDATE'); ?>
		<?php echo $form->textField($model,'POSTDATE',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'POSTDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONST_C'); ?>
		<?php echo $form->textField($model,'CONST_C'); ?>
		<?php echo $form->error($model,'CONST_C'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YEAR_OF_STUDY'); ?>
		<?php echo $form->textField($model,'YEAR_OF_STUDY'); ?>
		<?php echo $form->error($model,'YEAR_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STUD_CATEGORY'); ?>
		<?php echo $form->textField($model,'STUD_CATEGORY'); ?>
		<?php echo $form->error($model,'STUD_CATEGORY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STUD_COUNTY'); ?>
		<?php echo $form->textField($model,'STUD_COUNTY'); ?>
		<?php echo $form->error($model,'STUD_COUNTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BURSARY'); ?>
		<?php echo $form->textField($model,'BURSARY',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'BURSARY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACADEMIC_YEAR'); ?>
		<?php echo $form->textField($model,'ACADEMIC_YEAR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ACADEMIC_YEAR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->