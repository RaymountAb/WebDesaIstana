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
                    <table id="tabelOrganisasi" class="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Organisasi</th>
                                <th class="text-center">SOTK</th>
                                <th class="text-center">Gambar Anggota</th>
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
        <div id="modalOrganisasi" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Struktur Organisasi</h5>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body pt-4">
                        <form id="formOrganisasi" name="formOrganisasi" action="#" autocomplete="off">
                            <div class="form-group">
                                <label>
                                    <span class="label-text">Nama Organisasi</span>
                                    <input type="text" name="editnama" placeholder="Masukkan Nama Organisasi" class="form-control" id="editnama">
                                </label>
                            </div>

                            <div class="form-group">
                                <span class="label-text text-md-right">Masukkan SOTK</span>
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" id="image-sotk" style="background-image: url({{ asset('assets/img/blank2.png') }})">
                                    <div class="image-input-wrapper w-200px h-200px" style="background-image: url({{ asset('assets/img/blank2.png') }})"></div>
                                    <label class="btn btn-rounded btn-default mb-3 shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
                                        <i class="fas fa-plus"></i>
                                        <input type="file" name="sotkimg" id="sotkimg" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="sotkimg_remove" />
                                    </label>
                                    <span class="btn btn-rounded btn btn-warning mb-3 shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel SOTK">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                    <span class="btn btn-rounded btn btn-danger mb-3 shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove SOTK">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>

                            <div class="form-group">
                                <span class="label-text text-md-right">Masukkan Gambar Anggota</span>
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" id="image-anggota" style="background-image: url({{ asset('assets/img/blank2.png') }})">
                                    <div class="image-input-wrapper w-200px h-200px" style="background-image: url({{ asset('assets/img/blank2.png') }})"></div>
                                    <label class="btn btn-rounded btn-default mb-3 shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
                                        <i class="fas fa-plus"></i>
                                        <input type="file" name="anggotaimg" id="anggotaimg" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="anggotaimg_remove" />
                                    </label>
                                    <span class="btn btn-rounded btn btn-warning mb-3 shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Anggota">
                                        <i class="fas fa-exchange-alt"></i>
                                    </span>
                                    <span class="btn btn-rounded btn btn-danger mb-3 shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Anggota">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>

                            <input type="hidden" name="organisasi_id" id="organisasi_id" value="">
    
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

    @include('admin.content.js.organisasi')
@endsection
