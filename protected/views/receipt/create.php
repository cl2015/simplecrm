<?php
$this->breadcrumbs=array(
	'合同'=>array('contract/index'),
	$model->contract_id=>array('contract/view','id'=>$model->contract_id),
	'新增收据',
);

// $this->menu=array(
// 	array('label'=>'List Receipt', 'url'=>array('index')),
// 	array('label'=>'Manage Receipt', 'url'=>array('admin')),
// );
?>

<h1>新增收据</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>