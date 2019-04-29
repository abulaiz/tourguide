@extends('layout.bases')
@section('page_title', 'Home')
@section('dashboard', 'active')

@section('content')
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">face</i>
                  </div>
                  <p class="card-category">Turis yang Terdaftar</p>
                  <h3 class="card-title">220rb</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">landscape</i>
                  </div>
                  <p class="card-category">Jumlah Destinasi Wisata</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Jumlah Toko Oleh-Oleh</p>
                  <h3 class="card-title">245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">supervised_user_circle</i>
                  </div>
                  <p class="card-category">Total Toure Guide </p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">

                  </div>
                </div>
              </div>
            </div>            
            <div class="col-lg-8 col-md-6 col-sm-6">
              <div class="card card-chart">
                <div class="card-header card-header-primary">
                  <div class="ct-chart" id="languageChart" style="height: 300px"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Penguasaan Bahasa</h4>
                  <p class="card-category">Persentase penguasaan bahasa para Tour Guide</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                    </div>
                  </div>
                </div>
              </div>
          </div>
@endsection

@section('customJS')

  <script>
    var data = {
      labels: ['English (20%)', 'Indonesian (35%)', 'Mandarin (25%)', 'Japanese (10%)', 'Korean (10%)'],
      series: [20, 35, 25, 10, 10]
    };

    var options = {
      labelInterpolationFnc: function(value) {
        return value[0]
      }
    };

    var responsiveOptions = [
      ['screen and (min-width: 640px)', {
        chartPadding: 30,
        labelOffset: 100,
        labelDirection: 'explode',
        labelInterpolationFnc: function(value) {
          return value;
        }
      }],
      ['screen and (min-width: 1024px)', {
        labelOffset: 20,
        chartPadding: 20
      }]
    ];

    new Chartist.Pie('.ct-chart', data, options, responsiveOptions);
  </script>

@endsection