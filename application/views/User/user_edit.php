<section class="content-header">
    <h1>Data user
        <Small>Edit Data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
    </ol>
</section>

<section class="content">
    <div class = "box">
        <div class = "box">
            <div class = "box-header">
                <h3 class = "box-title"></h3>
            </div>

<div class="box-body table-reponsive">
    <div class="row">
        <div class = "col-md-8 col-md-offset-2">
            <?php //echo validation errors()?>
            <form class="" action="" method="post">
                <div class="form-group <?=form_error ('nama') ? 'has-error' :null?>">
                    <label>Nama*</label>
                    <input type = "text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama ?>" class = "form-control">
                    <?=form_error ('nama')?>
                </div>
                <div class="form-group <?=form_error ('nama_user') ? 'has-error' :null?>">
                    <label>User Name*</label><small>(Digunakan Untuk Username Login)</small>
                    <input type = "text" name="nama_user" value="<?=$this->input->post('nama_user') ?? $row->nama_user ?>" class="form-control">
                </div> 
                <div class="form-group <?=form_error ('password') ? 'has-error':null?>">
                  <label for="Password">Password</label>
                  <input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group <?=form_error ('passkonf') ? 'has-error':null?>">
                  <label for="Konfirmasi Password">Konfirmasi Password</label>
                  <input type="password" name="passkonf" value="<?=$this->input->post('passkonf')?>" class="form-control">
                  <?=form_error ('passkonf')?>
                </div>
                <div class="form-group <?=form_error ('level') ? 'has-error' :null?>">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value=""> - Pilih - </Option>
                        <option value="1"> <?=set_value('level') == 1 ? "selected" : null ?>> Super User </Option>
                        <option value="2"> <?=set_value('level') == 2 ? "selected" : null ?>> User </Option>
                    </select>

                    <?form_error ('level')?>
                </div>

            <!-- /.box-body -->
              <div class="form-group">
                <button type="submit" class="btn btn-success"> 
                    <i class="fa fa-paper-plane"></i> Simpan
                </button>
                <button type="reset" class="btn btn-warning"> 
                    <i class="fa fa-paper-times"></i> Batal
                </button>
                <button type="submit" class="btn btn-success"> 
                    <i class="fa fa-paper-undo"></i> Kembali
                </button>
              </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>