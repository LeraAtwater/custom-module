<?php

namespace Drupal\module_hero\Controller;

/**
 * This is the hero controller
 */

class HeroController {

  public function heroList() {

    $heroes = [
      ['name' => 'Wonder Woman'],
      ['name' => 'Hulk'],
      ['name' => 'Black Widow'],
      ['name' => 'Iron Man'],
      ['name' => 'Bugs Bunny'],
      ['name' => 'Daredevil'],
      ['name' => 'Captain Marvel'],
      ['name' => 'Shuri'],
      ['name' => 'Thunder']
    ];

    $ourHeroes = '';
    foreach ($heroes as $hero) {
      $ourHeroes .= '<li>' . $hero['name'] . '</li>';
    }

    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . $ourHeroes . '</ol>',
    ];

  }
}