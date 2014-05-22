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
        array(
            'header' => 'Pembayaran',
            'name' => 'ID_PEMBAYARAN_SISWA',
            'type' => 'raw',
            'value' => '($data->ID_PEMBAYARAN_SISWA == "") ? "" : $data->iDPEMBAYARANSISWA->NM_PEMBAYARAN_SISWA',
            //'value' => $data->TNilaiRaporNilai->KD_MATA_PELAJARAN_DIAJARKAN,
        ),
        'TANGGAL_BAYAR',
        'JUMLAH_BAYAR',
        'KETERANGAN',
    )
));
?>
