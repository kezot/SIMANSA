<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporNilais'=>array('index'),
	'View'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_KURIKULUM'=>$model->KD_KURIKULUM, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_MATA_PELAJARAN_DIAJARKAN'=>$model->KD_MATA_PELAJARAN_DIAJARKAN),
	'Update',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporNilai', 'url'=>array('index')),
	array('label'=>'Create TNilaiRaporNilai', 'url'=>array('create')),
	array('label'=>'View TNilaiRaporNilai', 'url'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_KURIKULUM'=>$model->KD_KURIKULUM, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_MATA_PELAJARAN_DIAJARKAN'=>$model->KD_MATA_PELAJARAN_DIAJARKAN)),
	array('label'=>'Manage TNilaiRaporNilai', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
