<?php
$this->breadcrumbs=array(
	'Partners Contributions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PartnersContribution', 'url'=>array('index')),
	array('label'=>'Create PartnersContribution', 'url'=>array('create')),
	array('label'=>'Update PartnersContribution', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PartnersContribution', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PartnersContribution', 'url'=>array('admin')),
);
?>

<h1>View PartnersContribution #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'code',
		'phone',
		'amount',
		'year',
		'month',
		'week',
		'day',
		'created',
		'user',
	),
)); ?>
