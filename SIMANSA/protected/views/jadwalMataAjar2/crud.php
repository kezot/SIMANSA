<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<?php
/* @var $this JadwalMataAjar2Controller */
?>
<div class="row clearfix">
    <div class="col-md9 column">
        <h3 class="text-center text-info">
            Detail Absensi: <?php 
            $namaKelas = $_GET['kelas'];
            echo "$namaKelas"?>
        </h3>
        <div id="formForm">
            <form method="post" action="<?php echo  ?>">
                <input type="number" name="inputJam">
                <input type="text" name="inputMataPelajaran">
                <input type="submit" value="insert">
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    
                    <th>
                        Hari
                    </th>
                    <th>
                        Jam
                    </th>
                    <th>
                        Mata Pelajaran
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
                    $kelas = $_GET["kelas"];
                    $listJadwalMataAjar = $this->getJadwalMataAjar($namaKelas);
                    for ($index = 0; $index < count($listJadwalMataAjar); $index++) {
                        $hari = $listJadwalMataAjar[$index]->HARI;
                        $waktu = $listJadwalMataAjar[$index]->JAM;
                        $mataPelajaran = $listJadwalMataAjar[$index]->MATA_PELAJARAN;
                        
                        echo 
                        '<tr><td>'.$hari.'</td><td>'.$waktu.'</td><td>'.$mataPelajaran.'</td><tr>'
                        ;
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