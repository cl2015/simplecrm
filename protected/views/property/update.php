<?php
$this->breadcrumbs=array(
	'物业'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'物业列表', 'url'=>array('index')),
	array('label'=>'新增物业', 'url'=>array('create')),
	array('label'=>'查看物业', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理物业', 'url'=>array('admin')),
);
?>

<h1>更新物业 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
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
