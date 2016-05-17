<?php
/* @var $this CrePayoutsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cre Payouts',
);

$this->menu=array(
	array('label'=>'Create CrePayouts', 'url'=>array('create')),
	array('label'=>'Manage CrePayouts', 'url'=>array('admin')),
);
?>

<h1>Cre Payouts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
