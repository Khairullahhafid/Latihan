<section class="content-header">
    <h1> User
        <small>Data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
    </ol>
</section>

<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>
            <div>
 <!-- search form -->
 <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
            <div class="pull-right">
                <a href="<?= site_url('user/add') ?>" class="btn btn-sm btn-primary">
                    <i class="fa fa-user-plus"></i><b> Tambah</b>
                </a>
            </div>
        <div class="box-body table-reponsive">
            <table class="table table-bordered table-striped table-hover" id="TableAip">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Level</th>
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
                            <td><?= $data->nama_user ?></td>
                            <td><?= $data->password ?></td>
                            <td><?= $data->level == 1 ? "Super User" : "User" ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                <a href="<?= site_url('user/delete/' . $data->user_id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?')"><span class="glyphicon glyphicon-trash"></span> </a>
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