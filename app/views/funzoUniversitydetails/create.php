<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $model FunzoUniversitydetails */

$this->breadcrumbs=array(
	'Funzo Universitydetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FunzoUniversitydetails', 'url'=>array('index')),
	array('label'=>'Manage FunzoUniversitydetails', 'url'=>array('admin')),
);
?>

<h1>Create FunzoUniversitydetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>