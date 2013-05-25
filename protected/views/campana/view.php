<?php
$this->breadcrumbs=array(
	'Campanas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Campana','url'=>array('index')),
array('label'=>'Create Campana','url'=>array('create')),
array('label'=>'Update Campana','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Campana','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Campana','url'=>array('admin')),
);
?>

<h1>View Campana #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'fecha_inicio',
		'fecha_finalizacion',
		'estado_campana_id',
		'empresa_id',
		'descripcion',
		'fecha_creacion',
),
)); ?>
