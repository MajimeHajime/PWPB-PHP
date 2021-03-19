<?php

include 'KelompokMakan.php';
class Manusia extends KelompokMakan
{
    public $jenis_kelamin;
    public $nama;
    public $tanggal_lahir;

    public function bersuara()
    {
        return $this->nama;
    }
    public function usia()
    {
        $date = date_create_from_format("d/m/Y", $this->tanggal_lahir);
        $tahunLahir = $date->format('Y');
        $tahunSekarang = date('Y');
        $usia = $tahunSekarang - $tahunLahir;
        return $usia;
    }
}
