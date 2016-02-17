<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); 
			require_once("database.php");
		?>
      <title>SISTER | Statistik</title>
    </head>

    <body>
      <?php include('navbar.html'); ?>
      <div class="container">
        <div class="col s12" style="font-size:25px; text-align:center; margin-top:150px">Pemakaian ATK Setiap Pengguna</div>
        <div class="row" style="text-align:center">
          <div class="ct-chart col s12" style="margin-top:50px; display:inline-block"></div>
        </div>
      </div>

      <?php include('footer.html'); ?>
	
      <!--js-->
      <script type="text/javascript">
	    <?php
			include ("Connect.php");
			global $conn;
			
			$query = "SELECT nama, COUNT(nama) FROM user JOIN pemakaian ON user.uid = pemakaian.p_uid GROUP BY nama";
			
			$rquery = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($rquery, MYSQLI_NUM);
			$rowcount = mysqli_num_rows($rquery);
			$arrcount = $rowcount * 2;
	    ?>
		
		var arr = [<?php echo '"'.implode('","', $row).'"' ?>];
		var arr_labels;
		var i;
		/*for (i = 0; i < 3; i++){
			arr_labels[i] = arr[i*2];
		} --> ini yang bikin ga keluar grafik nya */ 
		
		var arr_series;
		
		var i = 0;
        var data = {
          labels: ['Edwin', 'Levanji', 'Raka', 'Nitho'],
          series: [
            [10, 4, 3, 7]
          ]
        };

        var options = {
          seriesBarDistance: 10,
          axisY:{
            onlyInteger: true
          }
        };

        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];
        new Chartist.Bar('.ct-chart', data, options, responsiveOptions);
      
      </script>
    </body>
  </html>