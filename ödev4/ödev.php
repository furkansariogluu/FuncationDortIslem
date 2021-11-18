<?php

class DortIslem{

  

    
    function topla($sayi1, $sayi2)
    {
    return "Toplama Fonksiyonu: " . $sayi1 + $sayi2 . "<br>";
    }

    function cikart($sayi1, $sayi2)
    {
    echo "Çıkarma Fonksiyonu:" . ($sayi1 - $sayi2) . "<br>";
    }


    function bol($sayi1, $sayi2)
    {
    echo "Bölme Fonksiyonu: " . $sayi1 / $sayi2 . "<br>";
    }

    function carp($sayi1, $sayi2)
    {
    echo "Çarpma Fonksiyonu:" . ($sayi1 * $sayi2) . "<br>";
    }

    }

    $DortIslem = new DortIslem;



    echo $sonuc = DortIslem->topla(30, 2);

    $DortIslem->cikart(30,2);

    $DortIslem->bol(30,2);

    $DortIslem->carp(30,2);

  
   


    






?>




class OnlisansOgrenci extends Ogrenci{


private $nothesapla1;

public function __construct($name,$surname,$vize,$final,$nothesapla1)
{

    parent::__construct($name,$surname,$vize,$final);
    $this->nothesapla1=$nothesapla1;
    
}



function getNotHesapla1()
{
    return $this->nothesapla1;

}

function setNotHesapla1($newNotHesapla1)
{
    return $this->nothesapla1=$newNotHesapla1;

}


public function showInfo()
{
    parent::showInfo();
    echo "NOT ORTALAMASI:". $this->nothesapla1   . "<br>";
    
    
    
}

}


$OnlisansOgrenci1=new OnlisansOgrenci("Furkan","SARIOĞLU",80,90);


$OnlisansOgrenci1->setNotHesapla1(85);

$OnlisansOgrenci1->showInfo();

//echo $OnlisansOgrenci1->setNot1();


//$OnlisansOgrenci1->showInfo();
