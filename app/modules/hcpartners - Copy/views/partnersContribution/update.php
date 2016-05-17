<?php
$this->breadcrumbs=array(
	'Partners Contributions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PartnersContribution', 'url'=>array('index')),
	array('label'=>'Create PartnersContribution', 'url'=>array('create')),
	array('label'=>'View PartnersContribution', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PartnersContribution', 'url'=>array('admin')),
);
?>

<h1>Update PartnersContribution <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>