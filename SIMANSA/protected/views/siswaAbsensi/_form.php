<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php // echo $form->labelEx($model,'NIS'); ?>
        <?php echo $form->hiddenField($model,'NIS', array('value' => $siswaTingkat->NIS)); ?>
        <?php echo $form->error($model,'NIS'); ?>
    </div>
	
	
    <div class="row">
        <?php // echo $form->labelEx($model,'KD_TAHUN_AJARAN'); ?>
        <?php echo $form->hiddenField($model,'KD_TAHUN_AJARAN', array('value' => $this->tahunAjaran)); ?>
        <?php echo $form->error($model,'KD_TAHUN_AJARAN'); ?>
    </div>
	
	
    <div class="row">
        <?php // echo $form->labelEx($model,'KD_TINGKAT_KELAS'); ?>
        <?php echo $form->hiddenField($model,'KD_TINGKAT_KELAS', array('value' => $siswaTingkat->KD_TINGKAT_KELAS)); ?>
        <?php echo $form->error($model,'KD_TINGKAT_KELAS'); ?>
    </div>
	
	
    <div class="row">
        <?php // echo $form->labelEx($model,'KD_PROGRAM_PENGAJARAN'); ?>
        <?php echo $form->hiddenField($model,'KD_PROGRAM_PENGAJARAN', array('value' => $siswaTingkat->KD_PROGRAM_PENGAJARAN)); ?>
        <?php echo $form->error($model,'KD_PROGRAM_PENGAJARAN'); ?>
    </div>
	
	
    <div class="row">
        <?php // echo $form->labelEx($model,'KD_ROMBEL'); ?>
        <?php echo $form->hiddenField($model,'KD_ROMBEL', array('value' => $siswaTingkat->KD_ROMBEL)); ?>
        <?php echo $form->error($model,'KD_ROMBEL'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'TANGGAL'); ?>
        <?php echo $form->dateField($model,'TANGGAL'); ?>
        <?php echo $form->error($model,'TANGGAL'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'KD_PERIODE_BELAJAR'); ?>
        <?php echo $form->hiddenField($model,'KD_PERIODE_BELAJAR', array('value' => $this->semester)); ?>
        <?php echo $form->error($model,'KD_PERIODE_BELAJAR'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'STATUS_ABSEN'); ?>
        <?php echo $form->dropDownList($model,'STATUS_ABSEN', array('1'=>'sakit', '2'=>'izin', '3'=>'alfa')); ?>
        <?php echo $form->error($model,'STATUS_ABSEN'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KETERANGAN'); ?>
        <?php echo $form->textField($model,'KETERANGAN'); ?>
        <?php echo $form->error($model,'KETERANGAN'); ?>
    </div>
	
	
    <div class="row">
        <?php // echo $form->labelEx($model,'USERNAME'); ?>
        <?php echo $form->hiddenField($model,'USERNAME', array('value'=> 'adm')); ?>
        <?php echo $form->error($model,'USERNAME'); ?>
    </div>
	
	
    <div class="row">
        <?php // echo $form->labelEx($model,'TANGGAL_AKSES'); ?>
        <?php //echo $form->hiddenField($model,'TANGGAL_AKSES'); ?>
        <?php //echo $form->error($model,'TANGGAL_AKSES'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
