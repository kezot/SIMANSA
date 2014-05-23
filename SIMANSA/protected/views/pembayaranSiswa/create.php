<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'PembayaranSiswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PembayaranSiswas', 'url'=>array('index')),
    array('label'=>'Manage PembayaranSiswa', 'url'=>array('admin')),
);
?>

<h1>Create PembayaranSiswa</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'siswaTingkat'=> $siswaTingkat)); ?>
