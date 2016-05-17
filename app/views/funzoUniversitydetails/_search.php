<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $model FunzoUniversitydetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'UNIID'); ?>
		<?php echo $form->textField($model,'UNIID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UNIVERSITY_CODE'); ?>
		<?php echo $form->textField($model,'UNIVERSITY_CODE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEPARTMENT'); ?>
		<?php echo $form->textField($model,'DEPARTMENT',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FACULTY'); ?>
		<?php echo $form->textField($model,'FACULTY',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AREA_OF_STUDY'); ?>
		<?php echo $form->textField($model,'AREA_OF_STUDY',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REG_NO'); ?>
		<?php echo $form->textField($model,'REG_NO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURR_YEAR_OF_STUDY'); ?>
		<?php echo $form->textField($model,'CURR_YEAR_OF_STUDY',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEGREE_QUALIFICATION'); ?>
		<?php echo $form->textField($model,'DEGREE_QUALIFICATION',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LEVEL_OF_STUDY'); ?>
		<?php echo $form->textField($model,'LEVEL_OF_STUDY',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COURSE_AREA'); ?>
		<?php echo $form->textField($model,'COURSE_AREA',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APP_IDNOFK'); ?>
		<?php echo $form->textField($model,'APP_IDNOFK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YEAR_OF_ADM'); ?>
		<?php echo $form->textField($model,'YEAR_OF_ADM',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_POSTED'); ?>
		<?php echo $form->textField($model,'DATE_POSTED',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAMPUS_NAME'); ?>
		<?php echo $form->textField($model,'CAMPUS_NAME',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LENGTH_OF_STUDY'); ?>
		<?php echo $form->textField($model,'LENGTH_OF_STUDY',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATEGORY'); ?>
		<?php echo $form->textField($model,'CATEGORY',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CADRE'); ?>
		<?php echo $form->textField($model,'CADRE',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->