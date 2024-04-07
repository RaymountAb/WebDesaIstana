<script>
    const assetUrl = "{{ asset('images/konten') }}";
    const assetBlank = "{{ asset('assets/img/blank2.png') }}";
    $('document').ready(function() {
        var table = $('#tabelKonten').DataTable({
            processing: false,
            serverSide: true,
            searching: false,
            info: false,
            order: false,
            paging: false,
            ajax: "{{ route('konten.index') }}",
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
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'content',
                    name: 'content',
                    render: function(data, type, row) {
                        if (type === 'display') {
                            if (data.length > 100) {
                                return data.substr(0, 100) +
                                    '... <button class="btn btn-link read-more"><i class="fas fa-plus-circle"></i> Read More</button>';
                            } else {
                                return data;
                            }
                        } else {
                            return data;
                        }
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        // Event listener untuk menampilkan konten lengkap saat tombol "Read More" ditekan
        $('#tabelKonten').on('click', '.read-more', function() {
            var rowData = table.row($(this).closest('tr')).data();
            // Tampilkan konten lengkap dalam modal atau di tempat lain sesuai kebutuhan
            $('#modalContent .modal-body').html(rowData.content);
            $('#modalContent').modal('show');
        });

        // csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#createNewKonten').click(function() {
            document.getElementById("image-konten").classList.add("image-input-empty");
            document.getElementById("image-konten").classList.remove("image-input-changed");
            $('#saveBtn').val("Simpan Konten");
            $('#konten_id').val('');
            let images = document.getElementsByClassName("image-input-wrapper");
            let imageUrl = "url({{ asset('assets/img/blank2.png') }})";
            images[0].style.backgroundImage = imageUrl;
            $('#formKonten').trigger("reset");
            $('#modalKonten').modal('show');
        });

        // open modal edit
        $('body').on('click', '.editKonten', function() {
            var konten_id = $(this).data("id");
            $.get("{{ route('konten.index') }}" + '/' + konten_id + '/edit', function(data) {
                $('#saveBtn').val("update");
                $('#modalKonten').modal('show');
                $('#konten_id').val(data.id);
                $('#editjudul').val(data.title);
                $('#editdeskripsi').val(data.content);
                let images = document.getElementsByClassName("image-input-wrapper");
                let imageUrl = "url(" + assetUrl + "/" + data.image + ")";
                if (data.image !== null && data.image !== '') {
                    document.getElementById("image-konten").classList.remove(
                        "image-input-empty");
                } else {
                    document.getElementById("image-konten").classList.add("image-input-empty");
                }
                images[0].style.backgroundImage = imageUrl;
            })
        });

        // update data
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            var form = new FormData($('#formKonten')[0]);
            var konten_id = $('#konten_id').val();
            form.append('kontenimg', $('#kontenimg')[0].files[0]);
            $.ajax({
                data: form,
                url: "{{ route('konten.store') }}",
                type: "POST",
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#formKonten').trigger("reset");
                    $('#modalKonten').modal('hide');
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
        $('body').on('click', '.deleteKonten', function() {
            var konten_id = $(this).data("id");
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
                        url: "{{ route('konten.store') }}" + '/' +
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
