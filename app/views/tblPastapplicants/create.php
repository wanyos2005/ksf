<?php
/* @var $this TblPastapplicantsController */
/* @var $model TblPastapplicants */

$this->breadcrumbs=array(
	'Tbl Pastapplicants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPastapplicants', 'url'=>array('index')),
	array('label'=>'Manage TblPastapplicants', 'url'=>array('admin')),
);
?>

<h1>Create TblPastapplicants</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>