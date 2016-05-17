<?php
/* @var $this FunzoUniversitydetailsController */
/* @var $model FunzoUniversitydetails */

$this->breadcrumbs=array(
	'Funzo Universitydetails'=>array('index'),
	$model->UNIID,
);

$this->menu=array(
	array('label'=>'List FunzoUniversitydetails', 'url'=>array('index')),
	array('label'=>'Create FunzoUniversitydetails', 'url'=>array('create')),
	array('label'=>'Update FunzoUniversitydetails', 'url'=>array('update', 'id'=>$model->UNIID)),
	array('label'=>'Delete FunzoUniversitydetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->UNIID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FunzoUniversitydetails', 'url'=>array('admin')),
);
?>

<h1>View FunzoUniversitydetails #<?php echo $model->UNIID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'UNIID',
		'UNIVERSITY_CODE',
		'DEPARTMENT',
		'FACULTY',
		'AREA_OF_STUDY',
		'REG_NO',
		'CURR_YEAR_OF_STUDY',
		'DEGREE_QUALIFICATION',
		'LEVEL_OF_STUDY',
		'COURSE_AREA',
		'APP_IDNOFK',
		'YEAR_OF_ADM',
		'DATE_POSTED',
		'CAMPUS_NAME',
		'LENGTH_OF_STUDY',
		'CATEGORY',
		'CADRE',
	),
)); ?>
