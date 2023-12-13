<?php

class Student
{
    private $nama;
    private $umur;
    private $nim;

    public function __construct($nama, $umur, $nim)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->nim = $nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getNIM()
    {
        return $this->nim;
    }

    public function display()
    {
        echo "Student: {$this->nama}, Umur: {$this->umur}, NIM: {$this->nim}\n";
    }
}
