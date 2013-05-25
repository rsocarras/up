<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>200)); ?>

		<?php echo $form->textFieldRow($model,'fecha_inicio',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'fecha_finalizacion',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'estado_campana_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'empresa_id',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'descripcion',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'fecha_creacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
