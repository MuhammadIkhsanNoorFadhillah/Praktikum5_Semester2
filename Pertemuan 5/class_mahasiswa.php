<?php
class mahasiswa {
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

  function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }


    function predikat_ipk() {
        if ($this->ipk < 2.0) {
            return "cukup";
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return "baik";
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
            return "memuaskan";
        } elseif ($this->ipk >= 3.75 && $this->ipk < 4.0) {
            return "Cum laude";
        }
    }
}