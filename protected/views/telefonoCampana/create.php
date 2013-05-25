<?php
$this->breadcrumbs=array(
	'Telefono Campanas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TelefonoCampana','url'=>array('index')),
array('label'=>'Manage TelefonoCampana','url'=>array('admin')),
);
?>

<h1>Create TelefonoCampana</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>