<section class="content-header">
    <h1>Data user
        <Small>Tambah Data</small>
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
                <div class="form-group <?=form_error ('nama') ? 'has-eror' :null?>">
                    <label>Nama*</label>
                    <input type = "text" name="nama" value="<?=set_value('nama')?>" class = "form-control">
                    <?=form_error ('nama')?>
                </div>

                <div class="form-group <?=form_error ('nama_user') ? 'has-error' :null?>">
                    <label>User Name*</label><small>(Digunakan Untuk Username Login)</small>
                    <input type = "text" name="nama_user" value="<?=set_value('nama_user')?>" class="form-control">
                </div> 
                
                <div class="form-group <?=form_error ('passkonf') ? 'has-error':null?>">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="passkonf" value="<?=set_value('passkonf')?>" class="form-control">
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

                        <div class="form-group">
                            <buttton type="submit" class = "btn btn success">
                                <i class="fa fa-paper-plane"></i> Simpan
                            </button>
                            <a href="<?=site_url('user')?>"> <i class="btn btn-warning">
                                <i class="fa fa-undo"></i> Kembali </i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>