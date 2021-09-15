<?php

namespace App\Core;

/**
 * Class CardGame32 : un jeu de cartes.
 * @package App\Core
 */
class CardGame32
{

   const ORDER_COLORS=['trefle'=> 4, 'coeur'=> 3, 'pique'=> 2, 'carreau'=> 1];
   const ORDER_CARDS=['as'=> 8, 'roi'=> 7, 'dame'=> 6, 'valet'=> 5, '10'=> 4, '9'=>  3, '8'=> 2, '7'=> 1 ];

  /**
   * @var $cards array a array of Cards
   */
  private $cards;

  /**
   * Guess constructor.
   * @param array $cards
   */
  public function __construct(array $cards)
  {
    $this->cards = $cards;
  }

  /**
   * Brasse le jeu de cartes
   */
  public function shuffle()
  {
    // TODO (voir les fonctions sur les tableaux)
  }

  // TODO ajouter une méthode reOrder qui remet le paquet en ordre


   /**
    * Permet de comparer deux cartes données en entrée
    * @param $c1 Card , $c2 Card
    * @return int
    */
  public static function compare(Card $c1, Card $c2) : int
  {
    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());

    $c1Color = strtolower($c1->getColor());
    $c2Color = strtolower($c2->getColor());

    if ($c1Name === $c2Name && $c1Color === $c2Color) {
        return 0;
    } elseif ($c1Name === $c2Name) {
        return($c1Color > $c2Color)? +1 : -1;
    };
    return ($c1Name > $c2Name)? +1 : -1;
  }

  /**
   * Créer un deck de 32 cartes
   * @return string
   */
  public static function factoryCardGame32() : CardGame32 {
    $cardGame = new CardGame32([
    new Card('as', 'trefle'), new Card('as', 'coeur'), new Card('as', 'pique'), new Card('as', 'carreau'),
    new Card('roi', 'trefle'), new Card('roi', 'coeur'), new Card('roi', 'pique'), new Card('roi', 'carreau'),
    new Card('dame', 'trefle'), new Card('dame', 'coeur'), new Card('dame', 'pique'), new Card('dame', 'carreau'),
    new Card('valet', 'trefle'), new Card('valet', 'coeur'), new Card('valet', 'pique'), new Card('valet', 'carreau'),
    new Card('10', 'trefle'), new Card('10', 'coeur'), new Card('10', 'pique'), new Card('10', 'carreau'),
    new Card('9', 'trefle'), new Card('9', 'coeur'), new Card('9', 'pique'), new Card('9', 'carreau'),
    new Card('8', 'trefle'), new Card('8', 'coeur'), new Card('8', 'pique'), new Card('8', 'carreau'),
    new Card('7', 'trefle'), new Card('7', 'coeur'), new Card('7', 'pique'), new Card('7', 'carreau')
    ]);

    return $cardGame;
  }

  // TODO manque PHPDoc
  public function getCard($index) : Card {
    // TODO naïf
    return  $this->cards[$index];
  }

}

