<?php
/* @var $this RPembayaranSiswaController */

$this->breadcrumbs=array(
	'R Pembayaran Siswa',
);

$this->menu=array(
	array('label'=>'Create Pembayaran Siswa', 'url'=>array('create')),
	array('label'=>'Manage Pembayaran Siswa', 'url'=>array('admin')),
);
?>

<h1>Siswa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
=======
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
>>>>>>> d487b9dc699bcf56014c87e081200d6b40a20cda
