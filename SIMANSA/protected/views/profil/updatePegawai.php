<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Tpegawais'=>array('index'),
	$model->NM_PEGAWAI=>array('view','id'=>$model->NIP),
	'Update',
);
?>

<h1>Update Profil:  <?php echo $model->NM_PEGAWAI; ?></h1>

<?php $this->renderPartial('_formPegawai', array('model'=>$model)); ?>