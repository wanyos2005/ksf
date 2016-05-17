<?php
if (!isset($label_size)):
        $label_size = 2;
endif;
if (!isset($input_size)):
        $input_size = 8;
endif;
$label_class = "col-md-{$label_size} control-label";
$input_class = "col-md-{$input_size}";
$half_input_size = $input_size / 2;
$half_input_class = "col-md-{$half_input_size}";
?>
<div class="form-group">
        <label class="<?php echo $label_class ?>"><?php echo Lang::t('Name') ?><span class="required">*</span></label>
        <div class="<?php echo $half_input_class ?>">
                <?php echo CHtml::activeTextField($model, 'first_name', array('class' => 'form-control', 'maxlength' => 30, 'placeholder' => $model->getAttributeLabel('first_name'))); ?>
                <?php echo CHtml::error($model, 'first_name') ?>
        </div>
        <div class="<?php echo $half_input_class ?>">
                <?php echo CHtml::activeTextField($model, 'last_name', array('class' => 'form-control', 'maxlength' => 30, 'placeholder' => $model->getAttributeLabel('last_name'))); ?>
                <?php echo CHtml::error($model, 'last_name') ?>
        </div>
</div>
<div class="form-group">
        <?php echo CHtml::activeLabelEx($model, 'gender', array('class' => $label_class)); ?>
        <div class="<?php echo $input_class ?>" style="padding-top: 4px;">
                <?php echo CHtml::activeRadioButtonList($model, 'gender', Person::genderOptions(), array('separator' => '&nbsp;&nbsp;&nbsp;&nbsp;')); ?>
        </div>
</div>
<div class="form-group">
        <?php echo CHtml::activeLabelEx($model, 'birthdate', array('class' => $label_class)); ?>
        <div class="<?php echo $input_class ?>">
                <?php echo CHtml::activeDropDownList($model, 'birthdate_month', Person::birthDateMonthOptions(), array('style' => 'width:80px;')); ?>&nbsp;&nbsp;
                <?php echo CHtml::activeDropDownList($model, 'birthdate_day', Person::birthDateDayOptions(), array('style' => 'width:80px;')); ?>&nbsp;&nbsp;
                <?php echo CHtml::activeDropDownList($model, 'birthdate_year', Person::birthDateYearOptions(), array('style' => 'width:80px;')); ?>
                <?php echo CHtml::error($model, 'birthdate') ?>
        </div>
</div>
<?php $this->renderPartial('application.views.person._image_field', array('model' => $model, 'htmlOptions' => array('label_class' => $label_class, 'field_class' => $input_class))) ?>



