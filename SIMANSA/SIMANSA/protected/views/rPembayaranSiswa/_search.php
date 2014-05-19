<?php
/* @var $this RPembayaranSiswaController */
/* @var $model RPembayaranSiswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PEMBAYARAN_SISWA'); ?>
		<?php echo $form->textField($model,'ID_PEMBAYARAN_SISWA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_PEMBAYARAN_SISWA'); ?>
		<?php echo $form->textField($model,'NM_PEMBAYARAN_SISWA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_AKSES'); ?>
		<?php echo $form->textField($model,'TANGGAL_AKSES'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->