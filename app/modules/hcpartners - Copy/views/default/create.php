<?php
$this->breadcrumbs=array(
	'Hc Partners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HcPartners', 'url'=>array('index')),
	array('label'=>'Manage HcPartners', 'url'=>array('admin')),
);
?>

<h1>Create HcPartners</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>