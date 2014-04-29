<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwal-mata-ajar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA_KELAS'); ?>
		<?php echo $form->textField($model,'NAMA_KELAS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'NAMA_KELAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARI'); ?>
		<?php echo $form->textField($model,'HARI'); ?>
		<?php echo $form->error($model,'HARI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JAM'); ?>
		<?php echo $form->textField($model,'JAM'); ?>
		<?php echo $form->error($model,'JAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MATA_PELAJARAN'); ?>
		<?php echo $form->textField($model,'MATA_PELAJARAN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MATA_PELAJARAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->