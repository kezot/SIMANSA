<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRapors'=>array('index'),
	'View'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR),
	'Update',
);

$this->menu=array(
	array('label'=>'List TNilaiRapor', 'url'=>array('index')),
	array('label'=>'Create TNilaiRapor', 'url'=>array('create')),
	array('label'=>'View TNilaiRapor', 'url'=>array('view', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR)),
	array('label'=>'Manage TNilaiRapor', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
