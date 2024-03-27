<script>
    $('document').ready(function() {
        var table = $('#tabelStatPen').DataTable({
            processing: false,
            serverSide: true,
            searching: false,
            info: false,
            order: false,
            paging: false,
            ajax: "{{ route('statpenduduk.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'daerah',
                    name: 'daerah'
                },
                {
                    data: 'lelaki',
                    name: 'lelaki',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'perempuan',
                    name: 'perempuan',
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
        $('body').on('click', '.editStatPen', function() {
            var daerah_id = $(this).data('id');
            $.get("{{ route('statpenduduk.index') }}" + '/' + daerah_id + '/edit', function(data) {
                $('#modalStatPenduduk').modal('show');
                $('#daerah_id').val(data.id);
                $('#editlelaki').val(data.lelaki);
                $('#editperempuan').val(data.perempuan);
            });
        });

        // update data
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            var form = new FormData($('#formeditPenduduk')[0]);
            var daerah_id = $('#daerah_id').val();
            $.ajax({
                data: form,
                url: "{{ route('statpenduduk.update', ['statpenduduk' => ':statpenduduk']) }}"
                    .replace(':statpenduduk', daerah_id),
                type: "PATCH",
                data: {
                    daerah_id: daerah_id,
                    lelaki: $('#editlelaki').val(),
                    perempuan: $('#editperempuan').val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#formeditPenduduk').trigger("reset");
                    $('#modalStatPenduduk').modal('hide');
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
                    })
                }
            });
        });



    });
</script>
