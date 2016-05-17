
<h1>View NewPledges #<?php echo $model->id; ?></h1>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'contact',
		'region',
		'occupation',
		'oldpledge',
		'amount_paid',
		'newpledge',
		'totalpldege',
		'duration',
		'onbehalf',
		'date',
	),
)); */?>

<?php

$this->breadcrumbs = array(
    $this->pageTitle,
);
?>
<?php $this->renderPartial('_grid', array('model' => $model)); ?>