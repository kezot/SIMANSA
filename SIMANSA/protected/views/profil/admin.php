<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$this->breadcrumbs=array(
	'Tsiswas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TSiswa', 'url'=>array('index')),
	array('label'=>'Create TSiswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tsiswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tsiswas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tsiswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NIS',
		'NO_CALSIS',
		'NM_SISWA',
		'NM_PANGGILAN',
		'KD_JENIS_KELAMIN',
		'KOTA_LAHIR',
		/*
		'TANGGAL_LAHIR',
		'ALAMAT',
		'RT',
		'RW',
		'KD_POS',
		'KD_GOL_DARAH',
		'KD_AGAMA',
		'NO_TELP',
		'NO_HP',
		'STATUS_SISWA',
		'KEWARGANEGARAAN',
		'ANAK_KE',
		'JUMLAH_KANDUNG',
		'JUMLAH_TIRI',
		'JUMLAH_ANGKAT',
		'STATUS_YATIM_PIATU',
		'BAHASA',
		'TINGGAL_DI',
		'JARAK_SEK',
		'KELAINAN_JASMANI',
		'BERAT_BADAN',
		'TINGGI_BADAN',
		'ASAL_SMP',
		'NO_STL_SMP',
		'TANGGAL_STL_SMP',
		'LAMA_BELAJAR_SMP',
		'ASAL_SMA',
		'KD_TINGKAT_KELAS',
		'KD_PROGRAM_PENGAJARAN',
		'DITERIMA_TANGGAL',
		'PINDAH_ALASAN',
		'HUBUNGI',
		'TANGGUNG_BIAYA',
		'TEMP_AKSES_NET',
		'FREK_AKSES_NET',
		'FREK_REKRE_KEL',
		'NILAI',
		'NO_INDUK',
		'DIR_FOTO',
		'STATUS_ENTRI',
		'KD_JENIS_KETUNAAN',
		'KD_STATUS_DALAM_KELUARGA',
		'TANGGAL_SKHUN_SMP',
		'NO_SKHUN_SMP',
		'NISN',
		'NIK',
		'JENIS_TINGGAL',
		'KELURAHAN_DESA',
		'KECAMATAN',
		'KABUPATEN_KOTA',
		'PROPINSI',
		'KD_AREA',
		'KD_JARAK_SEK',
		'ALAT_TRANSPORTASI',
		'EMAIL_PRIBADI',
		'USERNAME',
		'TANGGAL_AKSES',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
