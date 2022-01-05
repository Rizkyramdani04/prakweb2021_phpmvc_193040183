<?php

class About {
    public function index($nama = 'Ramdani', $pekerjaan = 'Musisi', $umur = 34) 
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan, saya berumur $umur";
    }
    public function page() {
        
        echo 'About/page';
    }
}