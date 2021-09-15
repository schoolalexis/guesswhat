<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardTest extends TestCase
{

  public function testName()
  {
    $card = new Card('as', 'trefle');
    $this->assertEquals('as', $card->getName());
    $card = new Card('2', 'trefle');
    $this->assertEquals('2', $card->getName());

  }

  public function testColor()
  {
    $card = new Card('as', 'trefle');
    $this->assertEquals('trefle', $card->getColor());
    $card = new Card('as', 'pique');
    $this->assertEquals('pique', $card->getColor());
  }

  public function testCompareSameCard()
  {
    $card1 = new Card('as', 'trefle');
    $card2 = new Card('as', 'trefle');
    $this->assertEquals(0, CardGame32::compare($card1,$card2));
  }

  public function testCompareSameNameNoSameColor()
  {
    // TODO
    // La fonction 'compare' ne fonctionne que pour '.getName()'
    $card1 = new Card('as', 'trefle');
    $card2 = new Card('as', 'pique');
    $this->assertEquals(1, CardGame32::compare($card1,$card2));
  }

  public function testCompareNoSameCardSameColor()
  {
    $card1 = new Card('8', 'pique');
    $card2 = new Card('as', 'pique');
    $this->assertEquals(-1, CardGame32::compare($card1,$card2));
  }

  public function testCompareNoSameNameNoSameColor()
  {
    $card1 = new Card('8', 'trefle');
    $card2 = new Card('as', 'pique');
    $this->assertEquals(-1, CardGame32::compare($card1,$card2));
  }



  public function testToString()
  {
    //TODO vérifie que la représentation textuelle d'une carte est correcte

    $card = new Card('as', 'pique');
    //$card1 = new Card('as', 'trefle');
    $this->assertEquals($card, $card->__toString());
  }

}
