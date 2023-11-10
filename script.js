function tampilkanNama() {
    var namaInput = document.getElementById('nama').value;
    var haloH1 = document.querySelector('#welcome h1');
    haloH1.textContent = 'Hallo, ' + namaInput + ' Selamat datang di Dewa Otomotif!';

    // Sembunyikan elemen input
    document.getElementById('labelNama').style.display = 'none';
    document.getElementById('nama').style.display = 'none';
    document.getElementById('submitBtn').style.display = 'none';
}
