<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); ?>
      <title>SISTER | Booking</title>
    </head>

    <body>
      <?php include('navbar.html'); ?>
      <div class="container">
        <!--Add-Modal -->
        <div class="button-row">
          <a class="add-btn waves-effect waves-light btn modal-trigger green darken-1" href="#add-modal">Tambah Baru</a>
          <!-- Modal Structure -->
          <div id="add-modal" class="modal modal-fixed-footer">
            <div class="modal-content" style="height:100%">
              <h4>Booking Baru</h4>
              <div class="row">
                <form id="add-form" class="col s12" action="" method="get" name = "insert">
                  <div class="row">
                    <div class="input-field col s6">
                      <input readonly="readonly" name="pid" id="id-booking" type="text" class="validate" required="" aria-required="true">
                      <label for="id-booking">ID Booking</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="p_uid" id="id-pengguna" type="text" class="validate" required="" aria-required="true">
                      <label for="id-pengguna">ID Pengguna</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="p_aid" id="id-atk" type="text" class="validate" required="" aria-required="true">
                      <label for="id-atk">ID ATK</label>
                    </div>
                  </div> 
                  <div class="row"> 
                    <div class="input-field col s6">
                      <input name="tanggal" id="tanggal-booking" type="date" class="validate" required="" aria-required="true">
                      <label class="active" for="tanggal-booking">Tanggal Booking</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="jumlah" id="jumlah-atk" type="text" class="validate" required="" aria-required="true">
                      <label for="jumlah-atk">Jumlah</label>
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
          <div class="col s12">
            <!-- Tabel Stok-->
            <table id="tabel-booking" class="tabel centered">
              <thead>
                <tr>
                    <th data-field="id-booking">ID Booking</th>
                    <th data-field="id-pengguna">ID Pengguna</th>
                    <th data-field="id-atk">ID ATK</th>
                    <th data-field="tanggal-booking">Tanggal Booking</th>
                    <th data-field="jumlah-atk">Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <tr class="data-row">
                  <td>Book1</td>
                  <td>User2</td>
                  <td>ATK5</td>
                  <td>2016-02-16</td>
                  <td>2</td>
                  <td><div class="edit-btn"><a class="waves-effect waves-light btn modal-trigger orange darken-1" href="#edit-modal">Ubah</a></div></td>
                  <td><div class ="delete-btn"><a class="waves-effect waves-light btn modal-trigger red darken-4" href="#delete-modal">Hapus</a></div></td>             
                </tr>
              </tbody>
            </table>
            <!-- Edit-Modal-->
              <div id="edit-modal" class="modal">
                <div class="modal-content" style="height:100%">
                  <h4>Ubah Data Booking</h4>
                  <div class="row">
                    <form id="edit-form" class="col s12" action="/ppl1/function/editBooking.php">
                      <div class="row">
                        <div class="input-field col s6">
                          <input readonly="readonly" name="pid" id="id-booking" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="id-booking">ID Booking</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input name="p_uid" id="id-pengguna" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="id-pengguna">ID Pengguna</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input readonly="readonly" name="p_aid" id="id-atk" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="id-atk">ID ATK</label>
                        </div>
                      </div> 
                      <div class="row"> 
                        <div class="input-field col s6">
                          <input name="tanggal" id="tanggal-booking" type="date" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="tanggal-booking">Tanggal Booking</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input name="jumlah" id="jumlah-atk" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="jumlah-atk">Jumlah</label>
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
                  <div><a href="/ppl1/function/deleteBooking.php" class="hapus btn waves-effect waves-light red darken-4" >Hapus</a></div>
                  <div><a href="#!" class=" btn waves-effect waves-light green darken-4" style="margin-right:20px">Batal</a></div>
                </div>
              </div>
      </div>

      <?php include('footer.html'); ?>

      <!--js-->
      <script type="text/javascript">
        $(document).ready(function(){
          //date picker init
          initPage("tabel-booking", ["id-booking", "id-pengguna", "id-atk", "tanggal-booking", "jumlah-atk"], "id-booking", 4, 0, "Book", "/ppl1/function/deleteBooking.php", "pid", 0); 
        });
      </script>
    </body>
  </html>