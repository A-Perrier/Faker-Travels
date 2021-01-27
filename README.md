# Faker extension - Travels

```php
use Faker\Factory;

$faker = Factory::create();
$faker->addProvider(new APerrier\Faker\Travel($faker));

$faker->hike();
$faker->length("km");
$faker->duration();
$faker->difficulty();
$faker->way();
$faker->coordinates();
$faker->mountainImg();

```