<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporKepribadians'=>array('index'),
	'View'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_KEPRIBADIAN'=>$model->KD_KEPRIBADIAN),
	'Update',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporKepribadian', 'url'=>array('index')),
	array('label'=>'Create TNilaiRaporKepribadian', 'url'=>array('create')),
	array('label'=>'View TNilaiRaporKepribadian', 'url'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_KEPRIBADIAN'=>$model->KD_KEPRIBADIAN)),
	array('label'=>'Manage TNilaiRaporKepribadian', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
