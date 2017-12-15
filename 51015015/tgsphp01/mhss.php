<?php

/**
 *
 */
class mhss
{
  private $nama;
  private $email;
  private $sex;
  private $warna;
  private $pros;
  private $data =[
    '51015010'=>['nama'=>'Ivan Darmawan','email'=>'ivandarmawan_@kharisma.ac.id','sex'=>'lk','warna'=>'a264df','pros'=>'002'],
    '51015011'=>['nama'=>'Jessica Chandra','email'=>'jessicachandra_@kharisma.ac.id','sex'=>'pr','warna'=>'768efc','pros'=>'003'],
    '51015012'=>['nama'=>'Kenny','email'=>'kenny_@kharisma.ac.id','sex'=>'lk','warna'=>'ffeb69','pros'=>'001'],
    '51015013'=>['nama'=>'Mesa','email'=>'mesa_@kharisma.ac.id','sex'=>'pr','warna'=>'91ee98','pros'=>'002'],
    '51015014'=>['nama'=>'Michael Umboh','email'=>'michaelumboh_@kharisma.ac.id','sex'=>'lk','warna'=>'e5e186','pros'=>'004'],
    '51015015'=>['nama'=>'Regina Lordianto','email'=>'reginalordianto_@kharisma.ac.id','sex'=>'pr','warna'=>'fc7677','pros'=>'001']
  ];

  function mhss($nim){
    $this->nama = $this->data[$nim]['nama'];
    $this->email = $this->data[$nim]['email'];
    $this->sex = $this->data[$nim]['sex'];
    $this->warna = $this->data[$nim]['warna'];
    $this->pros = new prodi($this->data[$nim]['pros']);
  }

  function getpros(){
    return $this->pros;
  }

  function getnama(){
    return $this->nama;
  }

  function getemail(){
    return $this->email;
  }

  function getsex(){
    if ($this->sex != ("lk")){
      $sex = "perempuan";
    }
    else
    {
      $sex = "laki-laki";
    }
    return $sex;
  }

  function getwarna(){
    return $this->warna;
  }
}
?>
