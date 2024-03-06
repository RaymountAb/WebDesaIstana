@extends('admin.main')

@section('container')
    <main class="main--container">
        <!-- Page Header Start -->
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page--title h5">Post</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Main Content Start -->
        <section class="main--content">
            <div class="panel">
                <!-- Records Header Start -->
                <div class="records--header">
                    <div class="title fa fa-book">
                        <h3 class="h3">Konten Desa</h3>
                    </div>
                    <div class="actions">
                        <a href="#" class="addProduct btn btn-lg btn-rounded btn-warning" id="createnewcontent">Tambah
                            Konten</a>
                    </div>
                </div>
                <!-- Records Header End -->
            </div>

            <div class="panel">
                <!-- Records List Start -->
                <div class="records--list">
                    <table id="recordsListView">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="not-sortable">Gambar</th>
                                <th>Judul</th>
                                <th>Teks</th>
                                <th class="not-sortable">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="btn-link">1</a>
                                </td>
                                <td>
                                    <a href="#" class="btn-link">
                                        <img src="assets/admin/assets/img/products/thumb-80x60.jpg" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="btn-link">Baby Dress</a>
                                </td>
                                <td>
                                    <a href="#" class="btn-link">Baby Products</a>
                                </td>
                                <td>
                                    <div class="dropleft">
                                        <a href="#" class="btn-link" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-v"></i></a>

                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Records List End -->
            </div>
        </section>
        <!-- Main Content End -->

        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
        </footer>
        <!-- Main Footer End -->
    </main>


    <!-- Large Modal Start -->
    <div id="modal-konten" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Konten</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label">Judul:</label>
                        <div class="col-md-9">
                            <input type="text" name="judul" class="form-control" required id="judul"
                                placeholder="Judul">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="teks_artikel" class="col-md-3 col-form-label">Teks Artikel:</label>
                        <div class="col-md-9">
                            <textarea name="teks_artikel" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gambar" class="col-md-3 col-form-label">Gambar:</label>
                        <div class="col-md-9">
                            <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true"
                                id="image-logo"
                                style="background-image: url({{ asset('assets/media/avatars/blank2.png') }})">
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{ asset('assets/media/avatars/blank2.png') }}"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input type="file" name="gambar" id="gambar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="logo_remove" />
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Large Modal End -->


    @include('admin.content.js.konten')
@endsection

@push('other-script')
    @include('admin.content.js.konten')
@endpush
