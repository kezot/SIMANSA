<?php
/* @var $this PengumumanAkademikController */
/* @var $model PengumumanAkademik */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->hiddenField($model,'tanggal', array('value' => strtotime("now"))); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'konten'); ?>
		<?php echo $form->textField($model,'konten',array('size'=>60,'maxlength'=>3000)); ?>
		<?php echo $form->error($model,'konten'); ?>
	</div>

	<div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->