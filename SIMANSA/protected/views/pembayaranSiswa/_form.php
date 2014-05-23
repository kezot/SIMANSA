<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php //echo $form->labelEx($model,'NIS'); ?>
        <?php echo $form->hiddenField($model,'NIS', array('value' => $siswaTingkat->NIS)); ?>
        <?php echo $form->error($model,'NIS'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'KD_TAHUN_AJARAN'); ?>
        <?php echo $form->hiddenField($model,'KD_TAHUN_AJARAN', array('value' => $siswaTingkat->KD_TAHUN_AJARAN)); ?>
        <?php echo $form->error($model,'KD_TAHUN_AJARAN'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'KD_TINGKAT_KELAS'); ?>
        <?php echo $form->hiddenField($model,'KD_TINGKAT_KELAS', array('value' => $siswaTingkat->KD_TINGKAT_KELAS)); ?>
        <?php echo $form->error($model,'KD_TINGKAT_KELAS'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'KD_PROGRAM_PENGAJARAN'); ?>
        <?php echo $form->hiddenField($model,'KD_PROGRAM_PENGAJARAN', array('value' => $siswaTingkat->KD_PROGRAM_PENGAJARAN)); ?>
        <?php echo $form->error($model,'KD_PROGRAM_PENGAJARAN'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'KD_ROMBEL'); ?>
        <?php echo $form->hiddenField($model,'KD_ROMBEL', array('value' => $siswaTingkat->KD_ROMBEL)); ?>
        <?php echo $form->error($model,'KD_ROMBEL'); ?>
    </div>
	
    <?php
    $list_pembayaran = CHtml::listData(RPembayaranSiswa::model()->findAll(), 'ID_PEMBAYARAN_SISWA', 'NM_PEMBAYARAN_SISWA');
    ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'ID_PEMBAYARAN_SISWA'); ?>
        <?php echo $form->dropDownList($model,'ID_PEMBAYARAN_SISWA', $list_pembayaran); ?>
        <?php echo $form->error($model,'ID_PEMBAYARAN_SISWA'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'TANGGAL_BAYAR'); ?>
        <?php echo $form->dateField($model,'TANGGAL_BAYAR'); ?>
        <?php echo $form->error($model,'TANGGAL_BAYAR'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'JUMLAH_BAYAR'); ?>
        <?php echo $form->textField($model,'JUMLAH_BAYAR'); ?>
        <?php echo $form->error($model,'JUMLAH_BAYAR'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'KETERANGAN'); ?>
        <?php echo $form->textField($model,'KETERANGAN'); ?>
        <?php echo $form->error($model,'KETERANGAN'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'USERNAME'); ?>
        <?php echo $form->hiddenField($model,'USERNAME', array('value' => 'adm')); ?>
        <?php echo $form->error($model,'USERNAME'); ?>
    </div>
	
	
    <div class="row">
        <?php //echo $form->labelEx($model,'TANGGAL_AKSES'); ?>
        <?php //echo $form->textField($model,'TANGGAL_AKSES'); ?>
        <?php //echo $form->error($model,'TANGGAL_AKSES'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
