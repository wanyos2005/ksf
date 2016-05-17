<?php
/* @var $this TblCsvimportController */
/* @var $model TblCsvimport */

$this->breadcrumbs=array(
	'Tbl Csvimports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblCsvimport', 'url'=>array('index')),
	array('label'=>'Manage TblCsvimport', 'url'=>array('admin')),
);
?>

<h1>Create TblCsvimport</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>