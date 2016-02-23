<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Entry Mutaba'ah</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Mutaba'ah
            </div>
            <?php $danger = $this->session->flashdata('danger'); ?>
            <?php if($this->session->flashdata('msg')): ?>
                <div class="alert alert-<?php if($danger){ echo $danger; } else { echo "success"; } ?> alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            <?php endif; ?>
            <div class="panel-body">
                <div class="row">
                    <form role="form" method="POST">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal:<input type="search" name="date" class="form-control input-sm" aria-controls="dataTables-example" id="birthdate" readonly required></label>
                            </div>
                            <div class="form-group">
                                <label>1. Sholat Jamaah</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sholat_jamaah[0]" value="2">Shubuh
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sholat_jamaah[1]" value="2">Dzuhur
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sholat_jamaah[2]" value="2">Ashar
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sholat_jamaah[3]" value="2">Maghrib
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sholat_jamaah[4]" value="2">Isya
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="sholat_jamaah[5]" value="0">None
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>2. Sholat Shubuh Jamaah</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shubuh_jamaah" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shubuh_jamaah" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>3. Sholat Dhuha</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sholat_dhuha" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sholat_dhuha" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>4. Tilawah Quran</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tilawah" value="15" required>=> 3 Lembar
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tilawah" value="10" required>2 Lembar
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tilawah" value="5" required>1 Lembar
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="tilawah" value="0" required>None
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>5. Shodaqoh</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shodaqoh" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shodaqoh" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>6. Qiyamulail</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="qiyamulail" value="10" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="qiyamulail" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>7. Baca Berita Dunia Islam</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="berita_islam" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="berita_islam" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>8. Muhasabah</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="muhasabah" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="muhasabah" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>9. Hafalan Harian</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="hafalan_harian" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="hafalan_harian" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>10. Olahraga Harian</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="olahraga_harian" value="5" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="olahraga_harian" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>11. Istigfar 100x</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="istigfar_100" value="20" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="istigfar_100" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>12. Almasurat</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="almasurat" value="20" required>Ya
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="almasurat" value="0" required>Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->