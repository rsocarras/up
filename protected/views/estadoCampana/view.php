<?php
$this->breadcrumbs=array(
	'Estado Campanas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List EstadoCampana','url'=>array('index')),
array('label'=>'Create EstadoCampana','url'=>array('create')),
array('label'=>'Update EstadoCampana','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete EstadoCampana','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage EstadoCampana','url'=>array('admin')),
);
?>

<h1>View EstadoCampana #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
),
)); ?>
