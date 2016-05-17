<?php
/* @var $this NewPledgesController */
/* @var $model NewPledges */

$this->breadcrumbs=array(
	'New Pledges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewPledges', 'url'=>array('index')),
	array('label'=>'Manage NewPledges', 'url'=>array('admin')),
);
?>

<h1>Create NewPledges</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>