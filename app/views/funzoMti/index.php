<?php
/* @var $this FunzoMtiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funzo Mtis',
);

$this->menu=array(
	array('label'=>'Create FunzoMti', 'url'=>array('create')),
	array('label'=>'Manage FunzoMti', 'url'=>array('admin')),
);
?>

<h1>Funzo Mtis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
