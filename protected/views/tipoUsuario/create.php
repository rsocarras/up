<?php
$this->breadcrumbs=array(
	'Tipo Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TipoUsuario','url'=>array('index')),
array('label'=>'Manage TipoUsuario','url'=>array('admin')),
);
?>

<h1>Create TipoUsuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>