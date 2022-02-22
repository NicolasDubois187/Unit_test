<?php

namespace Campus\UnitTest;

use Faker\Factory as Faker;
use Campus\UnitTest\Models\Room;

require_once '../vendor/autoload.php';
// phpinfo();
// die;

$faker = Faker::create('fr_FR');
// generate data by calling methods
$room = new Room(
    $faker->name(),
    $faker->words(4, true)
);

echo $room;
