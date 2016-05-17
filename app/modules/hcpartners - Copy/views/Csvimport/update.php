<?php
/* @var $this TblCsvimportController */
/* @var $model TblCsvimport */

$this->breadcrumbs=array(
	'Tbl Csvimports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblCsvimport', 'url'=>array('index')),
	array('label'=>'Create TblCsvimport', 'url'=>array('create')),
	array('label'=>'View TblCsvimport', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblCsvimport', 'url'=>array('admin')),
);
?>

<h1>Update TblCsvimport <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>