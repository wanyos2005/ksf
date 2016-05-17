<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hc-partners-form',
	'enableAjaxValidation'=>false,
)); ?>
<fieldset>
<legend>Update Record</legend>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<table>
		<tr>
			<td><?php echo $form->labelEx($model,'name'); ?></td><td>
				<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'name'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'code'); ?></td><td>
		<?php echo $form->textField($model,'code',array('size'=>30,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'code'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'phone'); ?></td><td>
				<?php echo $form->textField($model,'phone'); ?>
				<?php echo $form->error($model,'phone'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'amountpledged'); ?></td><td>
				<?php echo $form->textField($model,'amountpledged'); ?>
				<?php echo $form->error($model,'amountpledged'); ?>
			</td>
		</tr>

			<tr>
			<td>
					<?php echo $form->labelEx($model,'church'); ?></td><td>
		<?php echo $form->textField($model,'church',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'church'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'county'); ?></td><td>
		<?php echo $form->textField($model,'county',array('size'=>30,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'county'); ?>
			</td>
		</tr>
			<tr>
			<td>
					<?php echo $form->labelEx($model,'email'); ?></td><td>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'date'); ?></td><td>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
			</td>
		</tr>
	</table>
    

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn-info')) ?>
	</div>

<?php $this->endWidget(); ?>
</fieldset>
</div><!-- form -->