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

<h4>Payment Schedule</h4>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>