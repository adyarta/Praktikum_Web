<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpustakaan</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: #F0FFFF;
            font-family: Arial, sans-serif;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px;
        }

        h1{
            color: white;
            background-color: skyblue;
            padding: 20px;
            margin-top: 0px;
            text-align: center;
        }

        th{
            text-align: center;
            background-color: #f2f2f2;
        }

        table, th, td {
            border: 1px solid black;
        }

        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
include 'Student.php';
include 'Teacher.php';
include 'Buku.php';
include 'PeminjamanBuku.php';

// Data Student
$students = [
    new Student("Budi Setiawan", 20, "123456"),
    new Student("Ani Rahayu", 22, "654321"),
    new Student("Ahmad Gunawan", 21, "987654"),
    new Student("Dewi Permata", 23, "456789"),
    new Student("Eko Prabowo", 22, "567890"),
    new Student("Citra Lestari", 21, "345678"),
    new Student("Rudi Santoso", 20, "234567")
];

// Data Teacher
$teachers = [
    new Teacher("Dr. Iwan Susilo", 40, "789012"),
    new Teacher("Prof. Rina Wijaya", 45, "890123"),
    new Teacher("Dr. Agung Prabowo", 42, "901234"),
    new Teacher("Prof. Lina Indah", 50, "123789"),
    new Teacher("Dr. Budi Raharjo", 44, "234890"),
    new Teacher("Prof. Desi Kusuma", 48, "345901"),
    new Teacher("Dr. Adi Nugroho", 41, "456123")
];

// Membuat objek buku
$buku1 = new Buku("Harry Potter", "J.K. Rowling");
$buku2 = new Buku("Lord of the Rings", "J.R.R. Tolkien");
$buku3 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer");
$buku4 = new Buku("Laskar Pelangi", "Andrea Hirata");

// Membuat objek peminjaman buku
$peminjaman = new PeminjamanBuku();

// Melakukan peminjaman dan pengembalian buku
$peminjaman->pinjamBuku($buku1);
$peminjaman->pinjamBuku($buku2);
$peminjaman->daftarBukuPinjam();

$peminjaman->kembalikanBuku($buku1);
$peminjaman->daftarBukuPinjam();
?>

<h1>Daftar Peminjaman Buku</h1>
<h2>Data Student</h2>
<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>NIM</th>
    </tr>
    <?php foreach ($students as $student) : ?>
        <tr>
            <td><?php echo $student->getNama(); ?></td>
            <td><?php echo $student->getUmur(); ?></td>
            <td><?php echo $student->getNIM(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Data Teacher</h2>
<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>NIP</th>
    </tr>
   <?php foreach ($teachers as $teacher) : ?>
        <tr>
            <td><?php echo $teacher->getNama(); ?></td>
            <td><?php echo $teacher->getUmur(); ?></td>
            <td><?php echo $teacher->getNIP(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Informasi Buku yang Dipinjam</h2>
<table>
    <tr>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Status</th>
    </tr>
    <?php
    foreach ($peminjaman->daftarBukuPinjam() as $buku) {
        echo "<tr>";
        echo "<td>{$buku->getJudul()}</td>";
        echo "<td>{$buku->getPengarang()}</td>";
        echo "<td>{$buku->getStatus()}</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
