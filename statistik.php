<!DOCTYPE html>
  <html>
    <head>
      <?php include('header.html'); ?>
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