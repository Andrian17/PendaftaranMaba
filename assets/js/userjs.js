const flashData = $('#flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Data Mahasiswa ',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data mahasiswa akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// AUTH
  // MENDAFTAR
  $('#mendaftar').on('show.bs.modal',
    function (e) {
      // verify username
      $('.username').keyup(function () {
        var username = $('.username').val();

        $.ajax({
          url: base_url + '/ajax/cekusernamedaftar/' + username,
          type: 'POST',
          success: function (data) {
            if (data != "") {
              $('#alertdaftar').text(data);
              $('#alertdaftar').removeAttr('style');
              $('#daftar').attr('disabled', true);
            } else {
              $('#alertdaftar').text(data);
              $('#alertdaftar').attr('style', 'display: none');
              $('#daftar').removeAttr('disabled');
            }
          }
        })
        .done(function () {
          console.log("success");
        })
        .fail(function () {
          console.log("error");
        })
        .always(function () {
          console.log("complete");
        });
      });

      // verify password
      $('#password2').keyup(function () {
        var password = $('#password1').val();
        var password2 = $('#password2').val();

        if (password != password2) {
          $('#alertdaftar').text('Password dan konfirmasi tidak sama!');
          $('#alertdaftar').removeAttr('style');
          $('#daftar').attr('disabled', true);
        } else {
          $('#alertdaftar').attr('style', 'display: none');
          $('#alertdaftar').text('');
          $('#daftar').removeAttr('disabled');
        }
      });
    })