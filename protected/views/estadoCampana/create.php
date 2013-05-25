<?php
$this->breadcrumbs=array(
	'Estado Campanas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List EstadoCampana','url'=>array('index')),
array('label'=>'Manage EstadoCampana','url'=>array('admin')),
);
?>

<h1>Create EstadoCampana</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>