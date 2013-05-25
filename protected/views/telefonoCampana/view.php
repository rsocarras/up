<?php
$this->breadcrumbs=array(
	'Telefono Campanas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TelefonoCampana','url'=>array('index')),
array('label'=>'Create TelefonoCampana','url'=>array('create')),
array('label'=>'Update TelefonoCampana','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TelefonoCampana','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TelefonoCampana','url'=>array('admin')),
);
?>

<h1>View TelefonoCampana #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'campana_id',
		'telefono_id',
		'fecha_creacion',
		'activacion',
),
)); ?>
