<section class="content-header">
    <h1> Ketegori Barang
        <small>Data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
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
                        <form class="form_horizontal" action="<?=site_url('kategori/proses')?>" method="post">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Kategori</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?=$row->kategori_id?>">
                                    <input type = "text" name="nama" value="<?=$row->nama?>"" class = "form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10>
                                <button type="submit" name=<?=$page?> class="btn btn-success"> 
                                        <i class="fa fa-paper-plane"></i> Simpan
                                    </button>
                                    <button type="reset" class="btn btn-warning"> 
                                        <i class="fa fa-paper-times"></i> Batal
                                    </button>
                                    <a href="<?=site_url('kategori')?>"> <i class="btn btn-warning">
                                        <i class="fa fa-paper-undo"></i> Kembali </i>
                                    </a>
                                    <!-- <button type="submit" class="btn btn-success"> 
                                        <i class="fa fa-paper-undo"></i> Kembali
                                    </button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>