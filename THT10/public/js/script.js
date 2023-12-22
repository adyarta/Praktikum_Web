// Mendefinisikan array untuk menyimpan data login
var dataLogin = [];

// Fungsi untuk menangani pengiriman formulir
function submitForm() {
    // Mendapatkan nilai dari input nama, password, dan gambar
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var profilePicture = document.getElementById("profilePicture").files[0];

    // Memeriksa apakah kedua input telah diisi
    if (!username || !password || !profilePicture) {
        alert("Harap isi semua field!");
        return;
    }

    // Simulasi unggahan gambar (gantilah dengan kode nyata untuk menyimpan gambar di server)
    var imageUrl = uploadImage(profilePicture);

    // Membuat objek untuk menyimpan data login
    var user = {
        username: username,
        password: password,
        profilePicture: imageUrl
    };

    // Menambahkan objek ke dalam array dataLogin
    dataLogin.push(user);

    // Membersihkan nilai input setelah pengiriman formulir
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("profilePicture").value = "";

    console.log("Data Login:", dataLogin);

    // Mengarahkan pengguna kembali ke halaman utama
    window.location.href = "index.html";
        alert("Anda Berhasil join member"); 
}

// Simulasi unggahan gambar (gantilah dengan kode nyata untuk menyimpan gambar di server)
function uploadImage(imageFile) {
    // Implementasi unggahan gambar di sini (misalnya menggunakan AJAX atau form data)
    // ...
    // Return URL gambar setelah diunggah
    return "path/to/uploaded/image.jpg";
}