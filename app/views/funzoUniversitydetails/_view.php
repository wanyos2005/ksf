<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $data FunzoUniversitydetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('UNIID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->UNIID), array('view', 'id'=>$data->UNIID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UNIVERSITY_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->UNIVERSITY_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEPARTMENT')); ?>:</b>
	<?php echo CHtml::encode($data->DEPARTMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FACULTY')); ?>:</b>
	<?php echo CHtml::encode($data->FACULTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AREA_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->AREA_OF_STUDY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_NO')); ?>:</b>
	<?php echo CHtml::encode($data->REG_NO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURR_YEAR_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->CURR_YEAR_OF_STUDY); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DEGREE_QUALIFICATION')); ?>:</b>
	<?php echo CHtml::encode($data->DEGREE_QUALIFICATION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEVEL_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->LEVEL_OF_STUDY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COURSE_AREA')); ?>:</b>
	<?php echo CHtml::encode($data->COURSE_AREA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APP_IDNOFK')); ?>:</b>
	<?php echo CHtml::encode($data->APP_IDNOFK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YEAR_OF_ADM')); ?>:</b>
	<?php echo CHtml::encode($data->YEAR_OF_ADM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_POSTED')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_POSTED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAMPUS_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->CAMPUS_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LENGTH_OF_STUDY')); ?>:</b>
	<?php echo CHtml::encode($data->LENGTH_OF_STUDY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATEGORY')); ?>:</b>
	<?php echo CHtml::encode($data->CATEGORY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CADRE')); ?>:</b>
	<?php echo CHtml::encode($data->CADRE); ?>
	<br />

	*/ ?>

</div>