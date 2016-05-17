<?php
/* @var $this TblCsvimportController */
/* @var $model TblCsvimport */

$this->breadcrumbs=array(
	'Tbl Csvimports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblCsvimport', 'url'=>array('index')),
	array('label'=>'Create TblCsvimport', 'url'=>array('create')),
	array('label'=>'Update TblCsvimport', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblCsvimport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblCsvimport', 'url'=>array('admin')),
);
?>

<h1>View TblCsvimport #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'receipt',
		'date',
		'details',
		'amount',
	),
)); ?>
