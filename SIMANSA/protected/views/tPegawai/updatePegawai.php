<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Tpegawais'=>array('index'),
	$model->NIP=>array('view','id'=>$model->NIP),
	'Update',
);

$this->menu=array(
	array('label'=>'List TPegawai', 'url'=>array('index')),
	array('label'=>'Create TPegawai', 'url'=>array('create')),
	array('label'=>'View TPegawai', 'url'=>array('view', 'id'=>$model->NIP)),
	array('label'=>'Manage TPegawai', 'url'=>array('admin')),
);
?>

<h1>Update TPegawai <?php echo $model->NIP; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>