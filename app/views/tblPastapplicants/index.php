<?php
/* @var $this TblPastapplicantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Pastapplicants',
);

$this->menu=array(
	array('label'=>'Create TblPastapplicants', 'url'=>array('create')),
	array('label'=>'Manage TblPastapplicants', 'url'=>array('admin')),
);
?>

<h1>Tbl Pastapplicants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
