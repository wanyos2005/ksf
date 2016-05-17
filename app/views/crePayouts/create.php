<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */

$this->breadcrumbs=array(
	'Cre Payouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CrePayouts', 'url'=>array('index')),
	array('label'=>'Manage CrePayouts', 'url'=>array('admin')),
);
?>

<h1>Create CrePayouts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>