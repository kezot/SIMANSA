<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'password',array('size'=>20,'maxlength'=>20, 'value'=>$model->password)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'level'); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
	  <?php echo $form->labelEx($model,'new_password'); ?>
	  <?php echo $form->passwordField($model,'new_password',array('size'=>50,'maxlength'=>50)); ?>
	  <?php echo $form->error($model,'new_password'); ?>
	</div>

	<div class="row">
	  <?php echo $form->labelEx($model,'new_password_repeat'); ?>
	  <?php echo $form->passwordField($model,'new_password_repeat',array('size'=>50,'maxlength'=>50)); ?>
	  <?php echo $form->error($model,'new_password_repeat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->