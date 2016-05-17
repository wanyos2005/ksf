<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */

$this->breadcrumbs=array(
	'Cre Payouts'=>array('index'),
	$model->id_pri,
);

$this->menu=array(
	array('label'=>'List CrePayouts', 'url'=>array('index')),
	array('label'=>'Create CrePayouts', 'url'=>array('create')),
	array('label'=>'Update CrePayouts', 'url'=>array('update', 'id'=>$model->id_pri)),
	array('label'=>'Delete CrePayouts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pri),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CrePayouts', 'url'=>array('admin')),
);
?>

<h1>View CrePayouts #<?php echo $model->id_pri; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FSERIAL',
		'IDFNAME',
		'IDLNAME',
		'IDMNAME',
		'IDNO',
		'ADMI_NO',
		'UNCODE',
		'CAMPUS_CODE',
		'AWARD',
		'PRINTDATE',
		'PAYMENT_SUBSET',
		'ACADEMIC_YEAR',
		'REF',
		'DATE',
		'id_pri',
	),
)); ?>
