<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$profil = $this->getUser();

$this->breadcrumbs=array(
	'Tsiswas'=>array('index'),
	$profil[1]=>array('view','id'=>$profil[1]),
	'Ubah Password',
);
?>

<h1>Ubah Password: </h1>
<h1><?php echo $profil[1]; ?></h1>

<?php $this->renderPartial('_formChangePassword', array('model'=>$model)); ?>