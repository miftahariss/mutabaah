<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HAMASAH - Mutabaah</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <?php if(isset($error)){ echo $error; } ?>
                        <form role="form" method="POST" novalidate>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo form_error('nama', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="Nama" name="nama" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('tgl_lahir', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="yyyy-mm-dd" name="tgl_lahir" type="text" id="birthdate" readonly autofocus required>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('jk', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <p>
                                      <input name="jk" type="radio" id="test1" value="M" required/>
                                      <label for="test1">Laki - Laki</label>
                                      <input name="jk" type="radio" id="test2" value="F" required/>
                                      <label for="test2">Perempuan</label>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('kota', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="Kota" name="kota" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                <?php echo form_error('provinsi', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                  <?php
                                  $propinsi = array("Aceh", "Bali", "Banten", "Bengkulu", "Gorontalo", "Jakarta", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kalimantan Utara", "Kepulauan Bangka Belitung", "Kepulauan Riau", "Lampung", "Maluku", "Maluku Utara", "Nusa Tenggara Barat", "Nusa Tenggara Timur", "Papua", "Papua Barat", "Riau", "Sulawesi Barat", "Sulawesi Selatan", "Sulawesi Tengah", "Sulawesi Tenggara", "Sulawesi Utara", "Sumatera Barat", "Sumatera Selatan", "Sumatera Utara", "Yogyakarta");
                                  sort($propinsi);
                                  ?>
                                  <select class="form-control" name="provinsi" required>
                                      <option value="" disabled selected>Pilih Provinsi</option>
                                      <?php for ($i = 0; $i < count($propinsi); $i++) { ?>
                                          <option value="<?= $propinsi[$i] ?>"><?= $propinsi[$i] ?></option>
                                      <?php } ?>
                                  </select> 
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('telp', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="No. Hp" name="telp" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('alamat', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <textarea class="form-control" placeholder="Alamat" name="alamat" required required></textarea>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('email', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('password', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('confirmpassword', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'); ?>
                                    <input class="form-control" placeholder="Ulangi Password" name="confirmpassword" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success btn-block">Sign Up</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#birthdate").datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                yearRange: "-50:+0",
            });
        });
    </script>

</body>

</html>
