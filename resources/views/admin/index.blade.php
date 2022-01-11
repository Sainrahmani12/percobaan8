      @extends('master')
      @section('content')

      <h1 class="text-center dt-mobil">Grafik Data</h1>
      <!-- Page content -->
      <div class="container-fluid mt-6">
          <div class="row">
              <div class="col-xl-12">
                  <div class="card bg-default">
                      <div class="container">
                          <div id="dataUser"></div>
                      </div>

                      <script>
                          Highcharts.chart('dataUser', {
                              chart: {
                                  type: 'column'
                              },
                              title: {
                                  text: 'Total User'
                              },
                              subtitle: {
                                  text: 'Source: WorldClimate.com'
                              },
                              xAxis: {
                                  categories: {!! json_encode($role) !!},
                                  crosshair: true
                              },
                              yAxis: {
                                  min: 0,
                                  title: {
                                      text: 'Jumlah'
                                  }
                              },
                              tooltip: {
                                  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
                                  footerFormat: '</table>',
                                  shared: true,
                                  useHTML: true
                              },
                              plotOptions: {
                                  column: {
                                      pointPadding: 0.2,
                                      borderWidth: 0
                                  }
                              },
                              series: [{
                                  name: 'Role',
                                  data: [{!! json_encode($user)!!}, {!! json_encode($kasir)!!}, {!! json_encode($admin)!!}]
                              }]
                          });
                      </script>
                  </div>
              </div>
          </div>
      </div>
      @endsection