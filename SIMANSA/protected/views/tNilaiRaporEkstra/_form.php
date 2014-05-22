<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'NIS'); ?>
        <?php echo $form->textField($model,'NIS'); ?>
        <?php echo $form->error($model,'NIS'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KD_TAHUN_AJARAN'); ?>
        <?php echo $form->textField($model,'KD_TAHUN_AJARAN'); ?>
        <?php echo $form->error($model,'KD_TAHUN_AJARAN'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KD_TINGKAT_KELAS'); ?>
        <?php echo $form->textField($model,'KD_TINGKAT_KELAS'); ?>
        <?php echo $form->error($model,'KD_TINGKAT_KELAS'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KD_PROGRAM_PENGAJARAN'); ?>
        <?php echo $form->textField($model,'KD_PROGRAM_PENGAJARAN'); ?>
        <?php echo $form->error($model,'KD_PROGRAM_PENGAJARAN'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KD_ROMBEL'); ?>
        <?php echo $form->textField($model,'KD_ROMBEL'); ?>
        <?php echo $form->error($model,'KD_ROMBEL'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KD_PERIODE_BELAJAR'); ?>
        <?php echo $form->textField($model,'KD_PERIODE_BELAJAR'); ?>
        <?php echo $form->error($model,'KD_PERIODE_BELAJAR'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'ID_EKSTRAKURIKULER'); ?>
        <?php echo $form->textField($model,'ID_EKSTRAKURIKULER'); ?>
        <?php echo $form->error($model,'ID_EKSTRAKURIKULER'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KETERANGAN'); ?>
        <?php echo $form->textField($model,'KETERANGAN'); ?>
        <?php echo $form->error($model,'KETERANGAN'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'CATATAN'); ?>
        <?php echo $form->textField($model,'CATATAN'); ?>
        <?php echo $form->error($model,'CATATAN'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'USERNAME'); ?>
        <?php echo $form->textField($model,'USERNAME'); ?>
        <?php echo $form->error($model,'USERNAME'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'TANGGAL_AKSES'); ?>
        <?php echo $form->textField($model,'TANGGAL_AKSES'); ?>
        <?php echo $form->error($model,'TANGGAL_AKSES'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
