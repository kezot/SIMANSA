<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);
?>

<h1>Lihat Pembayaran</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'id' => 'lihatPembayaranGrid',
    'columns' => array(
        'ID_PEMBAYARAN_SISWA',
        'TANGGAL_BAYAR',
        'JUMLAH_BAYAR',
        'KETERANGAN',
    )
));
?>
)); ?>
