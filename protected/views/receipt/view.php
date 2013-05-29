<?php
$this->breadcrumbs=array(
	'合同'=>array('contract/index'),
	$model->contract_id=>array('contract/view','id'=>$model->contract_id),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List Receipt', 'url'=>array('index')),
// 	array('label'=>'Create Receipt', 'url'=>array('create')),
// 	array('label'=>'Update Receipt', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Receipt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Receipt', 'url'=>array('admin')),
// );
?>

<h1>查看收据 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'contract_id',
		'receipts_date',
		'amount',
		'code',
		'content',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
