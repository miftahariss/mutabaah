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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($users > 0) :?>
                            <?php $i = 1; ?>
                            <?php foreach($users as $item): ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['email']; ?></td>
                                    <td><?php echo $item['gender']; ?></td>
                                    <td class="center"><?php echo $item['telp']; ?></td>
                                    <td class="center"><?php echo $item['alamat']; ?></td>
                                    <td><a href="<?php echo base_url(); ?>user/detail/<?php echo $item['id']; ?>" class="btn btn-outline btn-primary">Detail</a></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>