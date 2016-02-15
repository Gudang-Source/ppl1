<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html');
			require_once('database.php');
		?>
      <title>SISTER | Supplier</title>
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
              <h4>Tambah Supplier Baru</h4>
              <div class="row">
                <form id="add-form" class="col s12" action="/ppl1/function/insertSupplier.php" method="get" name="insert">
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="sid" value="NULL" id="id-supplier" type="text" class="validate" required="" aria-required="true">
                      <label for="id-supplier">ID Supplier</label>
                    </div>
                  </div> 
                  <div class="row"> 
                    <div class="input-field col s6">
                      <input name="nama" id="nama-supplier" type="text" class="validate" required="" aria-required="true">
                      <label for="nama-supplier">Nama Supplier</label>
                    </div>
                  </div>
				  <div class="row"> 
                    <div class="input-field col s6">
                      <input name="perusahaan" id="nama-perusahaan" type="text" class="validate" required="" aria-required="true">
                      <label for="nama-perusahaan">Nama Perusahaan</label>
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
            <table id="tabel-supplier" class="tabel centered">
              <thead>
                <tr>
                    <th data-field="id-supplier">ID Supplier</th>
                    <th data-field="nama-supplier">Nama Supplier</th>
					<th data-field="nama-perusahaan">Nama Perusahaan</th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach (get_supplier() as $data) { ?>
                <tr class="data-row">
                  <td><?php echo $data['sid']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
				  <td><?php echo $data['perusahaan']; ?></td>
                  <td><div class="edit-btn"><a class="waves-effect waves-light btn modal-trigger orange darken-1" href="#edit-modal">Ubah</a></div></td>
                  <td><div class ="delete-btn"><a class="waves-effect waves-light btn modal-trigger red darken-4" href="#delete-modal">Hapus</a></div></td>                
                </tr>
			  <?php } ?>
              </tbody>
            </table>
            <!-- Edit-Modal-->
              <div id="edit-modal" class="modal">
                <div class="modal-content" style="height:100%">
                  <h4>Ubah Data Supplier</h4>
                  <div class="row">
                    <form id="edit-form" class="col s12" action="/ppl1/function/editSupplier.php" method="get" name="edit">
                      <div class="row">
                        <div class="input-field col s6">
                          <input name="sid" id="id-supplier" type="text" class="validate" required="" aria-required="true" value = "NULL">
                          <label class="edit-label" for="id-supplier">ID Supplier</label>
                        </div>
                      </div> 
                      <div class="row"> 
                        <div class="input-field col s6">
                          <input name="nama" id="nama-supplier" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="nama-supplier">Nama Supplier</label>
                        </div>
                      </div>
					  <div class="row"> 
                        <div class="input-field col s6">
                          <input name="perusahaan" id="nama-perusahaan" type="text" class="validate" required="" aria-required="true">
                          <label class="edit-label" for="nama-perusahaan">Nama Perusahaan</label>
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
                  <div><a href="/ppl1/function/deleteSupplier.php" class="hapus btn waves-effect waves-light red darken-4" >Hapus</a></div>
                  <div><a href="supplier.php" class=" btn waves-effect waves-light green darken-4" style="margin-right:20px">Batal</a></div>
                </div>
              </div>

      <?php include('footer.html'); ?>

      <!--js-->
      <script type="text/javascript">
        $(document).ready(function(){
          initPage("tabel-supplier",["sid","nama", "perusahaan"],"sid",8,0,"Supplier","/ppl1/function/deleteSupplier.php","sid",0);
        });  
      </script>
    </body>
  </html>