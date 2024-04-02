<script>
    const assetUrl = "{{ asset('images/produk') }}";
    const assetBlank = "{{ asset('assets/img/blank2.png') }}";
    $('document').ready(function() {
        var table = $('#tabelProduk').DataTable({
            processing: false,
            serverSide: true,
            searching: false,
            info: false,
            order: false,
            paging: false,
            ajax: "{{ route('lapak.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, row) {
                        if (data !== null && data !== '') {
                            return '<img class="img-thumbnail mw-125px" src="' +
                                assetUrl +
                                '/' + data +
                                '" alt="' + data + '"/>';
                        } else {
                            return '<div class="symbol symbol-50px"><img class="img-thumbnail" src="' +
                                assetBlank + '" alt="__blank"/></div>';
                        }
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'harga',
                    name: 'harga',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'description',
                    name: 'description',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'link',
                    name: 'link',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'map',
                    name: 'map',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        // csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#createNewProduk').click(function() {
            document.getElementById("image-produk").classList.add("image-input-empty");
            document.getElementById("image-produk").classList.remove("image-input-changed");
            $('#saveBtn').val("Simpan Produk");
            $('#produk_id').val('');
            let images = document.getElementsByClassName("image-input-wrapper");
            let imageUrl = "url({{ asset('assets/img/blank2.png') }})";
            images[0].style.backgroundImage = imageUrl;
            $('#formProduk').trigger("reset");
            $('#modalProduk').modal('show');
        });

        // open modal edit
        $('body').on('click', '.editLapak', function() {
            var produk_id = $(this).data("id");
            $.get("{{ route('lapak.index') }}" + '/' + produk_id + '/edit', function(data) {
                $('#saveBtn').val("update");
                $('#modalProduk').modal('show');
                $('#produk_id').val(data.id);
                $('#editnama').val(data.nama);
                $('#editharga').val(data.harga);
                $('#editdeskripsi').val(data.description);
                $('#editlink').val(data.link);
                $('#editmaps').val(data.map);
                let images = document.getElementsByClassName("image-input-wrapper");
                let imageUrl = "url(" + assetUrl + "/" + data.image + ")";
                if (data.image !== null && data.image !== '') {
                    document.getElementById("image-produk").classList.remove(
                        "image-input-empty");
                } else {
                    document.getElementById("image-produk").classList.add("image-input-empty");
                }
                images[0].style.backgroundImage = imageUrl;
            })
        });

        // update data
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            var form = new FormData($('#formProduk')[0]);
            var produk_id = $('#produk_id').val();
            form.append('produkimg', $('#produkimg')[0].files[0]);
            $.ajax({
                data: form,
                url: "{{ route('lapak.store') }}",
                type: "POST",
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#formProduk').trigger("reset");
                    $('#modalProduk').modal('hide');
                    table.draw();
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses!',
                        text: 'Data berhasil diperbarui.',
                        showConfirmButton: false,
                        timer: 1500 // Durasi alert
                    });
                },
                error: function(data) {
                    console.log('Error:', data);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi Kesalahan!',
                        showConfirmButton: false,
                        timer: 1500 // Durasi alert
                    });
                }
            });
        });


        // delete data
        $('body').on('click', '.deleteLapak', function() {
            var produk_id = $(this).data("id");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('lapak.store') }}" + '/' +
                            konten_id,
                        success: function(data) {

                            Swal.fire({
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 2000
                            })
                            table.draw();
                        },
                        error: function(data) {
                            swal_error();
                        }
                    });
                }
            })
        });

    });
</script>
