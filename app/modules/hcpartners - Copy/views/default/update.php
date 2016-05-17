<?php
$this->breadcrumbs=array(
	'Hc Partners'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HcPartners', 'url'=>array('index')),
	array('label'=>'Create HcPartners', 'url'=>array('create')),
	array('label'=>'View HcPartners', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HcPartners', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>