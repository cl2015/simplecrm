<?php
$this->breadcrumbs=array(
		'客户'=>array('customer/index'),
		$model->customer_id=>array('customer/view','id'=>$model->customer_id),
		$model->id,
);

// $this->menu=array(
// 	array('label'=>'List Track', 'url'=>array('index')),
// 	array('label'=>'Manage Track', 'url'=>array('admin')),
// );
?>

<h1>新增客户追踪</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>