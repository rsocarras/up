<?php
$this->breadcrumbs=array(
	'Telefono Campanas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TelefonoCampana','url'=>array('index')),
	array('label'=>'Create TelefonoCampana','url'=>array('create')),
	array('label'=>'View TelefonoCampana','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TelefonoCampana','url'=>array('admin')),
	);
	?>

	<h1>Update TelefonoCampana <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>