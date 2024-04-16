@extends('Index')

@section('container')
    <section id="featured">
        <div class="camera_wrap" id="camera-slide">

            <!-- slide 1 here -->
            <div data-src="assets/img/slides/slide1.png">
            </div>

            <!-- slide 2 here -->
            <div data-src="assets/img/slides/slide1.png">
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">

                <div class="span8">
                    @foreach ($posts as $post)
                        <article>
                            <div class="row">
                                <div class="span8">
                                    <div class="post-image">
                                        <div class="post-heading">
                                            <h3><a href="#">{{ $post->title }}</a></h3>
                                        </div>
                                        <img src="{{ asset('images/konten/' . $post->image) }}" alt="" />
                                    </div>
                                    <div class="meta-post">
                                        <ul>
                                            <li><i class="icon-file"></i></li>
                                            {{-- <li>By <a href="#" class="author">admin</a></li> --}}
                                            <li>On <a href="#"
                                                    class="date">{{ $post->created_at->format('d F, Y') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="post-entry">
                                        <p>{{ $post->content }}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    <article>
                        <div class="row">
                            <div class="span8">
                                <div class="post-video">
                                    <div class="post-heading">
                                        <h3><a href="#">Video Profil Desa Istana</a></h3>
                                    </div>
                                    <div class="video-container">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/9r0YjRlZv2A" frameborder="0"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
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
                            <h5 class="widgetheading" style="text-align: left;"><i class="fas fa-clock"></i>Waktu</h5>
                            <div id="clock"></div>
                        </div>

                        <div class="widget">

                            <h5 class="widgetheading"><i class="fas fa-list"></i> Categories</h5>

                            <ul class="cat">
                                <li><i class="icon-angle-right"></i> <a href="#">Agenda Desa</a><span> (20)</span>
                                </li>
                                <li><i class="icon-angle-right"></i> <a href="#">Informasi</a><span>
                                        (11)</span></li>
                                <li><i class="icon-angle-right"></i> <a href="#">Laporan</a><span>
                                        (9)</span></li>
                                <li><i class="icon-angle-right"></i> <a href="#">Tentang Desa</a><span> (12)</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h5 class="widgetheading"><i class="fas fa-chart-pie"></i> Statistik Penduduk Desa</h5>
                            <div id="chartpenduduk" style="width:100%; height:400px;"></div>
                            <div style="display: flex; justify-content: space-between;">
                                <div>
                                    <p style="margin: 0;">laki-laki: <strong id="totalLaki"></strong></p>
                                </div>
                                <div>
                                    <p style="margin: 0;">perempuan: <strong id="totalPerempuan"></strong></p>
                                </div>
                            </div>
                        </div>


                        <div class="widget">
                            <h5 class="widgetheading" style="text-align: left;"><i class="fas fa-user-circle"></i>Masuk
                            </h5>
                            <div style="text-align: center;">
                                <a href="/login-admin" class="btn btn-primary" style="margin-bottom: 5px;"><i
                                        class="fas fa-id-badge "></i> Admin</a><br>
                                <a href="your link" class="btn btn-success btn-rounded" style="margin-top: 5px;"><i
                                        class="fas fa-handshake"></i>Layanan Mandiri</a>
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
