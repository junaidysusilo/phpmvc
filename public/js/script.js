$(document).ready(function () {
    $('.tombolTambahData').on('click', function () {
        const url = $('.tampilModalUbah').data('url');
        console.log(url);
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#form-mahasiswa').attr('action', `${url}mahasiswa/tambah`)
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');


    });
    $('.tampilModalUbah').on('click', function () {
        const id = $(this).data('id');
        const url = $(this).data('url');

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('#form-mahasiswa').attr('action', `${url}mahasiswa/ubah`)

        $.ajax({
            url: `${url}mahasiswa/getUbah`,
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (response) {
                $('#nama').val(response.mhs.nama);
                $('#nim').val(response.mhs.nim);
                $('#email').val(response.mhs.email);
                $('#jurusan').val(response.mhs.jurusan);
                $('#id').val(response.mhs.id);
            }
        });
    });


}); 