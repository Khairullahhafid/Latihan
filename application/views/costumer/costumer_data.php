<section class="content-header">
    <h1> Costumer
        <small>Data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">costumer</li>
    </ol>
</section>

<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>
            <div>
      <!-- /.search form -->
            <div class="pull-right">
                <a href="<?= site_url('costumer/add') ?>" class="btn btn-sm btn-primary">
                    <i class="fa fa-costumer-plus"></i>
                    <b> Tambah</b>
                </a>
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=db_pos&table=tb_costumer&pos=0" class="btn btn-sm btn-warning">
                    <i class="glyphicon glyphicon-book"></i> 
                    <b>DB Show</b>
                </a>
            </div>
        <div class="box-body table-reponsive">
            <table class="table table-bordered table-striped table-hover" id="TableAip">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama costumer</th>
                        <th>Kelamin</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Created</th>
                        <th>Update</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row->result() as $key => $data) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->kelamin ?></td>
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->telp ?></td>
                            <td><?= $data->created ?></td>
                            <td><?= $data->updated ?></td>
                            <td class="text-center" width="160px">
                                <form action="<?=site_url('costumer/del')?>" method="post">
                                <a href="<?= site_url('costumer/edit/' . $data->costumer_id) ?>" class="btn btn-xs btn-warning">
                                    <i class="glyphicon glyphicon-pencil"></i>   Perbaharui    
                                </a>
                                    <input type="hidden" name="costumer_id" value="<?=$data->costumer_id?>">
                                    <button onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                                <!-- <a href="<?= site_url('costumer/delete/' . $data->costumer_idss) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?')"><span class="glyphicon glyphicon-trash"></span> </a> -->
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>