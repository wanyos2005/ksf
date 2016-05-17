<?php
/* @var $this FunzoMtiController */
/* @var $model FunzoMti */

$this->breadcrumbs=array(
	'Funzo Mtis'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FunzoMti', 'url'=>array('index')),
	array('label'=>'Create FunzoMti', 'url'=>array('create')),
	array('label'=>'View FunzoMti', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage FunzoMti', 'url'=>array('admin')),
);
?>

<h1>Update FunzoMti <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>