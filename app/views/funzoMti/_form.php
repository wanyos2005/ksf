<?php
/* @var $this FunzoMtiController */
/* @var $model FunzoMti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funzo-mti-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDNO'); ?>
		<?php echo $form->textField($model,'IDNO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'IDNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CATEGORY'); ?>
		<?php echo $form->textField($model,'CATEGORY'); ?>
		<?php echo $form->error($model,'CATEGORY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LEVEL_OF_STUDY'); ?>
		<?php echo $form->textField($model,'LEVEL_OF_STUDY'); ?>
		<?php echo $form->error($model,'LEVEL_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YEAR_OF_STUDY'); ?>
		<?php echo $form->textField($model,'YEAR_OF_STUDY'); ?>
		<?php echo $form->error($model,'YEAR_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COST_OF_PROGRAM'); ?>
		<?php echo $form->textField($model,'COST_OF_PROGRAM'); ?>
		<?php echo $form->error($model,'COST_OF_PROGRAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CADRE'); ?>
		<?php echo $form->textField($model,'CADRE'); ?>
		<?php echo $form->error($model,'CADRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APPLICANT_DETAILS'); ?>
		<?php echo $form->textField($model,'APPLICANT_DETAILS'); ?>
		<?php echo $form->error($model,'APPLICANT_DETAILS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GENDER'); ?>
		<?php echo $form->textField($model,'GENDER'); ?>
		<?php echo $form->error($model,'GENDER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COUNTY'); ?>
		<?php echo $form->textField($model,'COUNTY'); ?>
		<?php echo $form->error($model,'COUNTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FATHER'); ?>
		<?php echo $form->textField($model,'FATHER'); ?>
		<?php echo $form->error($model,'FATHER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MOTHER'); ?>
		<?php echo $form->textField($model,'MOTHER'); ?>
		<?php echo $form->error($model,'MOTHER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GUARDIAN'); ?>
		<?php echo $form->textField($model,'GUARDIAN'); ?>
		<?php echo $form->error($model,'GUARDIAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACADEMIC_PROGRESS'); ?>
		<?php echo $form->textField($model,'ACADEMIC_PROGRESS'); ?>
		<?php echo $form->error($model,'ACADEMIC_PROGRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORGANIZATION_SKILLS'); ?>
		<?php echo $form->textField($model,'ORGANIZATION_SKILLS'); ?>
		<?php echo $form->error($model,'ORGANIZATION_SKILLS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INTERPERSONAL_SKILLS'); ?>
		<?php echo $form->textField($model,'INTERPERSONAL_SKILLS'); ?>
		<?php echo $form->error($model,'INTERPERSONAL_SKILLS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOTAL'); ?>
		<?php echo $form->textField($model,'TOTAL'); ?>
		<?php echo $form->error($model,'TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_POSTED'); ?>
		<?php echo $form->textField($model,'DATE_POSTED',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'DATE_POSTED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AMOUNT_AWARDED'); ?>
		<?php echo $form->textField($model,'AMOUNT_AWARDED'); ?>
		<?php echo $form->error($model,'AMOUNT_AWARDED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AMOUNT_AWARDED_CUM'); ?>
		<?php echo $form->textField($model,'AMOUNT_AWARDED_CUM'); ?>
		<?php echo $form->error($model,'AMOUNT_AWARDED_CUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAID'); ?>
		<?php echo $form->textField($model,'PAID'); ?>
		<?php echo $form->error($model,'PAID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_PAID'); ?>
		<?php echo $form->textField($model,'DATE_PAID'); ?>
		<?php echo $form->error($model,'DATE_PAID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_PAID'); ?>
		<?php echo $form->textField($model,'USER_PAID'); ?>
		<?php echo $form->error($model,'USER_PAID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONFIRMED'); ?>
		<?php echo $form->textField($model,'CONFIRMED'); ?>
		<?php echo $form->error($model,'CONFIRMED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_CONFIRMED'); ?>
		<?php echo $form->textField($model,'DATE_CONFIRMED'); ?>
		<?php echo $form->error($model,'DATE_CONFIRMED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_CONFIRMED'); ?>
		<?php echo $form->textField($model,'USER_CONFIRMED'); ?>
		<?php echo $form->error($model,'USER_CONFIRMED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->