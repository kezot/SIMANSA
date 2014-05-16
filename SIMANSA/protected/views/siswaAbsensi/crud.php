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
<div class="row clearfix">
    <div class="col-md9 column">
        <h3 class="text-center text-info">
            Detail Absensi: <?php
            $namaSiswa = Siswa::model()->findByPk($NISSiswa)->NM_SISWA;
            echo "$namaSiswa";
            $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NISSiswa, "KD_TAHUN_AJARAN" => $this->tahunAjaran));
            ?>
        </h3>
        <button id="create-user">Buat Baru</button>
        <div id="formAbsensi" >
            <form method="post" action="<?php echo htmlspecialchars(Yii::app()->request->baseUrl . "/index.php?r=siswaAbsensi/create"); ?>">
                <input name ="inputNIS" id="inputNIS" type="hidden" value="<?php echo $NISSiswa; ?>">
                <input name ="inputTahunAjaran" id="inputTahunAjaran" type="hidden" value="<?php echo $this->tahunAjaran; ?>">
                <input name ="inputTingkatKelas" id="inputTingkatKelas" type="hidden" value="<?php echo $siswaTingkat->KD_TINGKAT_KELAS; ?>">
                <input name ="inputProgramPengajaran" id="inputProgramPengajaran" type="hidden" value="<?php echo $siswaTingkat->KD_PROGRAM_PENGAJARAN;?>">
                <input name ="inputRombel" id="inputRombel" type="hidden" value="<?php echo $siswaTingkat->KD_ROMBEL ?>">
                <input type="date" id="inputTanggal" name="inputTanggal">
                <select name="inputSemester" id="inputSemester">
                    <option>Silahkan Pilih</option>
                    <option value="1">Ganjil</option>
                    <option value="2">Genap</option>
                </select>
                <select name="inputStatus" id="inputStatus">
                    <option>Silahkan Pilih</option>
                    <option value="1">Alfa</option>
                    <option value="2">Izin</option>
                    <option value="3">Sakit</option>
                </select>
                <input name="inputUsername" id="inputUsername" type="hidden" value="<?php Yii::app()->user->name ?>">
                <input type="submit" id ="inputAbsen"  value="insert">
            </form>
            <script>

            </script>
        </div>
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
                <!--tr>
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Default
                    </td>
                </tr>
                <tr class="active">
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Approved
                    </td>
                </tr>
                <tr class="success">
                    <td>
                        2
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        02/04/2012
                    </td>
                    <td>
                        Declined
                    </td>
                </tr>
                <tr class="warning">
                    <td>
                        3
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        03/04/2012
                    </td>
                    <td>
                        Pending
                    </td>
                </tr>
                <tr class="danger">
                    <td>
                        4
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        04/04/2012
                    </td>
                    <td>
                        Call in to confirm
                    </td>
                </tr-->
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
                        ' . $tanggal . '<input type="hidden" value="">
                    </td>
                    <td>
                        ' . $kodePerioderBelajar . '
                    </td>
                    <td>
                        ' . $status . '
                    </td>
                    <td>
                    <button id="button'.($index + 1).'">update</button>
                    <script>
                        $("button'.($index + 1).'").click( function()
                        {
                            $("#inputTanggal").attr("value", "'.$tanggal.'");
                        }
                        );
                    </script>
                    <a href="' . Yii::app()->request->baseUrl . '/index.php?r=siswaAbsensi/delete&nis=' . $NISSiswa . '&tk='.$siswaTingkat->KD_TINGKAT_KELAS.'&pp='.$siswaTingkat->KD_PROGRAM_PENGAJARAN.'&rom='.$siswaTingkat->KD_ROMBEL.'&tanggal=' . $listAbsensi[$index]->TANGGAL . '"><button>Delete</button>
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