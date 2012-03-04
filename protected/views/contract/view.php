<?php
function displayStatus($statuses) {
	$output = "";
	foreach($statuses as $i=>$status) $output.= ($i>0?', ':'').CHtml::encode($status->status);
	return $output;
}

$this->breadcrumbs=array(
	'Contracts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contract', 'url'=>array('index')),
	//array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'Update Contract', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contract', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contract', 'url'=>array('admin')),
);
?>

<h1>View Contract #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_id',
		'amount',
		'contract_number',
		array(               // related services
            'label'=>$model->getAttributeLabel('statuses'),
            'type'=>'raw',
            'value'=>displayStatus($model->statuses),
        ),

		'content',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
