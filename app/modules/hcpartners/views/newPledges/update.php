<?php
/* @var $this NewPledgesController */
/* @var $model NewPledges */

$this->breadcrumbs=array(
	'New Pledges'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewPledges', 'url'=>array('index')),
	array('label'=>'Create NewPledges', 'url'=>array('create')),
	array('label'=>'View NewPledges', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewPledges', 'url'=>array('admin')),
);
?>

<h1>Update NewPledges <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>