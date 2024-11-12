@extends('Index')

@section('container')
    <style>
        .section-title {
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .post-entry {
            font-size: 16px;
            line-height: 1.5;
        }

        .btn-theme {
            border-radius: 25px;
            padding: 5px 20px;
        }

        .post-heading h3 a {
            color: #333;
            transition: color 0.3s ease;
        }

        .post-heading h3 a:hover {
            color: #007bff;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            border-radius: 10px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .widget-heading {
            color: #444;
            font-size: 18px;
            font-weight: bold;
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
            margin-bottom: 15px;
        }

        #clock {
            font-size: 16px;
            color: #333;
            text-align: center;
            padding: 10px;
            background: #f7f7f7;
            border-radius: 8px;
        }

        .cat li i {
            color: #555;
            font-size: 1.2em;
            margin-right: 5px;
        }

        .cat li a:hover {
            color: #007bff;
            /* Warna saat dihover */
            text-decoration: underline;
        }

        .btn-primary:hover,
        .btn-success:hover {
            transform: scale(1.05);
            /* Sedikit memperbesar saat dihover */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    <section id="featured">
        <div class="camera_wrap" id="camera-slide">
            <div data-src="assets/img/slides/slide1.png"></div>
            <div data-src="assets/img/slides/slide1.png"></div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <div class="section-title">Latest Posts</div>
                    @foreach ($posts as $post)
                        <article class="post-article">
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="#">{{ $post->title }}</a></h3>
                                </div>
                                <img src="{{ asset('images/konten/' . $post->image) }}" alt="{{ $post->title }}" />
                            </div>
                            <div class="meta-post">
                                <ul>
                                    <li><i class="icon-file"></i></li>
                                    <li>On <a href="#" class="date">{{ $post->created_at->format('d F, Y') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-entry">
                                <p>{{ $post->content }}</p>
                            </div>
                        </article>
                    @endforeach

                    <article class="post-article">
                        <div class="post-video">
                            <div class="post-heading">
                                <h3><a href="#">Video Profil Desa Istana</a></h3>
                            </div>
                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/McLMycgQs24"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="span4">
                    <aside class="right-sidebar">
                        <div class="widget">
                            <form>
                                <div class="input-append">
                                    <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                                    <button class="btn btn-theme" type="submit">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="widget">
                            <h5 class="widgetheading"><i class="fas fa-clock"></i> Waktu</h5>
                            <div id="clock"></div>
                        </div>

                        <div class="widget">
                            <h5 class="widgetheading"><i class="fas fa-list"></i> Sosial Media</h5>
                            <ul class="cat">
                                <li><i class="fab fa-youtube"></i> <a
                                        href="https://www.youtube.com/@DesaIstana2008">Youtube</a></li>
                                <li><i class="fab fa-facebook"></i> <a
                                        href="https://www.facebook.com/p/sasli-rais-61551555137252/?mibextid=ZbWKwL">Facebook</a>
                                </li>
                                <li><i class="fab fa-instagram"></i> <a
                                        href="https://www.instagram.com/desa.istana?igsh=dmlraHpzNm9xdzVm">Instagram</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h5 class="widgetheading"><i class="fas fa-chart-pie"></i> Statistik Penduduk Desa</h5>
                            <div id="chartpenduduk" style="width:100%; height:400px;"></div>
                            <div style="display: flex; justify-content: space-between;">
                                <p>laki-laki: <strong id="totalLaki"></strong></p>
                                <p>perempuan: <strong id="totalPerempuan"></strong></p>
                            </div>
                        </div>

                        <div class="widget">
                            <h5 class="widgetheading"><i class="fas fa-user-circle"></i> Masuk</h5>
                            <div style="text-align: center;">
                                <a href="/login-admin" class="btn btn-primary" style="margin-bottom: 5px;">
                                    <i class="fas fa-id-badge"></i> Admin
                                </a><br>
                                <a href="https://docs.google.com/forms/d/1-i6pD6qhabsqZ3gYv-W7ZB1SrL4d21jje5HOzkMYBhY/viewform?edit_requested=true"
                                    class="btn btn-success btn-rounded" style="margin-top: 5px;">
                                    <i class="fas fa-handshake"></i> Form Pengaduan Masyarakat
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        // Inisialisasi grafik Highcharts dengan data dari controller
        var dataLakiLaki = [];
        var dataPerempuan = [];
        var categories = [];

        // Mengisi data dari variabel yang dikirimkan dari controller
        @foreach ($dataPenduduk as $data)
            categories.push('{{ $data->daerah }}');
            dataLakiLaki.push({{ $data->lelaki }});
            dataPerempuan.push({{ $data->perempuan }});
        @endforeach

        // Menghitung total laki-laki dan perempuan
        var totalLaki = dataLakiLaki.reduce((a, b) => a + b, 0);
        var totalPerempuan = dataPerempuan.reduce((a, b) => a + b, 0);

        // Menambahkan informasi total ke dalam elemen HTML
        document.getElementById('totalLaki').innerText = totalLaki;
        document.getElementById('totalPerempuan').innerText = totalPerempuan;

        // Menggunakan data untuk menginisialisasi Highcharts
        Highcharts.chart('chartpenduduk', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Statistik Penduduk'
            },
            xAxis: {
                categories: categories,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Penduduk'
                }
            },
            series: [{
                name: 'Laki-laki',
                color: 'blue',
                data: dataLakiLaki
            }, {
                name: 'Perempuan',
                color: 'pink',
                data: dataPerempuan
            }],
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            }
        });
    </script>




    <script>
        function updateClock() {
            var now = new Date();
            var clock = document.getElementById('clock');
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var day = days[now.getDay()];
            var date = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Format waktu, tambahkan angka 0 di depan jika angka kurang dari 10
            var timeString = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);

            // Format hari dan tanggal
            var dateString = day + '<br>' + date + '/' + month + '/' + year;

            // Tampilkan waktu, hari, dan tanggal dalam elemen HTML
            clock.innerHTML = timeString + '<br>' + dateString;
        }

        function pad(number) {
            return (number < 10 ? '0' : '') + number;
        }

        updateClock(); // Panggil fungsi updateClock untuk pertama kali

        // Perbarui waktu setiap detik
        setInterval(updateClock, 1000);
    </script>
@endsection
