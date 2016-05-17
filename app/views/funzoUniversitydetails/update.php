<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $model FunzoUniversitydetails */

$this->breadcrumbs=array(
	'Funzo Universitydetails'=>array('index'),
	$model->UNIID=>array('view','id'=>$model->UNIID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FunzoUniversitydetails', 'url'=>array('index')),
	array('label'=>'Create FunzoUniversitydetails', 'url'=>array('create')),
	array('label'=>'View FunzoUniversitydetails', 'url'=>array('view', 'id'=>$model->UNIID)),
	array('label'=>'Manage FunzoUniversitydetails', 'url'=>array('admin')),
);
?>

<h1>Update FunzoUniversitydetails <?php echo $model->UNIID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>