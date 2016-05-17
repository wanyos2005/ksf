<?php
$this->breadcrumbs=array(
	'Partners Contributions',
);

$this->menu=array(
	array('label'=>'Create PartnersContribution', 'url'=>array('create')),
	array('label'=>'Manage PartnersContribution', 'url'=>array('admin')),
);
?>

<h1>Partners Contributions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
