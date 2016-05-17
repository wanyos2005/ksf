<?php
/* @var $this CrePayoutsController */
/* @var $model CrePayouts */

$this->breadcrumbs=array(
	'Cre Payouts'=>array('index'),
	$model->id_pri=>array('view','id'=>$model->id_pri),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrePayouts', 'url'=>array('index')),
	array('label'=>'Create CrePayouts', 'url'=>array('create')),
	array('label'=>'View CrePayouts', 'url'=>array('view', 'id'=>$model->id_pri)),
	array('label'=>'Manage CrePayouts', 'url'=>array('admin')),
);
?>

<h1>Update CrePayouts <?php echo $model->id_pri; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>