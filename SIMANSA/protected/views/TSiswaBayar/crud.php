<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<?php
/* @var $this TSiswaBayarController */
$NISSiswa = $_GET['siswa'];
$listBayar = $this->getBayar($NISSiswa);
?>
<div class="row clearfix">
    <div class="col-md9 column">
        <h3 class="text-center text-info">
            Detail Pembayaran: <?php
            $namaSiswa = Siswa::model()->findByPk($NISSiswa)->NM_SISWA;
            echo "$namaSiswa";
            $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NISSiswa, "KD_TAHUN_AJARAN" => $this->tahunAjaran));
            ?>
        </h3>
        <button id="create-user">Buat Baru</button>
        <div id="formAbsensi" >
            <form method="post" action="<?php echo htmlspecialchars(Yii::app()->request->baseUrl . "/index.php?r=TSiswaBayar/create"); ?>">
                <input name ="inputNIS" id="inputNIS" type="hidden" value="<?php echo $NISSiswa; ?>">
                <input name ="inputTahunAjaran" id="inputTahunAjaran" type="hidden" value="<?php echo $this->tahunAjaran; ?>">
                <input name ="inputTingkatKelas" id="inputTingkatKelas" type="hidden" value="<?php echo $siswaTingkat->KD_TINGKAT_KELAS; ?>">
                <input name ="inputRombel" id="inputRombel" type="hidden" value="<?php echo $siswaTingkat->KD_ROMBEL ?>">
                <input name ="inputProgramPengajaran" id="inputProgramPengajaran" type="hidden" value="<?php echo $siswaTingkat->KD_PROGRAM_PENGAJARAN;?>">
                <input type="date" id="inputTanggal" name="inputTanggal">
                <select name="inputID" id="inputKeterangan">
                    <?php
                    echo "<option>Silahkan Pilih</option>";
                    $pilihan = RPembayaranSiswa::model()->findAll(array('order' => 'ID_PEMBAYARAN_SISWA'));

                    for ($index = 0; $index < count($pilihan); $index++){
                        echo "<option value=".$pilihan[$index]->ID_PEMBAYARAN_SISWA.">".$pilihan[$index]->NM_PEMBAYARAN_SISWA."</option>";
                    }
                    ?>
                </select>
                <input name="inputJumlah" id="inputJumlah">
                <input name="inputKeterangan" id="inputKeterangan">\
                <input name="inputUsername" id="inputUsername" type="hidden" value="<?php Yii::app()->user->name ?>">
                <input type="submit" id ="inputAbsen"  value="insert">
            </form>
            <script>

            </script>
        </div>
<!--         <table class="table">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Tanggal Bayar
                    </th>
                    <th>
                        Jumlah Bayar
                    </th>
                    <th>
                        Keterangan
                    </th>
                    <th>
                        Operasi
                    </th>
                </tr>
            </thead>
            <tbody> -->
                <?php
                $NISSiswa = $_GET['siswa'];
                $listBayar = $model->getBayar($NISSiswa);
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'tNilaiRaporNilaigrid',
                    'dataProvider'=> $model->getBayar($NISSiswa),
                    'filter'=>$model,
                    'columns'=>array(
                        'ID_PEMBAYARAN_SISWA',
                        'TANGGAL_BAYAR',
                        'JUMLAH_BAYAR',
                        'KETERANGAN',
                        array(
                            'class'=>'CButtonColumn',
                            'template'=>'{update}{delete}',
                            'buttons'=>array
                            (
                                'update' => array
                                (
                                    'url'=>
                                    'Yii::app()->createUrl("TSiswaBayar/update/", 
                                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "ID_PEMBAYARAN_SISWA"=>$data->ID_PEMBAYARAN_SISWA, "TANGGAL_BAYAR"=>$data->TANGGAL_BAYAR
                                                            ))',
                                ),
                                'delete'=> array
                                (
                                    'url'=>
                                    'Yii::app()->createUrl("TSiswaBayar/delete/", 
                                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "ID_PEMBAYARAN_SISWA"=>$data->ID_PEMBAYARAN_SISWA, "TANGGAL_BAYAR"=>$data->TANGGAL_BAYAR
                                                            ))',
                                ),
                            ),
                        ),
                    ),
                ));
                // for ($index = 0; $index < count($listBayar); $index++) {
                //     $tanggal = $listBayar[$index]->TANGGAL_BAYAR;
                //     $jumlah = $listBayar[$index]->JUMLAH_BAYAR;
                //     $keterangan = $listBayar[$index]->KETERANGAN;
                //     echo '<tr>
                //     <td>
                //         ' . ($index + 1) . '
                //     </td>
                //     <td>
                //         ' . $tanggal . '<input type="hidden" value="">
                //     </td>
                //     <td>
                //         ' . $jumlah . '
                //     </td>
                //     <td>
                //         ' . $keterangan . '
                //     </td>
                //     <td>
                //     <button id="button'.($index + 1).'">update</button>
                //     <script>
                //         $("button'.($index + 1).'").click( function()
                //         {
                //             $("#inputTanggal").attr("value", "'.$tanggal.'");
                //         }
                //         );
                //     </script>
                //     <a href="' . Yii::app()->request->baseUrl . '/index.php?r=TSiswaBayar/delete&nis=' . $NISSiswa . '&tk='.$siswaTingkat->KD_TINGKAT_KELAS.'&pp='.$siswaTingkat->KD_PROGRAM_PENGAJARAN.'&rom='.$siswaTingkat->KD_ROMBEL.'&idBayar='.$listBayar[$index]->ID_PEMBAYARAN_SISWA.'&tanggal=' . $listBayar[$index]->TANGGAL_BAYAR . '"><button>Delete</button>
                //     </td>
                // </tr>';
                ?><!-- 
            </tbody>
        </table> -->

    </div>
    
</div>