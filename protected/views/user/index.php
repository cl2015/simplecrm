<?php
$this->breadcrumbs=array(
	'员工列表',
);

$this->menu=array(
	array('label'=>'新增员工', 'url'=>array('create')),
	array('label'=>'管理员工', 'url'=>array('admin')),
);
?>

<h1>员工列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
