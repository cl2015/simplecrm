<?php
$this->breadcrumbs=array(
	'Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index')),
	array('label'=>'Create Property', 'url'=>array('create')),
	array('label'=>'Update Property', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Property', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Property', 'url'=>array('admin')),
);
?>

<h1>View Property #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'address',
		'area',
		'unit_price',
		'age',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>

<?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$fileDataProvider,
            'itemView'=>'/file/_view'
        ));
