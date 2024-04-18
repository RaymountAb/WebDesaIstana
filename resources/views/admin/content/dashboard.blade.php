@extends('admin.main')

@section('container')
    <main class="main--container">
        <!-- Page Header Start -->
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page--title h5">Dashboard</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="main--content">
            <div class="row gutter-20">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="miniStats--panel">
                            <div class="miniStats--body">
                                <i class="miniStats--icon fa fa-user text-blue"></i>
                                <h3 class="miniStats--title h4">Jumlah Laki-laki</h3>
                                <p class="miniStats--num text-blue">{{ $totalLelaki }} Orang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="miniStats--panel">
                            <div class="miniStats--body">
                                <i class="miniStats--icon fa fa-user text-red"></i>
                                <h3 class="miniStats--title h4">Jumlah Perempuan</h3>
                                <p class="miniStats--num text-red">{{ $totalPerempuan }} Orang</p>
                            </div>
                        </div>
                    </div>
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
@endsection
