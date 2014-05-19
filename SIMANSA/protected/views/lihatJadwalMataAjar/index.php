<?php
/* @var $this LihatJadwalMataAjarController */

$this->breadcrumbs=array(
	'Lihat Jadwal Mata Ajar',
);
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-9 column">
                    <h3 class="text-center text-info">
                        Jadwal Mata Ajar
                    </h3>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Senin</td>
                                <td>Selasa</td>
                                <td>Rabu</td>
                                <td>Kamis</td>
                                <td>Jumat</td>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                for ($index = 0; $index < 10; $index++) {
                    echo "<tr>";
                    echo '<td>' . ($index + 1) . '</td>';
                    for ($index1 = 0; $index1 < 5; $index1++) {
                        $mataAjar = $this->getJadwalMataAjar(($index1 + 1), ($index + 1), "X-IA-1");
                        echo "<td>";
                        if ($mataAjar != NULL)
                            echo $mataAjar->MATA_PELAJARAN;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
                        </tbody>

                    </table>
                </div>
                <div class="col-md-2 column">
                    <h3 class="text-center text-info">
                        Profil Akun
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

