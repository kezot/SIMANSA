

</div><!-- form -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'ubahPassword-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'currentPassword'); ?>
        <?php echo CHtml::activePasswordField($model,'currentPassword') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'newPassword'); ?>
        <?php echo CHtml::activePasswordField($model,'newPassword') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'newPasswordRepeat'); ?>
        <?php echo CHtml::activePasswordField($model,'newPasswordRepeat') ?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('Ubah password'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->