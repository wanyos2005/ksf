<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $model FunzoUniversitydetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funzo-universitydetails-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'UNIID'); ?>
		<?php echo $form->textField($model,'UNIID'); ?>
		<?php echo $form->error($model,'UNIID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UNIVERSITY_CODE'); ?>
		<?php echo $form->textField($model,'UNIVERSITY_CODE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'UNIVERSITY_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEPARTMENT'); ?>
		<?php echo $form->textField($model,'DEPARTMENT',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'DEPARTMENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FACULTY'); ?>
		<?php echo $form->textField($model,'FACULTY',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'FACULTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AREA_OF_STUDY'); ?>
		<?php echo $form->textField($model,'AREA_OF_STUDY',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'AREA_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REG_NO'); ?>
		<?php echo $form->textField($model,'REG_NO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'REG_NO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CURR_YEAR_OF_STUDY'); ?>
		<?php echo $form->textField($model,'CURR_YEAR_OF_STUDY',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'CURR_YEAR_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEGREE_QUALIFICATION'); ?>
		<?php echo $form->textField($model,'DEGREE_QUALIFICATION',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'DEGREE_QUALIFICATION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LEVEL_OF_STUDY'); ?>
		<?php echo $form->textField($model,'LEVEL_OF_STUDY',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'LEVEL_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COURSE_AREA'); ?>
		<?php echo $form->textField($model,'COURSE_AREA',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'COURSE_AREA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APP_IDNOFK'); ?>
		<?php echo $form->textField($model,'APP_IDNOFK',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'APP_IDNOFK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YEAR_OF_ADM'); ?>
		<?php echo $form->textField($model,'YEAR_OF_ADM',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'YEAR_OF_ADM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_POSTED'); ?>
		<?php echo $form->textField($model,'DATE_POSTED',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'DATE_POSTED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAMPUS_NAME'); ?>
		<?php echo $form->textField($model,'CAMPUS_NAME',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'CAMPUS_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LENGTH_OF_STUDY'); ?>
		<?php echo $form->textField($model,'LENGTH_OF_STUDY',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'LENGTH_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CATEGORY'); ?>
		<?php echo $form->textField($model,'CATEGORY',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'CATEGORY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CADRE'); ?>
		<?php echo $form->textField($model,'CADRE',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'CADRE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->