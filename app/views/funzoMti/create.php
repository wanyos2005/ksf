<?php
/* @var $this FunzoMtiController */
/* @var $model FunzoMti */

$this->breadcrumbs=array(
	'Funzo Mtis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FunzoMti', 'url'=>array('index')),
	array('label'=>'Manage FunzoMti', 'url'=>array('admin')),
);
?>

<h1>Create FunzoMti</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>