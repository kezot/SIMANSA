<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<?php
/* @var $this SiswaAbsensiController */
$NISSiswa = $_GET['siswa'];
$listAbsensi = $this->getAbsen($NISSiswa);
?>

<div id="allformhere"></div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-9 column">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Pembayaran Siswa</a> <span class="divider">/</span>
                        </li>
                        <li>
                            <a href="#">Pilih Kelas</a> <span class="divider">/</span>
                        </li>
                        <li class="active">
                            Pembayaran Siswa
                        </li>
                    </ul>
                    <h3 class="text-center text-info">
                        Pembayaran Siswa: <?php
                        $namaSiswa = Siswa::model()->findByPk($NISSiswa)->NM_SISWA;
                        echo "$namaSiswa"
                        ?>
                    </h3>
                    <button id="create-user">Buat Baru</button>
                    <script>
                        $('#create-user').on('click', function() {
                            $('#allformhere').empty();
                            $.get("<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=pembayaranSiswa/create",
                                    {nis: "<?php echo $NISSiswa; ?>"},
                            function(data, status) {
                                $('#allformhere').append(data);
                                $('#allformhere').dialog("open");
                            });
                            alert("help");
                        });

                        $('#allformhere').dialog({
                            autoOpen: false,
                            //height: 300,
                            //width: 350,
                            modal: true,
                            close: function() {
                                // allFields.val("").removeClass("ui-state-error");
                                document.getElementById('allformhere').innerHTML = "";
                            }
                        });

                    </script>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Tanggal Bayar
                                </th>
                                <th>
                                    Tujuan Pembayaran
                                </th>
                                <th>
                                    Jumlah Pembayaran
                                </th>
                                <th>
                                    Operasi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $NISSiswa = $_GET['siswa'];
                            $listPembayaran = $this->getPembayaran($NISSiswa);
                            for ($index = 0; $index < count($listPembayaran); $index++) {
                                $tanggalPembayaran = $listPembayaran[$index]->TANGGAL_BAYAR;
                                $tujuanPembayaran = RPembayaranSiswa::model()->findByPk($listPembayaran[$index]->ID_PEMBAYARAN_SISWA)->NM_PEMBAYARAN_SISWA;
                                $jumlahPembayaran = (float) $listPembayaran[$index]->JUMLAH_BAYAR;

                                echo '<tr>
                    <td>
                        ' . ($index + 1) . '
                    </td>
                    <td>
                        ' . $tanggalPembayaran . '
                    </td>
                    <td>
                        ' . $tujuanPembayaran . '
                    </td>
                    <td>
                        ' . $jumlahPembayaran . '
                    </td>
                    <td>
                    <button id="button' . ($index + 1) . '">update</button>
                    <script>
                        $("#button' . ($index + 1) . '").on("click", function() {
                            $("#allformhere").empty();
                            $.post("' . Yii::app()->request->baseUrl . '/index.php?r=pembayaranSiswa/update",
                                    {NIS: ' . $listPembayaran[$index]->NIS . ', KD_TAHUN_AJARAN: ' . $listPembayaran[$index]->KD_TAHUN_AJARAN . ', KD_TINGKAT_KELAS: ' . $listPembayaran[$index]->KD_TINGKAT_KELAS . ', KD_PROGRAM_PENGAJARAN: ' . $listPembayaran[$index]->KD_PROGRAM_PENGAJARAN . ', KD_ROMBEL: ' . $listPembayaran[$index]->KD_ROMBEL . ', ID_PEMBAYARAN_SISWA: ' . $listPembayaran[$index]->ID_PEMBAYARAN_SISWA . ', TANGGAL_BAYAR: ' . $listPembayaran[$index]->TANGGAL_BAYAR. '},
                            function(data, status) {
                                $("#allformhere").append(data);
                                $("#allformhere" ).dialog( "open" );
                            });
                            alert("help");
                        });
                    </script>';
                                //$NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR

                                echo '<a href="">Delete
                            </td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-2 column">
                    <h3 class="text-center text-info">
                        Detail Akun
                    </h3><img alt="140x140" src="http://lorempixel.com/140/140/">
                    <dl>
                        <dt>
                        Description lists
                        </dt>
                        <dd>
                            A description list is perfect for defining terms.
                        </dd>
                        <dt>
                        Euismod
                        </dt>
                        <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                        </dd>
                        <dd>
                            Donec id elit non mi porta gravida at eget metus.
                        </dd>
                        <dt>
                        Malesuada porta
                        </dt>
                        <dd>
                            Etiam porta sem malesuada magna mollis euismod.
                        </dd>
                        <dt>
                        Felis euismod semper eget lacinia
                        </dt>
                        <dd>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>