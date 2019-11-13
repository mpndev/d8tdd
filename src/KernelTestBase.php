<?php

namespace MPNDEV\D8TDD;

use Faker\Factory as ThirdPartyFactory;
use MPNDEV\D8TDD\Factory\Factory;
use \Drupal\KernelTests\Core\Entity\EntityKernelTestBase;
use MPNDEV\D8TDD\Http\JsonRequest;

abstract class KernelTestBase extends EntityKernelTestBase {

  /** @var \Faker\Generator $faker */
  public $faker;

  public function setUp() {
    parent::setUp();
    $this->faker = ThirdPartyFactory::create();
  }

  public function factory($concrete_class, $quantity = 1) {
    return Factory::for($concrete_class, $quantity);
  }

  public function jsonRequest($url) {
    return JsonRequest::to($url);
  }

  public function tearDown() {
    parent::tearDown();
  }

}
