<?php
/* @var $this SiswaAbsensiController */

$id_kelas = 0;
$nilai = 0;
$selected = '';
$this->breadcrumbs = array(
    'Jadwal Mata Ajar',
    
);

if (isset($_POST['selectKelas'])) {
    $id_kelas = (int) $_POST['selectKelas'];
}
if(isset($_GET['id_kelas'])){
    $id_kelas = (int) $_GET['id_kelas'];
}
?>

<div id="allformhere"></div>


<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-9 column">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Jadwal Mata Ajar</a> <span class="divider">/</span>
                        </li>
                        <li class="active">
                            Pilih Kelas
                        </li>
                    </ul>
                    <h3 class="text-center text-info">
                        Buat Jadwal Mata Ajar:
                        <?php
                        $jadwal = JadwalMataAjar::model()->findAll();
                        ?>
                    </h3>
                    <div class="btn-group">
                        <form method="post" action="<?php echo htmlspecialchars(Yii::app()->request->baseUrl . '/index.php?r=jadwalMataAjar'); ?>">
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

                        <button id="create-jadwal">Buat Baru</button>
                        <script>
                            $('#create-jadwal').on('click', function() {
                                $('#allformhere').empty();
                                $.get("<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=jadwalMataAjar/create",
                                    {NAMA_KELAS : "<?php echo $id_kelas; ?>" },
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
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Hari
                                </th>
                                <th>
                                    Jam Ke
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
                            
                            <?php
                            if ((isset($_POST['selectKelas']) || isset($_GET['id_kelas'])) && $id_kelas > 0) {
                            $listJadwal = $this->getJadwal($id_kelas);
                            $index=0;
                            foreach($listJadwal as $jadwal) {
                                $kelas = $jadwal->NAMA_KELAS;
                                $hari = $jadwal->HARI;
                                $jam = $jadwal->JAM;
                                $mapel = $jadwal->MATA_PELAJARAN;
                                echo '<tr>
                                <td>
                                    ' . ($index + 1) . '
                                </td>
                                <td>
                                    ' . $hari . '
                                </td>
                                <td>
                                    ' . $jam . '
                                </td>
                                <td>
                                    ' . $mapel . '
                                </td>
                                <td>
                                <button id="button' . ($index + 1) . '">update</button>
                                <script>
                                    $("#button' . ($index + 1) . '").on("click", function() {
                                        $("#allformhere").empty();
                                        $.get("'.Yii::app()->request->baseUrl.'/index.php?r=jadwalMataAjar/update",
                                                {NAMA_KELAS : "'.$kelas.'", HARI: "'.$hari.'", JAM:"'.$jam.'"  },
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
                                <a href="' . Yii::app()->request->baseUrl . '/index.php?r=jadwalMataAjar/delete&NAMA_KELAS=' . $kelas . '&HARI=' . $hari . '&JAM=' . $jam . '"><button>Delete</button>
                                </td>
                                </tr>';
                                $index++;
                                        }
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
