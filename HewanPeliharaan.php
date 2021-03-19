<?php
class HewanPeliharaan
{
    public $nama;
    public $jenis;

    public function bersuara()
    {
        $jenis = $this->jenis;
        switch ($jenis) {
            case 'Kucing':
                return 'Nyan~';
                break;
            case 'Kambing':
                return 'Mee~';
                break;
        }
    }
}
