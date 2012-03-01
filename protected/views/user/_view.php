<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('callStatus')); ?>:</b>
	<?php echo CHtml::encode($data->callStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metaData')); ?>:</b>
	<?php echo CHtml::encode($data->metaData); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifier')); ?>:</b>
	<?php echo CHtml::encode($data->modifier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify')); ?>:</b>
	<?php echo CHtml::encode($data->modify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('takeTime')); ?>:</b>
	<?php echo CHtml::encode($data->takeTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uniqueId')); ?>:</b>
	<?php echo CHtml::encode($data->uniqueId); ?>
	<br />

	*/ ?>

</div>