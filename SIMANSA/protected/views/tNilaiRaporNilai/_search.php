<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'NIS'); ?>
		<?php echo $form->textField($model,'NIS'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_TAHUN_AJARAN'); ?>
		<?php echo $form->textField($model,'KD_TAHUN_AJARAN'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_TINGKAT_KELAS'); ?>
		<?php echo $form->textField($model,'KD_TINGKAT_KELAS'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_PROGRAM_PENGAJARAN'); ?>
		<?php echo $form->textField($model,'KD_PROGRAM_PENGAJARAN'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_ROMBEL'); ?>
		<?php echo $form->textField($model,'KD_ROMBEL'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_KURIKULUM'); ?>
		<?php echo $form->textField($model,'KD_KURIKULUM'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_PERIODE_BELAJAR'); ?>
		<?php echo $form->textField($model,'KD_PERIODE_BELAJAR'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KD_MATA_PELAJARAN_DIAJARKAN'); ?>
		<?php echo $form->textField($model,'KD_MATA_PELAJARAN_DIAJARKAN'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'SKBM'); ?>
		<?php echo $form->textField($model,'SKBM'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'NILAI_KOGNITIF'); ?>
		<?php echo $form->textField($model,'NILAI_KOGNITIF'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'NILAI_PSIKOMOTOR'); ?>
		<?php echo $form->textField($model,'NILAI_PSIKOMOTOR'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'ID_NILAI_AFEKTIF'); ?>
		<?php echo $form->textField($model,'ID_NILAI_AFEKTIF'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'KETERANGAN'); ?>
		<?php echo $form->textField($model,'KETERANGAN'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME'); ?>
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
