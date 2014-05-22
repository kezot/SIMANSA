<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
    'Daftar Siswa'=>array('index'),
    'Lihat Absensi',
);
?>

<h1>Lihat Absensi</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'id' => 'lihatAbsensiGrid',
    'columns' => array(
        'TANGGAL',
        array(
            'name' => 'STATUS_ABSEN',
            'type' => 'raw',
            'header' => 'Status Absen',
            'value'=>function($data){
                if ($data->STATUS_ABSEN  == 1){
                    $class = 'Sakit';
                }
                else if ($data->STATUS_ABSEN  == 2){
                    $class = 'Izin';
                }
                else{
                    $class = 'Alfa';
                }
                return $class;
            },
        ),
        'KETERANGAN',
    )
)); ?>