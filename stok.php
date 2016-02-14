<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); ?>
      <title>SISTER | Stok</title>
    </head>

    <body>
      <?php include('navbar.html'); ?>
      <div class="container">
        <!--Add-Modal -->
        <div class="button-row">
          <a class="add-btn waves-effect waves-light btn modal-trigger green darken-1" href="#add-modal">Tambah Baru</a>
          <!-- Modal Structure -->
          <div id="add-modal" class="modal">
            <div class="modal-content" style="height:100%">
              <h4>Tambah ATK Baru</h4>
              <div class="row">
                <form id="add-form" class="col s12" action="">
                  <div class="row">
                    <div class="input-field col s6">
                      <input disabled name="" id="id-atk" type="text" class="validate" required="" aria-required="true">
                      <label for="id-atk">ID ATK</label>
                    </div>
                  </div> 
                  <div class="row"> 
                    <div class="input-field col s6">
                      <input name="" id="jenis-atk" type="text" class="validate" required="" aria-required="true">
                      <label for="jenis-atk">Jenis ATK</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="" id="jumlah" type="text" class="validate" required="" aria-required="true">
                      <label for="jumlah">Jumlah</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="" id="stok-min" type="text" class="validate" required="" aria-required="true">
                      <label for="stok-min">Stok Minimum</label>
                    </div>
                  </div>
                  <div class="row">
                    <button class="tambahkan btn waves-effect waves-light green darken-1" type="submit">Tambahkan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s10">
            <!-- Tabel Stok-->
            <table id="tabel-stok" class="tabel centered">
              <thead>
                <tr>
                    <th data-field="id-atk">ID ATK</th>
                    <th data-field="jenis-atk">Jenis ATK</th>
                    <th data-field="jumlah-atk">Jumlah Tersedia</th>
                    <th data-field="stok-min">Stok Minimum</th>
                </tr>
              </thead>
              <tbody>
                <tr class="data-row">
                  <td>ATK1</td>
                  <td>Spidol Hitam</td>
                  <td>5</td>
                  <td>3</td>
                  <td><div class="edit-btn"><a class="waves-effect waves-light btn modal-trigger orange darken-1" href="#edit-modal">Ubah</a></div></td>
                  <td><div class ="delete-btn"><a class="waves-effect waves-light btn modal-trigger red darken-4" href="#delete-modal">Hapus</a></div></td>               
                </tr>
                <tr class="data-row">
                  <td>ATK2</td>
                  <td>Ballpoint Merah</td>
                  <td>10</td>
                  <td>5</td>
                  <td><div class="edit-btn"><a class="waves-effect waves-light btn modal-trigger orange darken-1" href="#edit-modal">Ubah</a></div></td>
                  <td><div class ="delete-btn"><a class="waves-effect waves-light btn modal-trigger red darken-4" href="#delete-modal">Hapus</a></div></td>               
                </tr>
              </tbody>
            </table>
            <!-- Edit-Modal-->
              <div id="edit-modal" class="modal">
                <div class="modal-content" style="height:100%">
                  <h4>Ubah Data ATK</h4>
                  <div class="row">
                    <form id="edit-form" class="col s12" action="">
                      <div class="row">
                        <div class="input-field col s6">
                          <input disabled id="id-atk" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="id-atk">ID ATK</label>
                        </div>
                      </div> 
                      <div class="row"> 
                        <div class="input-field col s6">
                          <input id="jenis-atk" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="jenis-atk">Jenis ATK</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="jumlah-atk" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="jumlah-atk">Jumlah</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="stok-min" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="stok-min">Stok Minimum</label>
                        </div>
                      </div>
                      <div class="row">
                        <button class="ubah btn waves-effect waves-light orange darken-1" type="submit">Ubah</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <!-- Delete-Modal-->
              <div id="delete-modal" class="modal">
                <div class="modal-content">
                  <h4>Hapus Data</h4>
                  <p>Anda yakin akan menghapus data ini ?</p>
                </div>
                <div class="modal-footer">
                  <div><a href="#!" class="hapus btn waves-effect waves-light red darken-4" >Hapus</a></div>
                  <div><a href="#!" class=" btn waves-effect waves-light green darken-4" style="margin-right:20px">Batal</a></div>
                </div>
              </div>

            </div>
          </div>


      <?php include('footer.html'); ?>
      
      <!--js-->
      <script type="text/javascript">
        $(document).ready(function(){
          initPage("tabel-stok",["id-atk","jenis-atk","jumlah-atk","stok-min"],"id-atk",3,0,"ATK","index.php","idAtk",0);
        });  
      </script>
    </body>
  </html>