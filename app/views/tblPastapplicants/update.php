<?php
/* @var $this TblPastapplicantsController */
/* @var $model TblPastapplicants */

$this->breadcrumbs=array(
	'Tbl Pastapplicants'=>array('index'),
	$model->NAME=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPastapplicants', 'url'=>array('index')),
	array('label'=>'Create TblPastapplicants', 'url'=>array('create')),
	array('label'=>'View TblPastapplicants', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TblPastapplicants', 'url'=>array('admin')),
);
?>

<h1>Update TblPastapplicants <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>