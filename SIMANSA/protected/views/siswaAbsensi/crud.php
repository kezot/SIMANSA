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
                    <h3 class="text-center text-info">
                        Detail Absensi: <?php
                        $namaSiswa = Siswa::model()->findByPk($NISSiswa)->NM_SISWA;
                        echo "$namaSiswa";
                        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NISSiswa, "KD_TAHUN_AJARAN" => $this->tahunAjaran));
                        ?>
                    </h3>
                    <button id="create-user">Buat Baru</button>
                    <script>
                        $('#create-user').on('click', function() {
                            $('#allformhere').empty();
                            $.get("<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=siswaAbsensi/create",
                                    {nis : "<?php echo $NISSiswa; ?>" },
                            function(data, status) {
                                $('#allformhere').append(data);
                                $('#allformhere' ).dialog( "open" );
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
                                    Tanggal
                                </th>
                                <th>
                                    Kode Periode Belajar
                                </th>
                                <th>
                                    Status Absen
                                </th>
                                <th>
                                    Operasi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            $NISSiswa = $_GET['siswa'];
                            $listAbsensi = $this->getAbsen($NISSiswa);
                            for ($index = 0; $index < count($listAbsensi); $index++) {
                                $tanggal = $listAbsensi[$index]->TANGGAL;
                                $kodePerioderBelajar = $listAbsensi[$index]->KD_PERIODE_BELAJAR;
                                $status = (int) $listAbsensi[$index]->STATUS_ABSEN;
                                if ($status == 1) {
                                    $status = "Sakit";
                                } else if ($status == 2) {
                                    $status = "Izin";
                                } else {
                                    $status = "Alfa";
                                }
                                if ($kodePerioderBelajar == 1) {
                                    $kodePerioderBelajar = "Ganjil";
                                } else {
                                    $kodePerioderBelajar = "Genap";
                                }
                                echo '<tr>
                    <td>
                        ' . ($index + 1) . '
                    </td>
                    <td>
                        ' . $tanggal . '
                    </td>
                    <td>
                        ' . $kodePerioderBelajar . '
                    </td>
                    <td>
                        ' . $status . '
                    </td>
                    <td>
                    <button id="button' . ($index + 1) . '">update</button>
                    <script>
                        $("#button' . ($index + 1) . '").on("click", function() {
                            $("#allformhere").empty();
                            $.get("'.Yii::app()->request->baseUrl.'/index.php?r=siswaAbsensi/update",
                                    {NIS : "'.$listAbsensi[$index]->NIS.'", TANGGAL: "'.$listAbsensi[$index]->TANGGAL.'", KD_TAHUN_AJARAN:"'.$listAbsensi[$index]->KD_TAHUN_AJARAN.'" , KD_TINGKAT_KELAS:"'.$listAbsensi[$index]->KD_TINGKAT_KELAS.'" , KD_PROGRAM_PENGAJARAN:"'.$listAbsensi[$index]->KD_PROGRAM_PENGAJARAN.'", KD_ROMBEL:"'.$listAbsensi[$index]->KD_ROMBEL.'"  },
                            function(data, status) {
                                $("#allformhere").append(data);
                                $("#allformhere" ).dialog( "open" );
                            });
                            alert("help");
                        });
                    </script>';
                     // $NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL
                    if(Yii::app()->user->isAdmin())
                    echo '
                    <a href="' . Yii::app()->request->baseUrl . '/index.php?r=siswaAbsensi/delete&nis=' . $NISSiswa . '&tk=' . $siswaTingkat->KD_TINGKAT_KELAS . '&pp=' . $siswaTingkat->KD_PROGRAM_PENGAJARAN . '&rom=' . $siswaTingkat->KD_ROMBEL . '&tanggal=' . $listAbsensi[$index]->TANGGAL . '"><button>Delete</button>
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