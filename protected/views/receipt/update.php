<?php
$this->breadcrumbs=array(
		'Receipts'=>array('index'),
		$model->id=>array('view','id'=>$model->id),
		'Update',
);

$this->menu=array(
		array('label'=>'返回合同', 'url'=>array('contract/view','id'=>$model->contract_id)),
		array('label'=>'收据管理', 'url'=>array('admin')),
);
?>

<h1>
	更新收据
	<?php echo $model->id; ?>
</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>