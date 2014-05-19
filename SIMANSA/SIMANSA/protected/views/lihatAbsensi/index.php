<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);
?>

<h1>Lihat Absensi</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'id' => 'lihatAbsensiGrid',
    'columns' => array(
        'TANGGAL',
        'STATUS_ABSEN',
        'KETERANGAN',
    )
)); ?>