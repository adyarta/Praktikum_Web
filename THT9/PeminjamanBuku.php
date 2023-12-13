<?php

class PeminjamanBuku
{
    private $daftarBuku = [];

    public function pinjamBuku(Buku $buku) {
        $buku->setStatus("Dipinjam");
        $this->daftarBuku[] = $buku;
    }

    public function kembalikanBuku(Buku $buku) {
        $buku->setStatus("Tersedia");
        // Menghapus buku dari daftarBuku jika ada
        $index = array_search($buku, $this->daftarBuku);
        if ($index !== false) {
            unset($this->daftarBuku[$index]);
        }
    }

    public function daftarBukuPinjam() {
        return $this->daftarBuku;
    }
}
