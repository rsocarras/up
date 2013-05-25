<?php
$this->breadcrumbs=array(
	'Opcions'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Opcion','url'=>array('index')),
array('label'=>'Create Opcion','url'=>array('create')),
array('label'=>'Update Opcion','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Opcion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Opcion','url'=>array('admin')),
);
?>

<h1>View Opcion #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'telefono_x_campana_id',
		'pregunta_id',
		'fecha_inicio',
		'fecha_fin',
),
)); ?>
