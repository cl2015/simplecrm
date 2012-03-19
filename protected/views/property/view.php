<?php
$this->breadcrumbs=array(
		'物业'=>array('index'),
		$model->id,
);

$this->menu=array(
		array('label'=>'物业列表', 'url'=>array('index')),
		array('label'=>'新增物业', 'url'=>array('create')),
		array('label'=>'更新物业', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'删除物业', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'管理物业', 'url'=>array('admin')),
);
?>

<h1>
	查看物业 ＃
	<?php echo $model->id; ?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'code',
				'region',
				'address',
				'area',
				'unit_price',
				'age',
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
				),
					
		),
)); ?>
<?php 
$this->widget('ext.EAjaxUpload.EAjaxUpload',
                 array(
                       'id'=>'uploadFile',
                       'config'=>array(
                                       'action'=>CHtml::normalizeUrl(array('file/upload','id'=>$model->id)),
                                       'allowedExtensions'=>array("jpg",'png'),//array("jpg","jpeg","gif","exe","mov" and etc...
                                       'sizeLimit'=>2*1024*1024,// maximum file size in bytes
                                       'minSizeLimit'=>1*1024,// minimum file size in bytes
                                       //'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
                                       //'messages'=>array(
                                       //                  'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                                       //                  'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                                       //                  'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                                       //                  'emptyError'=>"{file} is empty, please select files again without it.",
                                       //                  'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                                       //                 ),
                                       //'showMessage'=>"js:function(message){ alert(message); }"
                                      )
                      ));
?>
<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$fileDataProvider,
		'itemView'=>'/file/_view'
        ));
