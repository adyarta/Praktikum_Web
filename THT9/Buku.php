<?php

class Buku
{
    private $judul;
    private $penulis;
    private $status;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->status = "Tersedia"; // Set status awal saat buku dibuat
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPengarang() {
        return $this->penulis;
    }

    public function getStatus() {
        return $this->status;
    }

    // Menambahkan metode setter untuk mengatur status buku
    public function setStatus($status) {
        $this->status = $status;
    }
}
