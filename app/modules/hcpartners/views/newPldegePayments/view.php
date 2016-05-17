<?php
/* @var $this NewPldegePaymentsController */
/* @var $model NewPldegePayments */

$this->breadcrumbs=array(
	'New Pldege Payments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NewPldegePayments', 'url'=>array('index')),
	array('label'=>'Create NewPldegePayments', 'url'=>array('create')),
	array('label'=>'Update NewPldegePayments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NewPldegePayments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewPldegePayments', 'url'=>array('admin')),
);
?>

<h1>View NewPldegePayments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'newpledgeid',
		'amount',
		'year',
		'month',
		'week',
		'day',
		'tarehe',
		'created',
		'user',
	),
)); ?>
