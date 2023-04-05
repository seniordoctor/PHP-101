<?php
/*
Interface Kullanımı
Arayüzler, abstract sınıflara benzer.

Zorunlu olarak tanımlanması gereken metotları belirtmek için kullanılır.

##  Özellikleri

Soyut methodlar ve sabitler içerebilir.
Sadece public method tanımı yapılabilir.
Aynı sınıf birden fazla interface kullanılabilir.

 */


interface A
{
    public function a();
    public function b();

}

interface B
{
    public function c();
    public function d();

}

// interface'leri implements anahtar sözcüğü ile impelement ediyoruz.
class C implements  A,B
{
    // abstract sınıfların aksine birden fazla interface implement edebiliriz.
    public function a()
    {
    }

    public function b()
    {
    }

    public function c()
    {
    }

    public function d()
    {
    }
}