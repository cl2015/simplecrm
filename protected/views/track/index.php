<?php
$this->breadcrumbs=array(
	'Tracks',
);

$this->menu=array(
	array('label'=>'Create Track', 'url'=>array('create')),
	array('label'=>'Manage Track', 'url'=>array('admin')),
);
?>

<h1>Tracks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
