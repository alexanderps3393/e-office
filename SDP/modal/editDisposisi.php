<?php

    $id_disposisi = $_GET['id'];
    $sql = mysqli_query($koneksi,"SELECT * FROM tb_disposisi where No_urut_disposisi='$id_disposisi'");
    $row=  mysqli_fetch_array($sql);
    $sql2 = mysqli_query($koneksi,"SELECT * FROM tb_disposisi d,tb_bagian b WHERE d.Kode_bagian=b.Kode_bagian AND d.No_urut_disposisi='$id_disposisi'");
    $row2= mysqli_fetch_array($sql2);
?>
<!-- form Edit Surat -->
        <div id="editSuratMasuk" class=" col-xs-12" >
           <div class="box box-danger">
             
              <div class="box-header">
                <div class="col-xs-12">
                   <div class="col-sm-12 control-label" >
                    <br>
              <form id="form_tambahDisposisi"  action="" method="post" enctype="multipart/form-data">
                    
                  </div>
                </div>
              </div>
              <div class="box-body">
                  <div class="col-xs-12 form-group">
                     <div class="col-sm-12 control-label" >
                        <div  class="alert " style="text-align: center ;background-color:#e6e9ef;" >
                            <h4><strong>LIHAT DISPOSISI SURAT MASUK</strong></h4> 
                        </div>
                     </div>
                  </div>
               
                  <div class="col-xs-12 form-group">
                        <label class="col-sm-3 control-label" style="text-align:right;">Kode</label>
                         <div class="col-sm-7 control-label" style="text-align:left;">
                           <input id='disposisi-kode' class='form-control' name='disposisi-kode' value="<?php echo $row['Kode_surat']; ?>" type='text' readonly />
                         </div>
                  </div>
                  <div class="col-xs-12 form-group">
                        <label class="col-sm-3 control-label" style="text-align:right;">Nomor Urut</label>
                         <div class="col-sm-7 control-label" style="text-align:left;">
                           <input id='disposisi-NU' class='form-control' name='disposisi-NU' value="<?php echo $row['No_urut_disposisi']; ?>"  type='text' readonly/>
                         </div>
                  </div>
                  <div class="col-xs-12 form-group">
                        <label class="col-sm-3 control-label" style="text-align:right;">Nomor Surat Masuk</label>
                         <div class="col-sm-7 control-label" style="text-align:left;">
                           <input id='disposisi-Nomor_surat' class='form-control' name='disposisi-Nomor_surat' value="<?php echo $row['Nomor_surat_masuk']; ?>" type='text' readonly />
                         </div>
                  </div>
                   <div class="col-xs-12 form-group">
                       <label class="col-sm-3 control-label" style="text-align:right;">Tanggal Surat</label>
                       <div class="col-sm-7 control-label" style="text-align:left;">
                          <input id='disposisi-Tanggal_surat' class='form-control' name='disposisi-Tanggal_surat' type='date' value="<?php echo $row['Tanggal_surat']; ?>" readonly /> 
                       </div>
                  </div>
                  <div class="col-xs-12 form-group">
                        <label class="col-sm-3 control-label" style="text-align:right;">Asal Surat</label>
                        <div class="col-sm-7 control-label" style="text-align:left;">
                          <input id='disposisi-Asal_surat' class='form-control' name='disposisi-Asal_surat' type='text'  value="<?php echo $row['Asal_surat']; ?>" readonly/> 
                        </div>
                  </div>
                  <div class="col-xs-12 form-group">
                        <label class="col-sm-3 control-label" style="text-align:right;">Perihal</label>
                         <div class="col-sm-7 control-label" style="text-align:left;">
                           <input id='disposisi-Perihal' class='form-control' name='disposisi-Perihal' type='text' value="<?php echo $row['Perihal']; ?>" readonly/>
                         </div>
                  </div>
                 
                 <div class="col-xs-12 form-group">
                       <label class="col-sm-3 control-label" style="text-align:right;">Catatan</label>
                       <div class="col-sm-7 control-label" style="text-align:left;">
                          <input id='disposisi-Catatan' class='form-control' name='disposisi-Catatan' type='text' value="<?php echo $row['Catatan']; ?>" readonly /> 
                       </div>
                  </div>
                   <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Tujuan</label>
                        <div class="col-sm-7 control-label" style="text-align:left;">
                            <input id='disposisi-tujuan' class='form-control' name='disposisi-tujuan' type='text' value="<?php echo $row2['Nama_bagian']; ?>"  readonly /> 
                        </div>
                  </div>
                  <div class="col-xs-12 form-group" >
                     <label style="text-align:right;" class="col-sm-3 control-label">Disposisi</label>
                        <div class="col-sm-7 control-label" style="text-align:left;">
                          <input id='disposisi-isi' class='form-control' name='disposisi-isi' type='text' value="<?php echo $row['Disposisi']; ?>"  readonly/> 
                        </div>
                  </div>
                  
                  <div class="col-xs-12 form-group" >
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-7 control-label">
                      <div class="btn-group pull-right">
                              <button type="submit"  name="terimadisposisi" value="Simpan" class="btn btn-info btn-flat">Terima</button>
  
                      </div>
                    </div>
                  </div>
              </form> 
                  
              </div>
          </div>
        </div>
     