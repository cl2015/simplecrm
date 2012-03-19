<?php
$this->breadcrumbs=array(
	'合同进程'=>array('index'),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List History', 'url'=>array('index')),
// 	array('label'=>'Create History', 'url'=>array('create')),
// 	array('label'=>'Update History', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete History', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage History', 'url'=>array('admin')),
// );
?>

<h1>查看合同进程 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'contract_id',
		'status',
		'remark',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
