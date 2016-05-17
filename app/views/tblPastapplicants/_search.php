<?php
/* @var $this TblPastapplicantsController */
/* @var $model TblPastapplicants */
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
		<?php echo $form->label($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDNO'); ?>
		<?php echo $form->textField($model,'IDNO',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PINNO'); ?>
		<?php echo $form->textField($model,'PINNO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL_ADD'); ?>
		<?php echo $form->textField($model,'EMAIL_ADD',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELNO'); ?>
		<?php echo $form->textField($model,'TELNO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AMOUNT'); ?>
		<?php echo $form->textField($model,'AMOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRINTED'); ?>
		<?php echo $form->textField($model,'PRINTED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POSTDATE'); ?>
		<?php echo $form->textField($model,'POSTDATE',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONST_C'); ?>
		<?php echo $form->textField($model,'CONST_C'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YEAR_OF_STUDY'); ?>
		<?php echo $form->textField($model,'YEAR_OF_STUDY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STUD_CATEGORY'); ?>
		<?php echo $form->textField($model,'STUD_CATEGORY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STUD_COUNTY'); ?>
		<?php echo $form->textField($model,'STUD_COUNTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BURSARY'); ?>
		<?php echo $form->textField($model,'BURSARY',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACADEMIC_YEAR'); ?>
		<?php echo $form->textField($model,'ACADEMIC_YEAR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->