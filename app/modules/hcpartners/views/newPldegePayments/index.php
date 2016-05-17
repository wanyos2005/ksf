<?php
/* @var $this NewPldegePaymentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'New Pldege Payments',
);

$this->menu=array(
	array('label'=>'Create NewPldegePayments', 'url'=>array('create')),
	array('label'=>'Manage NewPldegePayments', 'url'=>array('admin')),
);
?>

<h1>New Pldege Payments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
