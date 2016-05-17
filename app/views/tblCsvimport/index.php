<?php
/* @var $this TblCsvimportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Csvimports',
);

$this->menu=array(
	array('label'=>'Create TblCsvimport', 'url'=>array('create')),
	array('label'=>'Manage TblCsvimport', 'url'=>array('admin')),
);
?>

<h1>Tbl Csvimports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
