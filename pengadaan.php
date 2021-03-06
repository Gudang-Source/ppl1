<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); 
			require_once("database.php");
		?>
      <title>SISTER | Pengadaan</title>
    </head>

    <body>
      <?php include('navbar.html'); ?>
	  </nav>
      <div class="container">
        <!-- Kebutuhan Pengadaan -->
        <div id="kebutuhan">Kebutuhan</div>
        <div class="row">
          <div class="col s12">
            <!-- Tabel Stok-->
            <table id="tabel-kebutuhan" class="tabel centered">
              <thead>
                <tr>
                    <th data-field="id-atk">ID ATK</th>
                    <th data-field="id-atk">Jenis ATK</th>
                    <th data-field="jumlah-atk">Stok</th>
                    <th data-field="stok-min">Stok Minimum</th>
                    <th data-field="kebutuhan">Kebutuhan</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach (get_kebutuhan() as $data) { ?>
                <tr class="data-row">
                  <td><?php echo $data['aid'];?></td>
                  <td><?php echo $data['jenis'];?></td>
                  <td><?php echo $data['stok'];?></td>
                  <td><?php echo $data['stok_min'];?></td>
                  <td class="warning"><?php echo $data['kebutuhan'];?></td>
                </tr>
                <?php } ?>

              </tbody>
            </table>


        <!--Add-Modal -->
        <div class="button-row" style="margin-top:150px">
          <a class="add-btn waves-effect waves-light btn modal-trigger green darken-1" href="#add-modal">Tambah Baru</a>
          <!-- Modal Structure -->
          <div id="add-modal" class="modal modal-fixed-footer">
            <div class="modal-content" style="height:100%">
              <h4>Tambah Pengadaan</h4>
              <div class="row">
                <form id="add-form" class="col s12" action="/ppl1/function/insertPengadaan.php">
                  <div class="row">
                    <div class="input-field col s6">
                      <input readonly="readonly" name="aid" id="id-pengadaan" type="text" class="validate" required="" aria-required="true">
                      <label for="id-pengadaan">ID Pengadaan</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="a_sid" id="id-supplier" type="text" class="validate" required="" aria-required="true">
                      <label for="id-supplier">ID Supplier</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="a_aid" id="id-atk" type="text" class="validate" required="" aria-required="true">
                      <label for="id-atk">ID ATK</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="tgl_pesan" id="tanggal-pemesanan" type="date" class="validate" required="" aria-required="true">
                      <label class="active" for="tanggal-pemesanan">Tanggal Pemesanan</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="tgl_datang" id="tanggal-kedatangan" type="date" class="validate" required="" aria-required="true">
                      <label class="active" for="tanggal-kedatangan">Tanggal Kedatangan</label>
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
          <div id="pengadaan">Pengadaan</div>
          <div class="col s12">
            <!-- Tabel Stok-->
            <table id="tabel-pengadaan" class="tabel centered">
              <thead>
                <tr>
                    <th data-field="id-pengadaan">ID Pengadaan</th>
                    <th data-field="id-supplier">ID Supplier</th>
                    <th data-field="id-atk">ID ATK</th>
                    <th data-field="tanggal-pemesanan">Tanggal Pemesanan</th>
                    <th data-field="tanggal-kedatangan">Tanggal Kedatangan</th>
                    <th data-field="jumlah-atk">Jumlah</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach (get_pengadaan() as $data) { ?>
                <tr class="data-row">
                  <td><?php echo $data['aid'];?></td>
                  <td><?php echo $data['a_sid'];?></td>
                  <td><?php echo $data['a_aid'];?></td>
                  <td><?php echo $data['tgl_pesan'];?></td>
                  <td><?php echo $data['tgl_datang']; ?></td>
                  <td><?php echo $data['jumlah'];?></td>
                  <td><div class="edit-btn"><a class="waves-effect waves-light btn modal-trigger orange darken-1" href="#edit-modal">Ubah</a></div></td>
                  <td><div class ="delete-btn"><a class="waves-effect waves-light btn modal-trigger red darken-4" href="#delete-modal">Hapus</a></div></td>
                </tr>
                <?php } ?>

              </tbody>
            </table>
            <!-- Edit-Modal-->
              <div id="edit-modal" class="modal">
                <div class="modal-content" style="height:100%">
                  <h4>Ubah Data Pengadaan</h4>
                  <div class="row">
                    <form id="edit-form" class="col s12" action="/ppl1/function/editPengadaan.php">
                      <div class="row">
                    <div class="input-field col s6">
                      <input readonly="readonly" name="aid" id="id-pengadaan" type="text" class="validate" required="" aria-required="true">
                      <label class="edit-label" for="id-pengadaan">ID Pengadaan</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="a_sid" id="id-supplier" type="text" class="validate" required="" aria-required="true">
                      <label class="edit-label" for="id-supplier">ID Supplier</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input readonly="readonly" name="a_aid" id="id-atk" type="text" class="validate" required="" aria-required="true">
                      <label class="edit-label" for="id-atk">ID ATK</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="tgl_pesan" id="tanggal-pemesanan" type="date" class="validate" required="" aria-required="true">
                      <label class="edit-label" for="tanggal-pemesanan">Tanggal Pemesanan</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="tgl_datang" id="tanggal-kedatangan" type="date" class="validate" required="" aria-required="true">
                      <label class="edit-label" for="tanggal-kedatangan">Tanggal Kedatangan</label>
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
                  <div><a href="/ppl1/function/deletePengadaan.php" class="hapus btn waves-effect waves-light red darken-4" >Hapus</a></div>
                  <div><a href="pengadaan.php" class=" btn waves-effect waves-light green darken-4" style="margin-right:20px">Batal</a></div>
                </div>
              </div>
      </div>


      <?php include('footer.html'); ?>

      <!--js-->
      <script type="text/javascript">
        initPage("tabel-pengadaan", ["id-pengadaan", "id-supplier", "id-atk", "tanggal-pemesanan", "tanggal-kedatangan", "jumlah-atk"], "id-pengadaan", 5, 0, "Pesan", "/ppl1/function/deletePengadaan.php", "aid", 0);
      </script>
    </body>
  </html>
