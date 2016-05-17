<?php
/* @var $this TblPastapplicantsController */
/* @var $model TblPastapplicants */

$this->breadcrumbs=array(
	'Tbl Pastapplicants'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List TblPastapplicants', 'url'=>array('index')),
	array('label'=>'Create TblPastapplicants', 'url'=>array('create')),
	array('label'=>'Update TblPastapplicants', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TblPastapplicants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPastapplicants', 'url'=>array('admin')),
);
?>

<h1>View TblPastapplicants #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NAME',
		'IDNO',
		'PINNO',
		'EMAIL_ADD',
		'TELNO',
		'AMOUNT',
		'PRINTED',
		'POSTDATE',
		'CONST_C',
		'YEAR_OF_STUDY',
		'STUD_CATEGORY',
		'STUD_COUNTY',
		'BURSARY',
		'ACADEMIC_YEAR',
	),
)); ?>
