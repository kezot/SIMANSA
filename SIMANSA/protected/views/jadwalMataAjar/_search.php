<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NAMA_KELAS'); ?>
		<?php echo $form->textField($model,'NAMA_KELAS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARI'); ?>
		<?php echo $form->textField($model,'HARI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JAM'); ?>
		<?php echo $form->textField($model,'JAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MATA_PELAJARAN'); ?>
		<?php echo $form->textField($model,'MATA_PELAJARAN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->