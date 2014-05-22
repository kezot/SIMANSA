<?php
/* @var $this TSiswaBayarController */

$id_kelas = 0;
$nilai = 0;
$selected = '';
$this->breadcrumbs = array(
    'Pembayaran Siswa',
);

if (isset($_POST['selectKelas'])) {
    $id_kelas = (int) $_POST['selectKelas'];
}
?>

<h1>Pembayaran Siswa</h1>

<div class="row clearfix">
    <div class="col-md-9 column">
        <ul class="breadcrumb">
            <li>
                <a href="#">Absensi</a> <span class="divider">/</span>
            </li>
            <li class="active">
                Pilih Kelas
            </li>
        </ul>
        <h3 class="text-center text-info">
            Daftar Absensi
        </h3>
        <div class="btn-group">
            <!--button class="btn btn-default">Pilih Kelas</button> <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li>
                    <a href="">Action</a>
                </li>
                <li class="disabled">
                    <a href="#">Another action</a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#">Something else here</a>
                </li>
            </ul-->
            <form method="post" action="<?php echo htmlspecialchars(Yii::app()->request->baseUrl . '/index.php?r=TSiswaBayar'); ?>">
                <select name="selectKelas" >
                    <?php
                    if ($id_kelas == 0) {
                        $selected = 'selected';
                    }
                    echo '<option ' . $selected . ' value="-1">Silahkan Pilih</option>';
                    //echo '<option>' . $selected . '</option>';
                    $kelas = $this->listKelas();
                    for ($index = 0; $index < count($kelas); $index++) {
                        $nilai = (int) $kelas[$index]->KD_KELAS;
                        //echo '<option>' . $nilai . '</option>';
                        if ($nilai == $id_kelas) {
                            $selected = 'selected';
                            //echo '<option>' . $selected . '</option>';
                        } else {
                            $selected = '';
                            //echo '<option>' . $selected . '</option>';
                        }

                        echo '<option value="' . $kelas[$index]->KD_KELAS . '" ' . $selected . '>' . $kelas[$index]->NAMA_KELAS . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="submit" value="Cari">
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        NIS
                    </th>
                    <th>
                        Nama Siswa
                    </th>

                </tr>
            </thead>
            <tbody>
                <!--tr>
                    <td>
                        1105087881
                    </td>
                    <td>
                        Mario Joel
                    </td>
                </tr-->
                <?php
                if (isset($_POST['selectKelas']) && $id_kelas>0) {
                    $listSiswa = $this->getKelas($id_kelas);
                    for ($index1 = 0; $index1 < count($listSiswa); $index1++) {
                        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $listSiswa[$index1]->NIS, "KD_TAHUN_AJARAN" => $this->tahunAjaran));
                         echo '<tr>'.'<td>'.$listSiswa[$index1]->NIS.'</td>'
                                 . '<td><a href="'.Yii::app()->request->baseUrl.'/index.php?r=TSiswaBayar/crud&siswa='.$siswaTingkat->NIS.'&tahunAjaran='.$this->tahunAjaran.'&tingkatKelas='.$siswaTingkat->KD_TINGKAT_KELAS.
                                 '&programAjar='.$siswaTingkat->KD_PROGRAM_PENGAJARAN.'&kodeRombel='.$siswaTingkat->KD_ROMBEL.'">'.$listSiswa[$index1]->NM_SISWA.'</td></tr>';
                     }
                }
                ?>
            </tbody>
        </table>
    </div>
    
</div>