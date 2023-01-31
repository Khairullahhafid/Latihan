<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group <?=form_error ('password') ? 'has-error':null?>">
                  <label for="Password">Password*</label>
                  <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group <?=form_error ('passkonf') ? 'has-error':null?>">
                  <label for="Konfirmasi Password">Konfirmasi Password</label>
                  <input type="password" name="passkonf" value="<?=set_value('passkonf')?>" class="form-control">
                  <?=form_error ('passkonf')?>
                </div>
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="form-group">
                <button type="submit" class="btn btn-succes"> 
                    <i class="fa fa-paper-plane"></i> Simpan
                </button>
                <button type="reset" class="btn btn-warning"> 
                    <i class="fa fa-paper-times"></i> Batal
                </button>
                <button type="submit" class="btn btn-succes"> 
                    <i class="fa fa-paper-undo"></i> Kembali
                </button>
              </div>
            </form>
        