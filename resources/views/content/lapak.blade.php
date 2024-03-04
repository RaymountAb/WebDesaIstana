@extends('Index')

@section('container')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Lapak Desa</h2>
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
                        <section id="team">
                            <ul id="thumbs" class="team">

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                                    <div class="team-box thumbnail">
                                        <img src="assets/img/dummies/team/1.jpg" alt="" />
                                        <div class="caption">
                                            <h3>Kerupuk Ikan</h3>
                                            <h5>Rp. 15.000</h5>
                                            <p>
                                                Keripik terbuat dari ikan tenggiri. rasa memuaskan dan murah di harga
                                            </p>
                                            <div class="btn-group">
                                                <button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</button>
                                                <button class="btn btn-success"><i class="fas fa-map-marker"></i> Lokasi</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Project -->
                            </ul>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
