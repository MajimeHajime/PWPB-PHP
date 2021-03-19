<?php
class KelompokMakan
{
    public $makanan;
    public function jenis()
    {
        $makanan = $this->makanan;
        switch ($makanan) {
            case 'Capcay':
                return 'Omnivora';
                break;
            case 'Daging':
                return 'Karnivora';
                break;
            case 'Rumput':
                return 'Herbivora';
                break;
        }
    }
}
