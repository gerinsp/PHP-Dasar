$(document).ready(function() {
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // memanggil event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('.loader').show();


        // // ajax menggunakan load
        // $('#container').load('ajax/mobil.php?keyword=' + $('#keyword').val());

        $.get('ajax/mobil.php?keyword=' + $('#keyword').val(), function(data) {

            $('#container').html(data);
            $('.loader').hide();
        });
    });
});