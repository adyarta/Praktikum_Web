<?php

class Teacher
{
    private $nama;
    private $umur;
    private $nip;

    public function __construct($nama, $umur, $nip)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->nip = $nip;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getNIP()
    {
        return $this->nip;
    }

    public function display()
    {
        echo "Teacher: {$this->nama}, Umur: {$this->umur}, NIP: {$this->nip}\n";
    }
}
