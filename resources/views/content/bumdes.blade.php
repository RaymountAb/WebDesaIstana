@extends('Index')

@section('container')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Badan Usaha Milik Desa</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="span12">
                <div class="clearfix"></div>
                <!-- Tampilkan bagian struktur jika data struktur tersedia -->
                @if ($dataBumdes->isNotEmpty())
                    <div class="row" align="center">
                        <h4 class="title" align="center"><strong>Struktur Organisasi</strong></h4>
                        <!-- Perbarui baris ini -->
                        <img src="{{ asset('images/organisasi/' . $dataBumdes->first()->sotk) }}" alt=""
                            class="mx-auto d-block" />
                    </div>
                @endif

                <!-- Tampilkan bagian daftar anggota jika data anggota tersedia -->
                @if ($dataBumdes->isNotEmpty() && !is_null($dataBumdes->first()->anggota))
                    <div class="row" align="center">
                        <h4 class="title" align="center"><strong>Daftar Anggota</strong></h4>
                        <!-- Perbarui baris ini -->
                        <img src="{{ asset('images/organisasi/' . $dataBumdes->first()->anggota) }}" alt=""
                            class="mx-auto d-block" />
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
