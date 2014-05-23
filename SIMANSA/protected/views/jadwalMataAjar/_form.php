<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
    
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'NAMA_KELAS', array('value' => $kelas)); ?>
		<?php echo $form->error($model,'NAMA_KELAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARI'); ?>
		<?php echo $form->dropDownList($model,'HARI', array(1 => 'Senin', 2 => 'Selasa', 3 => 'Rabu', 4=>'Kamis', 5 => "Jum'at" )); ?>
		<?php echo $form->error($model,'HARI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JAM' ); ?>
		<?php echo $form->dropDownList($model,'JAM', array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10')); ?>
		<?php echo $form->error($model,'JAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MATA_PELAJARAN'); ?>
		<?php
			$mapel_list = CHtml::listData(RMataPelajaranDiajarkan::model()->findAll(), 'NM_MATA_PELAJARAN_DIAJARKAN', 'NM_MATA_PELAJARAN_DIAJARKAN');


			
			$options = array(
			        'tabindex' => '0',
			        'empty' => '(not set)',
			);
		?>
		<?php echo $form->dropDownList($model,'MATA_PELAJARAN', $mapel_list, $options); ?>
		<?php echo $form->error($model,'MATA_PELAJARAN'); ?>
	</div>

	<div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->