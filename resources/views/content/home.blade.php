@extends('Index')

@section('container')
    <section id="featured">
        <div class="camera_wrap" id="camera-slide">

            <!-- slide 1 here -->
            <div data-src="assets/img/slides/slide1.png">
            </div>

            <!-- slide 2 here -->
            <div data-src="assets/img/slides/slide2.png">
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">

                <div class="span8">
                    <article>
                        <div class="row">

                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#">This is an example of standard post format</a></h3>
                                    </div>

                                    <img src="assets/img/dummies/blog/img1.jpg" alt="" />
                                </div>
                                <div class="meta-post">
                                    <ul>
                                        <li><i class="icon-file"></i></li>
                                        <li>By <a href="#" class="author">Admin</a></li>
                                        <li>On <a href="#" class="date">10 Jun, 2013</a></li>
                                        <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                                    </ul>
                                </div>
                                <div class="post-entry">
                                    <p>
                                        Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet,
                                        ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad
                                        qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam
                                        persius
                                        ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam
                                        salutatus...
                                    </p>
                                    <a href="#" class="readmore">Read more <i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article>
                        <div class="row">
          
                          <div class="span8">
                            <div class="post-video">
                              <div class="post-heading">
                                <h3><a href="#">Amazing video post format here</a></h3>
                              </div>
                              <div class="video-container">
                                <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">			</iframe>
                              </div>
                            </div>
                            <div class="meta-post">
                              <ul>
                                <li><i class="icon-facetime-video"></i></li>
                                <li>By <a href="#" class="author">Admin</a></li>
                                <li>On <a href="#" class="date">10 Jun, 2013</a></li>
                                <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                              </ul>
                            </div>
                            <div class="post-entry">
                              <p>
                                Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                                ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus...
                              </p>
                              <a href="#" class="readmore">Read more <i class="icon-angle-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </article>

                    <div id="pagination">
                        <span class="all">Page 1 of 3</span>
                        <span class="current">1</span>
                        <a href="#" class="inactive">2</a>
                        <a href="#" class="inactive">3</a>
                    </div>
                </div>

                <div class="span4">

                    <aside class="right-sidebar">

                        <div class="widget">
                            <form>
                                <div class="input-append">
                                    <input class="span2" id="appendedInputButton" type="text"
                                        placeholder="Type here">
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
                            <canvas id="populationChart" width="150" height="150"></canvas>
                            <div class="chart-legend">
                                <span class="legend-item"><span class="legend-color" style="background-color: rgba(255, 99, 132, 0.5);"></span>Laki-laki</span>
                                <span class="legend-item"><span class="legend-color" style="background-color: rgba(54, 162, 235, 0.5);"></span>Perempuan</span>
                            </div>
                        </div>
                                            

                        <div class="widget">
                            <h5 class="widgetheading" style="text-align: left;"><i class="fas fa-user-circle"></i>Masuk</h5>
                            <div style="text-align: center;">
                                <a href="your link" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fas fa-id-badge "></i> Admin</a><br>
                                <a href="your link" class="btn btn-success btn-rounded" style="margin-top: 5px;"><i class="fas fa-handshake"></i>Layanan Mandiri</a>
                            </div>
                        </div>                                                                                       
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('populationChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                data: [500, 450], // Ganti dengan data jumlah penduduk laki-laki dan perempuan
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)', // Warna untuk laki-laki
                    'rgba(54, 162, 235, 0.5)' // Warna untuk perempuan
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                display: false // Sembunyikan legenda bawaan
            }
        }
    });

    // Tambahkan penjelasan warna
    var legendItems = document.querySelectorAll('.legend-item');
    legendItems.forEach(function(item, index) {
        item.innerHTML += ' (' + myChart.data.datasets[0].data[index] + ')';
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
