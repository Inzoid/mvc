<?php

class About {
    public function index($nama = 'Ikhbal', $pekerjaan = 'Developer') 
    {
        echo "Halo, nama saya $nama, saya adalah $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}