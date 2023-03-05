<section class="content-header">
    <h1> Costumer Barang
        <small>Data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Costumer</li>
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
                        <form class="form_horizontal" action="<?=site_url('Costumer/proses')?>" method="post">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Costumer*</label>
                                <div class="col-sm-11">       
                                    <input type="hidden" name="id" value="<?=$row->costumer_id?>">
                                    <input type = "text" name="nama" value="<?=$row->nama?>"" class = "form-control" required>
                                </div>
                                <label class="col-sm-2 control-label">Kelamin</label>
                                <div class="col-sm-11">
                                    <select name="kelamin" value="<?=$row->kelamin?>"" class = "form-control">
                                    <option value="">Pilih</option>
                                    <option value="L" <?=$row-> kelamin == 'L' ? 'selected' : ''?>>Laki-Laki</option>
                                    <option value="P" <?=$row-> kelamin == 'P' ? 'selected' : ''?>>Perempuan</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label">Alamat*</label>
                                <div class="col-sm-11">
                                    <input type = "text" name="alamat" value="<?=$row->alamat?>"" class = "form-control" required>
                                </div>
                                <label class="col-sm-2 control-label">No Telp*</label>
                                <div class="col-sm-11">
                                    <input type = "text" name="telp" value="<?=$row->telp?>"" class = "form-control" required>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name=<?=$page?> class="btn btn-success">
                                    <i class="fa fa-paper-plane"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-warning"> 
                                    <i class="fa fa-paper-times"></i> Batal
                                </button>
                                <a href="<?=site_url('Costumer')?>"> <i class="btn btn-warning">
                                    <i class="fa fa-paper-undo"></i> Kembali </i>
                                </a>
        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>