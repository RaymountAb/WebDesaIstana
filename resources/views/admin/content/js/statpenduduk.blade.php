<script type="text/javascript">
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
                        name: 'lelaki'
                    },
                    {
                        data: 'perempuan',
                        name: 'perempuan'
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

    });
</script>