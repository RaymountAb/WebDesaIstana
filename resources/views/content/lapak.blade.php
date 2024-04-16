@extends('Index')

@section('container')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Produk Usaha Desa</h2>
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
                                @foreach($dataLapak as $lapak)
                                <li class="item-thumbs span3 design" data-id="{{ $lapak->id }}" data-type="design">
                                    <div class="team-box thumbnail">
                                        <img src="{{ asset('images/produk/' . $lapak->image) }}" alt="" />
                                        <div class="caption">
                                            <h3>{{ $lapak->name }}</h3>
                                            <h5>Rp. {{ number_format($lapak->harga, 0, ',', '.') }}</h5>
                                            <p>{{ $lapak->description }}</p>
                                            <div class="btn-group">
                                                <a href="{{ $lapak->link }}" class="btn btn-primary" target="_blank"><i class="fas fa-shopping-cart"></i> Pesan</a>
                                                <a href="{{ $lapak->map }}" class="btn btn-success" target="_blank"><i class="fas fa-map-marker"></i> Lokasi</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>                            
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
