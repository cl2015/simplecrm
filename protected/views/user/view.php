<?php
$this->breadcrumbs=array(
		'员工'=>array('index'),
		$model->name,
);

$this->menu=array(
		array('label'=>'员工列表', 'url'=>array('index')),
		array('label'=>'新增员工', 'url'=>array('create')),
		array('label'=>'更新员工', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'删除员工', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'管理员工', 'url'=>array('admin')),
);
?>

<h1>
	查看员工
	<?php echo $model->name; ?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'username',
				//'password',
				'code',
				'name',
				'birthday',
				'phone',
				'email',
				'job_title',
				'superior',
				'department',
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
