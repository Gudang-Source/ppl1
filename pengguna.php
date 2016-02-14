<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); ?>
      <title>SISTER | Pengguna</title>
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
              <h4>Tambah Pengguna Baru</h4>
              <div class="row">
                <form id="add-form" class="col s12" action="">
                  <div class="row">
                    <div class="input-field col s6">
                      <input disabled name="" id="id-pengguna" type="text" class="validate" required="" aria-required="true">
                      <label for="id-pengguna">ID Pengguna</label>
                    </div>
                  </div> 
                  <div class="row"> 
                    <div class="input-field col s6">
                      <input name="" id="nama-pengguna" type="text" class="validate" required="" aria-required="true">
                      <label for="nama-pengguna">Nama Pengguna</label>
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
          <div class="col s9 offset-s1">
            <!-- Tabel Stok-->
            <table id="tabel-pengguna" class="tabel centered">
              <thead>
                <tr>
                    <th data-field="id-pengguna">ID Pengguna</th>
                    <th data-field="nama-pengguna">Nama Pengguna</th>
                </tr>
              </thead>
              <tbody>
                <tr class="data-row">
                  <td>User1</td>
                  <td>Edwin</td>
                  <td><div class="edit-btn"><a class="waves-effect waves-light btn modal-trigger orange darken-1" href="#edit-modal">Ubah</a></div></td>
                  <td><div class ="delete-btn"><a class="waves-effect waves-light btn modal-trigger red darken-4" href="#delete-modal">Hapus</a></div></td>               
                </tr>
              </tbody>
            </table>
            <!-- Edit-Modal-->
              <div id="edit-modal" class="modal">
                <div class="modal-content" style="height:100%">
                  <h4>Ubah Data Supplier</h4>
                  <div class="row">
                    <form id="edit-form" class="col s12" action="">
                      <div class="row">
                        <div class="input-field col s6">
                          <input disabled name="" id="id-pengguna" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="id-pengguna">ID Pengguna</label>
                        </div>
                      </div> 
                      <div class="row"> 
                        <div class="input-field col s6">
                          <input name="" id="nama-pengguna" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="nama-pengguna">Nama Pengguna</label>
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

      <?php include('footer.html'); ?>

      <!--js-->
      <script type="text/javascript">
        $(document).ready(function(){
          initPage("tabel-pengguna",["id-pengguna","nama-pengguna"],"id-pengguna",4,0,"User","index.php","idPengguna",0);
        });  
      </script>
    </body>
  </html>