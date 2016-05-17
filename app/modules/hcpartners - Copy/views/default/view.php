<?php
$this->breadcrumbs=array(
	'Hc Partners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HcPartners', 'url'=>array('index')),
	array('label'=>'Create HcPartners', 'url'=>array('create')),
	array('label'=>'Update HcPartners', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HcPartners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HcPartners', 'url'=>array('admin')),
);
?>

<h3>View Partner <?php //echo $model->id; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'phone',
		'church',
		'county',
		'amountpledged',
		'date',
		'email',
	),
)); ?>
