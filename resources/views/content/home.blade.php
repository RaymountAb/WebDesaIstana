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
                            <h5 class="widgetheading"><i class="fas fa-video"></i> Video widget</h5>
                            <div class="video-container">
                                <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0"> </iframe>
                            </div>
                        </div>                        

                        <div class="widget">

                            <h5 class="widgetheading">Text widget</h5>
                            <p>
                                Lorem ipsum dolor sit amet, quo everti torquatos rationibus an, graeci splendide mel cu. Sed
                                ad vidisse eruditi maluisset, et duo mazim placerat adipiscing.
                            </p>
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
@endsection
