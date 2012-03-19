<?php
$this->breadcrumbs=array(
		'客户列表'=>array('index'),
		$model->name,
);

$this->menu=array(
		array('label'=>'客户列表', 'url'=>array('index')),
		array('label'=>'新增客户', 'url'=>array('create')),
		
		array('label'=>'新增客户追踪', 'url'=>array('track/create','customer_id'=>$model->id)),
		array('label'=>'更新客户', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'删除客户', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'管理客户', 'url'=>array('admin')),
);
?>

<h1>
	查看客户 #
	<?php echo $model->name; ?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'id_card',
				'name',
				array('label'=>$model->getAttributeLabel('products'),
						'type'=>'raw',
						'value'=>implode(',',$model->products),
				),
				'phone',
				'address',
				'source',
				'created_at',
				array('label'=>$model->getAttributeLabel('created_by'),
						'type'=>'raw',
						'value'=>$model->creater->name,
				),
				'updated_at',
				array('label'=>$model->getAttributeLabel('updated_by'),
						'type'=>'raw',
						'value'=>$model->updater->name,
				)
		),
)); ?>


<?php $this->beginWidget('zii.widgets.CPortlet', array( 
		'title'=>'客户追踪信息',
));
$this->widget('RecentTracks', array('customerId'=>$model->id));
$this->endWidget(); ?>
