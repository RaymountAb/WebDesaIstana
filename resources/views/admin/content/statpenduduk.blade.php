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
                                <th class="text-center">No</th>
                                <th class="text-center">Daerah</th>
                                <th class="text-center">Laki-Laki</th>
                                <th class="text-center">Perempuan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Main Content End -->

        <!-- Modal Start -->
        <div id="modalStatPenduduk" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Jumlah Penduduk</h5>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body pt-4">
                        <form id="formeditPenduduk" name="formeditPenduduk" action="#" autocomplete="off">
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Laki-laki</span>
                                    <input type="text" name="editlelaki" placeholder="Masukkan Jumlah Laki-laki" class="form-control" id="editlelaki">
                                </label>
                            </div>
    
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Perempuan</span>
                                    <input type="text" name="editperempuan" placeholder="Masukkan Jumlah Perempuan" class="form-control" id="editperempuan">
                                </label>
                            </div>

                            <input type="hidden" name="daerah_id" id="daerah_id" value="">
    
                            <input type="submit" value="Ubah" class="btn btn-sm btn-rounded btn-success" id="saveBtn">
                            <button type="button" class="btn btn-sm btn-rounded btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">Admin Desa</a>. All Rights Reserved.</p>
        </footer>
        <!-- Main Footer End -->
    </main>

    @include('admin.content.js.statpenduduk')
@endsection
