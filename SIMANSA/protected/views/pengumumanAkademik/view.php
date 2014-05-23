<?php
/* @var $this PengumumanAkademikController */
/* @var $model PengumumanAkademik */

$this->breadcrumbs=array(
	'Pengumuman Akademiks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PengumumanAkademik', 'url'=>array('index')),
	array('label'=>'Create PengumumanAkademik', 'url'=>array('create')),
	array('label'=>'Update PengumumanAkademik', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PengumumanAkademik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PengumumanAkademik', 'url'=>array('admin')),
);
?>

<h1>View PengumumanAkademik #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tanggal',
		'konten',
		'judul',
	),
)); ?>
