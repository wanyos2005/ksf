<?php
/* @var $this CrePayoutsController */
/* @var $data CrePayouts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pri')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pri), array('view', 'id'=>$data->id_pri)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FSERIAL')); ?>:</b>
	<?php echo CHtml::encode($data->FSERIAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDFNAME')); ?>:</b>
	<?php echo CHtml::encode($data->IDFNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDLNAME')); ?>:</b>
	<?php echo CHtml::encode($data->IDLNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMNAME')); ?>:</b>
	<?php echo CHtml::encode($data->IDMNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDNO')); ?>:</b>
	<?php echo CHtml::encode($data->IDNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADMI_NO')); ?>:</b>
	<?php echo CHtml::encode($data->ADMI_NO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UNCODE')); ?>:</b>
	<?php echo CHtml::encode($data->UNCODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAMPUS_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->CAMPUS_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AWARD')); ?>:</b>
	<?php echo CHtml::encode($data->AWARD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRINTDATE')); ?>:</b>
	<?php echo CHtml::encode($data->PRINTDATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAYMENT_SUBSET')); ?>:</b>
	<?php echo CHtml::encode($data->PAYMENT_SUBSET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACADEMIC_YEAR')); ?>:</b>
	<?php echo CHtml::encode($data->ACADEMIC_YEAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REF')); ?>:</b>
	<?php echo CHtml::encode($data->REF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE')); ?>:</b>
	<?php echo CHtml::encode($data->DATE); ?>
	<br />

	*/ ?>

</div>