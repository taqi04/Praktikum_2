<?php 
class Mahasiswa {
    //properti
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;


    // method
    function __construct($_nim, $_nama)
    {
        $this->nim = $_nim;
        $this->nama = $_nama;

    }
    function predikat_ipk(){
        if($this->ipk < 2.0){  
            return 'Cukup';
        } elseif ($this-> ipk >= 2.0 && $this->ipk <3.0){
            return 'Baik';
        } elseif ($this-> ipk >= 3.0 && $this->ipk <3.75){
            return 'Memuaskan';

        }elseif ($this-> ipk >= 3.75 && $this->ipk <= 4.0){
            return 'Cumlaude';
        }else {
            return 'Nilai DILUAR NALAR';
        }
    }
}
//instance object
$mahasiswa2 = new Mahasiswa(110223270,'Taqi Rabbani');
$mahasiswa2->ipk = 4.0;
$mahasiswa2->prodi = 'Teknik Informatika';
$mahasiswa2->angkatan = 2023;
?>