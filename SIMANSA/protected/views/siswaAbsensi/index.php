<?php
/* @var $this SiswaAbsensiController */

$this->breadcrumbs = array(
    'Siswa Absensi',
);
?>

<h1>Siswa Absensi</h1>

<div class="row clearfix">
    <div class="col-md-6 column">
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
            <select name="selectKelas">
                <option selected>Silahkan Pilih</option>
                <?php
                $kelas = $this->listKelas();
                for ($index = 0; $index < count($kelas); $index++) {
                    echo '<option value="' . $kelas[$index]->KD_KELAS . '">' . $kelas[$index]->NAMA_KELAS . '</option>';
                }
                ?>
            </select>
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
                $id_kelas;
                if(isset($_POST['selectKelas'])){
                    $id_kelas = $_POST['selectKelas'];
                    $listSiswa = $this->getKelas($id_kelas);
                }    
               
                
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-6 column">
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