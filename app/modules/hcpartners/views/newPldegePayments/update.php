<?php
/* @var $this NewPldegePaymentsController */
/* @var $model NewPldegePayments */

$this->breadcrumbs=array(
	'New Pldege Payments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewPldegePayments', 'url'=>array('index')),
	array('label'=>'Create NewPldegePayments', 'url'=>array('create')),
	array('label'=>'View NewPldegePayments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewPldegePayments', 'url'=>array('admin')),
);
?>

<h1>Update NewPldegePayments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>