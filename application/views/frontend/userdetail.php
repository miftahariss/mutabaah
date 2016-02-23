<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $nama; ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($mutabaah > 0) :?>
                            <?php $i = 1; ?>
                            <?php foreach($mutabaah as $item): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo date('Y-m-d', $item['date']); ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><a href="" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#myModal<?php echo $item['id']; ?>">Detail</a></td>
                                </tr>
                                <!-- Modal POPUP -->
                                <div class="modal fade" id="myModal<?php echo $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Mutabaah <?php echo date('Y-m-d', $item['date']); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <label>Sholat Jamaah:</label>
                                            <?php
                                                if($item['sholat_jamaah'] == 0){
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                } else {
                                                    echo $item['sholat_jamaah'];
                                                }
                                            ?><br>
                                            <label>Shubuh Jamaah:</label>
                                            <?php
                                                if($item['shubuh_jamaah'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Sholat Dhuha:</label>
                                            <?php
                                                if($item['sholat_dhuha'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Tilawah Quran:</label>
                                            <?php
                                                if($item['tilawah'] == 15){
                                                    echo "=> 3 Lembar";
                                                } elseif($item['tilawah'] == 10){
                                                    echo "2 Lembar";
                                                } elseif($item['tilawah'] == 5) {
                                                    echo "1 Lembar";
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Shodaqoh:</label>
                                            <?php
                                                if($item['shodaqoh'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Qiyamulail</label>
                                            <?php
                                                if($item['qiyamulail'] == 10){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Baca Berita Dunia Islam</label>
                                            <?php
                                                if($item['berita_islam'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Muhasabah</label>
                                            <?php
                                                if($item['muhasabah'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Hafalan Harian</label>
                                            <?php
                                                if($item['hafalan_harian'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Olahraga Harian</label>
                                            <?php
                                                if($item['olahraga_harian'] == 5){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Istigfar 100x</label>
                                            <?php
                                                if($item['istigfar_100'] == 20){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?><br>
                                            <label>Almatsurat</label>
                                            <?php
                                                if($item['almasurat'] == 20){
                                                    echo '<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>';
                                                } else {
                                                    echo '<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>';
                                                }
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $nama; ?> Mutaba'ah Chart <?php echo date('Y'); ?>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="morris-bar-chart"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>