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
                <!-- Records Header Start -->
                <div class="records--header">
                    <div class="col-lg-12">
                        <div class="title">
                            <h3 class="h3">
                                <i class="fas fa-comments"></i>
                                Daftar Usaha Desa
                            </h3>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="actions">
                            <a href="#" class="btn btn-s btn-rounded btn-warning" id="createNewProduk"><i
                                    class="fas fa-plus"></i>Tambah Usaha</a>
                        </div>
                    </div>
                </div>
                <!-- Records Header End -->
            </div>
            <div class="panel">
                <div class="table-responsive">
                    <table id="tabelProduk" class="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Link</th>
                                <th class="text-center">Map</th>
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
        <div id="modalProduk" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Deskripsi Produk</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        
                    <div class="modal-body pt-4">
                        <form id="formProduk" name="formProduk" action="#" autocomplete="off">
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Nama Produk</span>
                                    <input type="text" name="editnama" placeholder="Masukkan produk" class="form-control" id="editnama">
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <span class="label-text">Harga</span>
                                    <input type="text" name="editharga" placeholder="Masukkan Harga" class="form-control" id="editharga">
                                </label>
                                <div class="form-text">Masukkan harga tanpa tanda titik (contoh: 50000)</div>
                            </div>
        
                            <div class="form-group">
                                <span class="label-text text-md-right">Deskripsi</span>
                                <div>
                                    <textarea name="editdeskripsi" class="form-control" placeholder="Masukkan Deskripsi" id="editdeskripsi"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>
                                    <span class="label-text">Link Pesan</span>
                                    <input type="text" name="editlink" placeholder="Masukkan Link pesan" class="form-control" id="editlink">
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <span class="label-text">Lokasi Maps</span>
                                    <input type="text" name="editmaps" placeholder="Masukkan lokasi Maps" class="form-control" id="editmaps">
                                </label>
                            </div>
        
                            <div class="form-group">
                                <span class="label-text text-md-right">Masukkan Gambar</span>
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" id="image-produk" style="background-image: url({{ asset('assets/img/blank2.png') }})">
                                    <div class="image-input-wrapper w-200px h-200px" style="background-image: url({{ asset('assets/img/blank2.png') }})"></div>
                                    <label class="btn btn-rounded btn-default mb-3 shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
                                        <i class="fas fa-plus"></i>
                                        <input type="file" name="produkimg" id="produkimg" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="produkimg_remove" />
                                    </label>
                                    <span class="btn btn-rounded btn btn-warning mb-3 shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Produk">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                    <span class="btn btn-rounded btn btn-danger mb-3 shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Produk">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
        
                            <input type="hidden" name="produk_id" id="produk_id" value="">
                        </form>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-rounded btn-success" id="saveBtn">Ubah</button>
                        <button type="button" class="btn btn-sm btn-rounded btn-outline-secondary" data-dismiss="modal">Cancel</button>
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

    @include('admin.content.js.lapak')
@endsection
