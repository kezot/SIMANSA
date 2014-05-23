<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->



<div id="allformhere"></div>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-9 column">
                    <h3 class="text-center text-info">
                        Buat Pengumuman Akademik:
                        <?php
                        $pengumuman = PengumumanAkademik::model()->findAll();
                        ?>
                    </h3>
                    <button id="create-pengumuman">Buat Baru</button>
                    <script>
                        $('#create-pengumuman').on('click', function() {
                            $('#allformhere').empty();
                            $.post("<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=pengumumanAkademik/create",
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

                    <div id="formAbsensi" >
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
                                    ID
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Judul
                                </th>
                                <th>
                                    Konten
                                </th>
                                <th>
                                    Operasi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            $listPengumuman = $this->getPengumuman();
                            $index=0;
                            foreach($listPengumuman as $pengumuman) {
                                $id = $pengumuman->id;
                                $tanggal = $pengumuman->tanggal;
                                $konten = $pengumuman->konten;
                                $judul = $pengumuman->judul;
                                echo '<tr>
                                <td>
                                    ' . ($index + 1) . '
                                </td>
                                <td>
                                    ' . $id . '
                                </td>
                                <td>
                                    ' . $tanggal . '
                                </td>
                                <td>
                                    ' . $judul . '
                                </td>
                                <td>
                                    ' . $konten . '
                                </td>
                                <td>
                                <button id="button' . ($index + 1) . '">update</button>
                                <script>
                                    $("#button' . ($index + 1) . '").on("click", function() {
                                        $("#allformhere").empty();
                                        $.get("'.Yii::app()->request->baseUrl.'/index.php?r=pengumumanAkademik/update",
                                                {id : "'.$id.'"  },
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
                                <a href="' . Yii::app()->request->baseUrl . '/index.php?r=pengumumanAkademik/delete&id=' . $id . '"><button>Delete</button>
                                </td>
                                </tr>';
                                $index++;
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