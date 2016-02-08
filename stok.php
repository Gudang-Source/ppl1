<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); ?>
      <title>SISTER | Stok</title>
    </head>

    <body>
      <?php include('navbar.html'); ?>
      <div class="container">
        <!--Perbarui Data -->
        <div class="button-row">
          <a id="perbarui-data" class="waves-effect waves-light btn modal-trigger green darken-1" href="#add-modal">Tambah Baru</a>
          <!-- Modal Structure -->
          <div id="add-modal" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Tambah ATK Baru</h4>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="id-atk" type="text" class="validate">
                      <label for="id-atk">ID ATK</label>
                    </div>
                  </div> 
                  <div class="row"> 
                    <div class="input-field col s6">
                      <input id="jenis-atk" type="text" class="validate">
                      <label for="jenis-atk">Jenis ATK</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="jumlah" type="text" class="validate">
                      <label for="jumlah">Jumlah</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="stok-min" type="text" class="validate">
                      <label for="stok-min">Stok Minimum</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Tambahkan</a>
            </div>
          </div>
        </div>
        <!-- Tabel Stok-->
        <table id="tabel-stok" class="tabel container centered">
          <thead>
            <tr>
                <th data-field="id-atk">ID ATK</th>
                <th data-field="jenis-atk">Jenis ATK</th>
                <th data-field="jumlah-atk">Jumlah Tersedia</th>
                <th data-field="stok-min">Stok Minimum</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ATK01</td>
              <td>Spidol Hitam</td>
              <td>5</td>
              <td>3</td>
            </tr>
            <tr>
              <td>ATK02</td>
              <td>Ballpoint Merah</td>
              <td>10</td>
              <td>5</td>
            </tr>
          </tbody>
        </table>
      </div>

      <?php include('footer.html'); ?>
      
      <!--js-->
      <script type="text/javascript">
        document.getElementById("stok").className += "active";
        $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal-trigger').leanModal();
        });
      </script>
    </body>
  </html>