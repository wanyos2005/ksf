<?php
$this->breadcrumbs=array(
	'Partners Contributions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PartnersContribution', 'url'=>array('index')),
	array('label'=>'Manage PartnersContribution', 'url'=>array('admin')),
);
?>

<h1>Create PartnersContribution</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>