<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contract-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row"> 
		<?php echo $form->hiddenField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contract_number'); ?>
		<?php echo $form->textField($model,'contract_number',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contract_number'); ?>
	</div>
	<?php 
	$selected_statuses = array(); 
	foreach($model->statuses as $status) array_push($selected_statuses, $status->id);
	?>

	<div class="row" id="checkbox">
		<?php echo $form->labelEx($model,'statuses'); ?>
		<?php //echo $form->checkboxList($model,'status',$model->getStatusOptions()); ?>
		<ul class="checkbox"><?php echo CHtml::CheckBoxList('Status',$selected_statuses,Chtml::listData(Status::model()->findAll(),'id','status'),array('separator'=>'','template'=>'<li>{input} {label}</li>'));?>
		</ul>
		<div style="clear;both"></div>
		<?php echo $form->error($model,'status'); ?>
	</div>
<div style="clear:both;"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'remark'); ?>
		<?php echo $form->textArea($model,'remark',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remark'); ?>
	</div>
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>
 */?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<style>
#checkbox ul li
{
display: inline;
float:left;
background-color:#ededed;
margin:10px ;
}
</style>
