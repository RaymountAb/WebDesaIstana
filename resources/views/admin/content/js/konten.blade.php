<script>
    const assetUrl = "{{ asset('assets/img/konten') }}";

    const form = document.getElementById('formKonten');

    // csrf token
    /*$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });*/

    $('#createnewcontent').click(function() {
        $.ajax({
            url: 'get_modal_content.php', // Ganti dengan URL yang sesuai
            type: 'GET',
            success: function(response) {
                $('#modal-content').html(response); // Memasukkan konten modal dari response AJAX
                $('#modal-konten').modal('show'); // Menampilkan modal setelah konten dimuat
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Output pesan error dari server
                // Tambahkan kode untuk menampilkan pesan error atau melakukan aksi lainnya
            }
        });
    });
</script>
