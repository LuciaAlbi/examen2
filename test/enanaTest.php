<?php

use PHPUnit\Framework\TestCase;

include './src/Enana.php';

class EnanaTest extends TestCase
{


    public function testCreandoEnana()
    {
        #Se probará la creación de enanas vivas, muertas y en limbo y se comprobará tanto la vida como el estado

        $enana = new Enana("maria", 19);
        $this->assertEquals("viva", $enana->getSituacion());
    }
    public function testHeridaLeveVive()
    {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva
        $enana = new Enana("carmencita", 40);
        $enana->heridaLeve();
        $this->assertEquals("viva", $enana->getSituacion());
        $this->assertGreaterThan(0, $enana->getPuntosVida());

    }

    public function testHeridaLeveMuere()
    {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta
        $enana = new Enana("alejandra", 20);
        $enana->heridaLeve();
        $this->assertEquals("muerta", $enana->getSituacion());
        $this->assertLessThan(0, $enana->getPuntosVida());
    }

    public function testHeridaGrave()
    {
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo
        /* $enana = new Enana("pepe",100);
        $enana->heridaGrave();
        $this->assertEquals("limbo", $enana->getSituacion());
        $this->assertEquals(0, $enana->getPuntosVida()); */
    }

    public function testPocimaRevive()
    {
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaNoRevive()
    {
        #Se probará el efecto de administrar una pócima a una Enana en el libo
        #Se tendrá que probar que la vida y situación no ha cambiado

    }

    public function testPocimaExtraLimbo()
    {
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.

    }
}
?>