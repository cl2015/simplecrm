<?php
function displayStatus($statuses) {
	$output = "";
	foreach($statuses as $i=>$status) $output.= ($i>0?', ':'').CHtml::encode($status->status);
	return $output;
}

$this->breadcrumbs=array(
		'合同'=>array('index'),
		$model->id,
);

$this->menu=array(
		array('label'=>'合同列表', 'url'=>array('index')),
		//array('label'=>'Create Contract', 'url'=>array('create')),
		array('label'=>'更新合同', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'新增收据', 'url'=>array('receipt/create', 'contract_id'=>$model->id)),
		array('label'=>'删除合同', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'管理合同', 'url'=>array('admin')),
);
?>

<h1>
	查看合同 #
	<?php echo $model->id; ?>
</h1>

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
				array('label'=>$model->getAttributeLabel('created_by'),
						'type'=>'raw',
						'value'=>$model->creater->username,
				)
				,
				'updated_at',
				array('label'=>$model->getAttributeLabel('updated_by'),
						'type'=>'raw',
						'value'=>$model->updater->username,
				)
		),
)); ?>
<?php $this->beginWidget('zii.widgets.CPortlet', array( 
		'title'=>'收据信息',
));
$this->widget('Receipts', array('contractId'=>$model->id));
$this->endWidget(); ?>
<?php $this->beginWidget('zii.widgets.CPortlet', array( 
		'title'=>'最近更新',
));
$this->widget('RecentHistories', array('contractId'=>$model->id));
$this->endWidget(); ?>
