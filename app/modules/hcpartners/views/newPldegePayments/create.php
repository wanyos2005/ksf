<?php
/* @var $this NewPldegePaymentsController */
/* @var $model NewPldegePayments */

$this->breadcrumbs=array(
	'New Pldege Payments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewPldegePayments', 'url'=>array('index')),
	array('label'=>'Manage NewPldegePayments', 'url'=>array('admin')),
);
?>

<h1>Create NewPldegePayments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>