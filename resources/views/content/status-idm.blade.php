@extends('Index')

@section('container')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Status IDM Desa</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="span3">
                            <div class="service-box aligncenter flyLeft">
                              <div class="icon">
                                <i class="icon-circled icon-bgprimary icon-bar-chart icon-4x"></i>
                              </div>
                              <h5>Nilai <span class="colored">IDM</span></h5>
                              <h1><strong>0.8241</strong></h1>
                            </div>
                          </div>
                          <div class="span3">
                            <div class="service-box aligncenter flyRight">
                              <div class="icon">
                                <i class="icon-circled icon-bgdanger icon-edit icon-4x"></i>
                              </div>
                              <h5>Status <span class="colored">IDM</span></h5>
                              <h1><strong>Mandiri</strong></h1>
                            </div>
                          </div>
                          <div class="span6">
                            <div id="chartIDM" style="min-width: 410px; height: 500px; margin: 0 auto"></div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        // Inisialisasi Highcharts untuk diagram lingkaran
        Highcharts.chart('chartIDM', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Indeks Desa Membangun'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Persentase',
                colorByPoint: true,
                data: [
                    {
                        name: 'IKS',
                        y: {{ $data['IKS'] * 100 }},
                    },
                    {
                        name: 'IKE',
                        y: {{ $data['IKE'] * 100 }},
                    },
                    {
                        name: 'IKL',
                        y: {{ $data['IKL'] * 100 }},
                    }
                ]
            }]
        });
    </script>
@endsection
