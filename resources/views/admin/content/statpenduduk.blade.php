@extends('admin.main')

@section('container')
    <main class="main--container">
        <!-- Page Header Start -->
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page--title h5">{{ $title }}</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="main--content">
            <div class="panel">
                <div class="table-responsive">
                    <table id="tabelStatPen" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Daerah</th>
                                <th>Laki-Laki</th>
                                <th>Perempuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Main Content End -->

        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">Admin Desa</a>. All Rights Reserved.</p>
        </footer>
        <!-- Main Footer End -->
    </main>

    @include('admin.content.js.statpenduduk')
@endsection

{{-- @push('other-scripts')
    @include('admin.content.js.statpenduduk')
@endpush --}}
