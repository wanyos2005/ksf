<?php
/* @var $this TblPastapplicantsController */
/* @var $data TblPastapplicants */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDNO')); ?>:</b>
	<?php echo CHtml::encode($data->IDNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PINNO')); ?>:</b>
	<?php echo CHtml::encode($data->PINNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_ADD')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_ADD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELNO')); ?>:</b>
	<?php echo CHtml::encode($data->TELNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AMOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->AMOUNT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PRINTED')); ?>:</b>
	<?php echo CHtml::encode($data->PRINTED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POSTDATE')); ?>:</b>
	<?php echo CHtml::encode($data->POSTDATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONST_C')); ?>:</b>
	<?php echo CHtml::encode($data->CONST_C); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YEAR_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->YEAR_OF_STUDY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STUD_CATEGORY')); ?>:</b>
	<?php echo CHtml::encode($data->STUD_CATEGORY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STUD_COUNTY')); ?>:</b>
	<?php echo CHtml::encode($data->STUD_COUNTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BURSARY')); ?>:</b>
	<?php echo CHtml::encode($data->BURSARY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACADEMIC_YEAR')); ?>:</b>
	<?php echo CHtml::encode($data->ACADEMIC_YEAR); ?>
	<br />

	*/ ?>

</div>