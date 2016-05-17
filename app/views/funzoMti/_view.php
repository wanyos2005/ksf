<?php
/* @var $this FunzoMtiController */
/* @var $data FunzoMti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDNO')); ?>:</b>
	<?php echo CHtml::encode($data->IDNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATEGORY')); ?>:</b>
	<?php echo CHtml::encode($data->CATEGORY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEVEL_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->LEVEL_OF_STUDY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YEAR_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->YEAR_OF_STUDY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COST_OF_PROGRAM')); ?>:</b>
	<?php echo CHtml::encode($data->COST_OF_PROGRAM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CADRE')); ?>:</b>
	<?php echo CHtml::encode($data->CADRE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('APPLICANT_DETAILS')); ?>:</b>
	<?php echo CHtml::encode($data->APPLICANT_DETAILS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GENDER')); ?>:</b>
	<?php echo CHtml::encode($data->GENDER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTY')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FATHER')); ?>:</b>
	<?php echo CHtml::encode($data->FATHER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOTHER')); ?>:</b>
	<?php echo CHtml::encode($data->MOTHER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GUARDIAN')); ?>:</b>
	<?php echo CHtml::encode($data->GUARDIAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACADEMIC_PROGRESS')); ?>:</b>
	<?php echo CHtml::encode($data->ACADEMIC_PROGRESS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORGANIZATION_SKILLS')); ?>:</b>
	<?php echo CHtml::encode($data->ORGANIZATION_SKILLS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INTERPERSONAL_SKILLS')); ?>:</b>
	<?php echo CHtml::encode($data->INTERPERSONAL_SKILLS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOTAL')); ?>:</b>
	<?php echo CHtml::encode($data->TOTAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_POSTED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_POSTED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AMOUNT_AWARDED')); ?>:</b>
	<?php echo CHtml::encode($data->AMOUNT_AWARDED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AMOUNT_AWARDED_CUM')); ?>:</b>
	<?php echo CHtml::encode($data->AMOUNT_AWARDED_CUM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAID')); ?>:</b>
	<?php echo CHtml::encode($data->PAID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_PAID')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_PAID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_PAID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_PAID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONFIRMED')); ?>:</b>
	<?php echo CHtml::encode($data->CONFIRMED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_CONFIRMED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_CONFIRMED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_CONFIRMED')); ?>:</b>
	<?php echo CHtml::encode($data->USER_CONFIRMED); ?>
	<br />

	*/ ?>

</div>