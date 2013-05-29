<?php
$this->breadcrumbs=array(
	'合同',
);

$this->menu=array(
	//array('label'=>'Create Contract', 'url'=>array('create')),
	array('label'=>'合同管理', 'url'=>array('admin')),
);
?>

<h1>合同</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
