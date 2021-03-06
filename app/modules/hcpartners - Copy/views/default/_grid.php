<?php
$grid_id = 'patients-grid';
$search_form_id = $grid_id . '-active-search-form';
?>
<!--grid header-->
<div class="row grid-view-header">
        <div class="col-sm-6">
                <div class="btn-group">
                        <?php if ($this->showLink($this->resource, Acl::ACTION_CREATE)): ?><a class="btn btn-sm" href="<?php echo $this->createUrl('create') ?>"><i class="icon-plus-sign"></i> <?php echo Lang::t('Add ' . $this->resourceLabel) ?></a><?php endif; ?>
                </div>
        </div>
        <div class="col-sm-6">
                <div class="dataTables_filter">
                        <?php
                        $this->beginWidget('ext.activeSearch.AjaxSearch', array(
                            'gridID' => $grid_id,
                            'formID' => $search_form_id,
                            'model' => $model,
                            'action' => Yii::app()->createUrl($this->route, $this->actionParams),
                        ));
                        ?>
                        <?php $this->endWidget(); ?>
                </div>
        </div>
</div>
<?php
$this->widget('application.components.widgets.GridView', array(
    'id' => $grid_id,
    'dataProvider' => $model->search(),
    'enablePagination' => $model->enablePagination,
    'enableSummary' => $model->enableSummary,
    'columns' => array(
        'id',
        // array(
        //     'name' => 'name',
        //     'type' => 'raw',
        //     'value' => 'CHtml::link(CHtml::encode($data->fname ." ". $data->mname." ". $data->lname  ),Yii::app()->controller->createUrl("addsymptom",array("patientid"=>$data->primaryKey)))',
        // ),
        'receipt',
        'date',
        'details',
        'amount',
        array(
            'class' => 'ButtonColumn',
            'template' => '{update}&nbsp;&nbsp;&nbsp;&nbsp;{delete}',
            'htmlOptions' => array('class' => 'text-center', 'style' => 'width: 100px;'),
            'buttons' => array(
                'update' => array(
                    'imageUrl' => false,
                    'label' => '<i class="icon-pencil bigger-130"></i>',
                    'url' => 'Yii::app()->controller->createUrl("update",array("id"=>$data->primaryKey))',
                    'visible' => '$this->grid->owner->showLink("' . UserResources::RES_USER_ROLES . '","' . Acl::ACTION_UPDATE . '")?true:false',
                    'options' => array(
                        'class' => 'green',
                        'title' => 'Edit',
                    ),
                ),
                'delete' => array(
                    'imageUrl' => false,
                    'label' => '<i class="icon-trash bigger-130"></i>',
                    'url' => 'Yii::app()->controller->createUrl("delete",array("id"=>$data->primaryKey))',
                    'visible' => '$this->grid->owner->showLink("' . UserResources::RES_USER_ROLES . '", "' . Acl::ACTION_DELETE . '")?true:false',
                    'options' => array(
                        'class' => 'delete red',
                        'title' => 'Delete',
                    ),
                ),
            )
        ),
    ),
));
?>