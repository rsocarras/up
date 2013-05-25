<?php
$this->breadcrumbs=array(
	'Campanas',
);

$this->menu=array(
array('label'=>'Create Campana','url'=>array('create')),
array('label'=>'Manage Campana','url'=>array('admin')),
);
?>

<h1>Campanas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
