<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callStatus'); ?>
		<?php echo $form->textField($model,'callStatus'); ?>
		<?php echo $form->error($model,'callStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metaData'); ?>
		<?php echo $form->textField($model,'metaData'); ?>
		<?php echo $form->error($model,'metaData'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modifier'); ?>
		<?php echo $form->textField($model,'modifier'); ?>
		<?php echo $form->error($model,'modifier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify'); ?>
		<?php echo $form->textField($model,'modify',array('size'=>60,'maxlength'=>210)); ?>
		<?php echo $form->error($model,'modify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'takeTime'); ?>
		<?php echo $form->textField($model,'takeTime'); ?>
		<?php echo $form->error($model,'takeTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uniqueId'); ?>
		<?php echo $form->textField($model,'uniqueId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'uniqueId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->