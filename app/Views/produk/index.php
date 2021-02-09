<!-- Download -->
<?php foreach ($produk as $p) : ?>
    <div id="download" class="download">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><?= $p['nama']; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="first-slide" src="<?= base_url('images/cengkeh1.jfif') ?>" alt="First slide">
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="second-slide" src="<?= base_url('images/cengkeh2.jpg') ?>" alt="Second slide">
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a> <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="titlepage">
                        <p style="text-align: left;"><?= $p['deskripsi']; ?></span>
                            <br><br>
                        <p style="text-align: left;">Our specification of quality cloves :</p>
                        <br>
                        <table id="customers">
                            <tr>
                                <th style="text-align: center;">Spesification</th>
                                <th style="text-align: center;">Value</th>
                            </tr>
                            <tr>
                                <td>Quality</td>
                                <td><?= $p['quality']; ?>/td>
                            </tr>
                            <tr>
                                <td>Variety</td>
                                <td><?= $p['Variety']; ?></td>
                            </tr>
                            <tr>
                                <td>Harvest</td>
                                <td><?= $p['Harvest']; ?></td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td><?= $p['Color']; ?></td>
                            </tr>
                            <tr>
                                <td>Origin</td>
                                <td><?= $p['Origin']; ?></td>
                            </tr>
                            <tr>
                                <td>Smell</td>
                                <td><?= $p['Smell']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="bar-chart">
                            <!-- legend label -->
                            <!-- bar -->
                            <div class="chart clearfix">
                                <span class="title">Mouisture</span>
                                <div class="item">
                                    <div class="bar">
                                        <span class="persen">5%</span>

                                        <div class="progress" data-persen="<?= $p['Mouisture']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <span class="title">Stems</span>
                                <div class="item">
                                    <div class="bar">
                                        <span class="persen">1%</span>

                                        <div class="progress" data-persen="<?= $p['Stems']; ?>">

                                        </div>
                                    </div>
                                </div>

                                <span class="title">Baby Cloves</span>
                                <div class="item">
                                    <div class="bar">
                                        <span class="persen">1%</span>

                                        <div class="progress" data-persen="<?= $p['Baby Cloves']; ?>">

                                        </div>
                                    </div>
                                </div>
                                <span class="title">Headless Cloves</span>
                                <div class="item">
                                    <div class="bar">
                                        <span class="persen">3%</span>

                                        <div class="progress" data-persen="<?= $p['Headless Cloves']; ?>">

                                        </div>
                                    </div>
                                </div>
                                <span class="title">Odd Matters</span>
                                <div class="item">
                                    <div class="bar">
                                        <span class="persen">0%</span>

                                        <div class="progress" data-persen="<?= $p['Odd Matters']; ?>">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- end Download -->