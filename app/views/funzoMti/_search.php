<?php
/* @var $this FunzoMtiController */
/* @var $model FunzoMti */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDNO'); ?>
		<?php echo $form->textField($model,'IDNO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATEGORY'); ?>
		<?php echo $form->textField($model,'CATEGORY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LEVEL_OF_STUDY'); ?>
		<?php echo $form->textField($model,'LEVEL_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YEAR_OF_STUDY'); ?>
		<?php echo $form->textField($model,'YEAR_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COST_OF_PROGRAM'); ?>
		<?php echo $form->textField($model,'COST_OF_PROGRAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CADRE'); ?>
		<?php echo $form->textField($model,'CADRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APPLICANT_DETAILS'); ?>
		<?php echo $form->textField($model,'APPLICANT_DETAILS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GENDER'); ?>
		<?php echo $form->textField($model,'GENDER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTY'); ?>
		<?php echo $form->textField($model,'COUNTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FATHER'); ?>
		<?php echo $form->textField($model,'FATHER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MOTHER'); ?>
		<?php echo $form->textField($model,'MOTHER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GUARDIAN'); ?>
		<?php echo $form->textField($model,'GUARDIAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACADEMIC_PROGRESS'); ?>
		<?php echo $form->textField($model,'ACADEMIC_PROGRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORGANIZATION_SKILLS'); ?>
		<?php echo $form->textField($model,'ORGANIZATION_SKILLS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INTERPERSONAL_SKILLS'); ?>
		<?php echo $form->textField($model,'INTERPERSONAL_SKILLS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOTAL'); ?>
		<?php echo $form->textField($model,'TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_POSTED'); ?>
		<?php echo $form->textField($model,'DATE_POSTED',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AMOUNT_AWARDED'); ?>
		<?php echo $form->textField($model,'AMOUNT_AWARDED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AMOUNT_AWARDED_CUM'); ?>
		<?php echo $form->textField($model,'AMOUNT_AWARDED_CUM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAID'); ?>
		<?php echo $form->textField($model,'PAID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_PAID'); ?>
		<?php echo $form->textField($model,'DATE_PAID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_PAID'); ?>
		<?php echo $form->textField($model,'USER_PAID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONFIRMED'); ?>
		<?php echo $form->textField($model,'CONFIRMED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_CONFIRMED'); ?>
		<?php echo $form->textField($model,'DATE_CONFIRMED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_CONFIRMED'); ?>
		<?php echo $form->textField($model,'USER_CONFIRMED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->