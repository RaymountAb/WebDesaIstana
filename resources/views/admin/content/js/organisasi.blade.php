<script>
    const assetUrl = "{{ asset('images/organisasi') }}";
    const assetBlank = "{{ asset('assets/img/blank2.png') }}";
    $('document').ready(function() {
        var table = $('#tabelOrganisasi').DataTable({
            processing: false,
            serverSide: true,
            searching: false,
            info: false,
            order: false,
            paging: false,
            ajax: "{{ route('organisasi.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'sotk',
                    name: 'sotk',
                    render: function(data, type, row) {
                        if (data !== null && data !== '') {
                            return '<img class="img-thumbnail mw-125px" src="' +
                                assetUrl +
                                '/' + data +
                                '" alt="' + data + '"/>';
                        } else {
                            return '<img class="img-thumbnail" src="' +
                                assetBlank + '" alt="__blank"/>';
                        }
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'anggota',
                    name: 'anggota',
                    render: function(data, type, row) {
                        if (data !== null && data !== '') {
                            return '<img class="img-thumbnail mw-125px" src="' +
                                assetUrl +
                                '/' + data +
                                '" alt="' + data + '"/>';
                        } else {
                            return '<img class="img-thumbnail" src="' +
                                assetBlank + '" alt="__blank"/>';
                        }
                    },
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

        // open modal edit
        $('body').on('click', '.editOrganisasi', function() {
            var organisasi_id = $(this).data("id");
            $.get("{{ route('organisasi.index') }}" + '/' + organisasi_id + '/edit', function(data) {
                $('#saveBtn').val("update");
                $('#modalOrganisasi').modal('show');
                $('#organisasi_id').val(data.id);
                $('#editnama').val(data.nama);
                let images = document.getElementsByClassName("image-input-wrapper");
                let imageUrl = "url(" + assetUrl + "/" + data.sotk + ")";
                if (data.sotk !== null && data.sotk !== '') {
                    document.getElementById("image-sotk").classList.remove(
                        "image-input-empty");
                } else {
                    document.getElementById("image-sotk").classList.add("image-input-empty");
                }
                images[0].style.backgroundImage = imageUrl;
                let images2 = document.getElementsByClassName("image-input-wrapper");
                let imageUrl2 = "url(" + assetUrl + "/" + data.anggota + ")";
                if (data.anggota !== null && data.anggota !== '') {
                    document.getElementById("image-anggota").classList.remove(
                        "image-input-empty");
                } else {
                    document.getElementById("image-anggota").classList.add("image-input-empty");
                }
                images2[0].style.backgroundImage = imageUrl2;
            })
        });

        // update data
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            var form = new FormData($('#formOrganisasi')[0]);
            var konten_id = $('#organisasi_id').val();
            form.append('sotkimg', $('#sotkimg')[0].files[0]);
            form.append('anggotaimg', $('#anggotaimg')[0].files[0]);
            $.ajax({
                data: form,
                url: "{{ route('organisasi.store') }}",
                type: "POST",
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#formOrganisasi').trigger("reset");
                    $('#modalOrganisasi').modal('hide');
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



    });
</script>
