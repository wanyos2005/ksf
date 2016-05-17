<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funzo Universitydetails',
);

$this->menu=array(
	array('label'=>'Create FunzoUniversitydetails', 'url'=>array('create')),
	array('label'=>'Manage FunzoUniversitydetails', 'url'=>array('admin')),
);
?>

<h1>Funzo Universitydetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
