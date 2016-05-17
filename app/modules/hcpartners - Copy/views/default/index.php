<?php
$this->breadcrumbs=array(
	'Hc Partners',
);

$this->menu=array(
	array('label'=>'Create HcPartners', 'url'=>array('create')),
	array('label'=>'Manage HcPartners', 'url'=>array('admin')),
);
?>

<h1>Hc Partners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
