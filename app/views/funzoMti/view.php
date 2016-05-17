<?php
/* @var $this FunzoMtiController */
/* @var $model FunzoMti */

$this->breadcrumbs=array(
	'Funzo Mtis'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List FunzoMti', 'url'=>array('index')),
	array('label'=>'Create FunzoMti', 'url'=>array('create')),
	array('label'=>'Update FunzoMti', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete FunzoMti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FunzoMti', 'url'=>array('admin')),
);
?>

<h1>View FunzoMti #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'IDNO',
		'CATEGORY',
		'LEVEL_OF_STUDY',
		'YEAR_OF_STUDY',
		'COST_OF_PROGRAM',
		'CADRE',
		'APPLICANT_DETAILS',
		'GENDER',
		'COUNTY',
		'FATHER',
		'MOTHER',
		'GUARDIAN',
		'ACADEMIC_PROGRESS',
		'ORGANIZATION_SKILLS',
		'INTERPERSONAL_SKILLS',
		'TOTAL',
		'DATE_POSTED',
		'AMOUNT_AWARDED',
		'AMOUNT_AWARDED_CUM',
		'PAID',
		'DATE_PAID',
		'USER_PAID',
		'CONFIRMED',
		'DATE_CONFIRMED',
		'USER_CONFIRMED',
	),
)); ?>
