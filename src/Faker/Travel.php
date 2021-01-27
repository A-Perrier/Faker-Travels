<?php

namespace APerrier\Faker;

use Faker\Provider\Base;

class Travel extends Base 
{

  const MOUNTAIN_TRAVEL_TYPE = [
    "Chemin ",
    "Parcours ",
    "Traversée ",
    "Détour ",
    "Trek ",
    "Camping ",
    "Voyage ",
    "Bivouac ",
    "Ascension ",
    "Aventure ",
    "Escalade "
  ];

  const MOUNTAIN = [
    "du Jotunheimen",
    "du Mont Ventoux",
    "de l'Everest",
    "de l'Aconcagua",
    "de Denali",
    "du Kilimandjaro",
    "de l'Elbrouz",
    "du Massif Vinson",
    "du Mont Blanc",
    "de Puncak Jaya",
    "du Mont Koscuiszko",
    "du Mont Kenya",
    "du Mont Stanley",
    "du Mont Karisimbi",
    "du Pic d'Orizaba",
    "du Mawenzi",
    "du Mont Erebus",
    "de l'Annapurna",
    "du Mont Fuji",
    "du Pic d'Adam",
    "du Mont Mulhacén",
    "de Snowdon",
    "du Puy de Sancy",
    "du Mont Mézenc", 
    "dans le Puy de Dôme",
    "dans les Alpes",
    "dans les Alpilles",
    "dans les Dinarides",
    "dans les Scandes",
    "dans l'Adrar des Ifoghas",
    "dans le Massif de l'Aïr",
    "dans le Massif du Hoggar",
    "dans le Massif du Piton des Neiges",
    "dans le Massif du Piton de la Fournaise",
    "dans la Cordillère des Andes",
    "dans les Appalaches",
    "aux Monts Bush",
    "dans les Alpes japonaises",
    "dans le Daxue Shan",
    "dans l'Oural"
  ];

  const MOUNTAIN_PICTURES = [
    "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1491904768633-2b7e3e7fede5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1434394354979-a235cd36269d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1456428199391-a3b1cb5e93ab?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8bW91bnRhaW5zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1445363692815-ebcd599f7621?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1501822810445-bba370e517ab?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTZ8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1540390769625-2fc3f8b1d50c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjB8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1456066775592-f14f4ea694a4?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjN8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1535961652354-923cb08225a7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8cGFyYWRpc2V8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1434394566634-da0fa7e334b8?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDl8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1600298882438-de4298571be4?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTN8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1508766206392-8bd5cf550d1c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjB8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1600298881979-9b0c50d7abdf?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODJ8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1514528924113-c419d0fa68ca?ixid=MXwxMjA3fDB8MHxzZWFyY2h8ODh8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1534419234121-27689a5fcd71?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OTV8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1536340278414-a663b833c3dc?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OTZ8fG1vdW50YWluc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1484107567883-cba035591dd9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTA2fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1455156103819-5e305f42b365?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTA3fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1503252549449-3e8751526ec7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTE4fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1437382320143-352a4a540373?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTE5fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1503146905569-77b3a2027f5d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTI4fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1499062767764-01138963c0d7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTMwfHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1482771688899-7687b3b3e618?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTQ0fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1471240946986-2c558419e9d6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTU2fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1474645887926-c7bbdc50c668?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTU5fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1445914897371-974b137e4402?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTcwfHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1462834026679-7c03bf571a67?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTc3fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1514733405485-469c9c24f976?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTg4fHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1470043201067-764120126eb4?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTgxfHxtb3VudGFpbnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1582533635630-72f0452e16f5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8amFwYW5lc2UlMjBnYXJkZW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
    "https://images.unsplash.com/photo-1607025434171-016f24de7f9a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fGphcGFuZXNlJTIwZ2FyZGVufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
  ];

  const DIFFICULTY = [
    'Très facile',
    'Facile',
    'Moyenne',
    'Difficile',
    'Très difficile',
    'Extrêmement difficile'
  ];

  const WAYS = [
    'A vélo',
    'A pied'
  ];


  public function hike() {
    $travelType = $this->generator->randomElement(self::MOUNTAIN_TRAVEL_TYPE);
    $mountain = $this->generator->randomElement(self::MOUNTAIN);

    $place = $travelType.$mountain;
    
    return $place;
  }


  public function length($unit = "km") {
    $length = mt_rand(2000, 100000);

    return round($length / 1000, 2) . $unit;
  }

  public function duration($minutes_min = 45, $minutes_max = 43800) {
    $minutesToConvert = round(mt_rand($minutes_min, $minutes_max), 2);

    $minutes = $minutesToConvert % 60;
    $hours = 0;
    $days = 0;
    $weeks = 0;
    $response = null;

    while($minutesToConvert >= 60) {
      $hours += 1;
      $minutesToConvert -= 60;
    }

    while($hours >= 24) {
      $days += 1;
      $hours -= 24;
    }

    while($days >= 7) {
      $weeks += 1;
      $days -= 7;
    }


    if ($weeks > 0) {
      $s = ($weeks > 1 ? 's' : '');
      $response .= "$weeks semaine$s, ";
    } 
    
    if ($days > 0) {
      $s = ($days > 1 ? 's' : '');
      $response .= "$days jour$s, ";
    }

    $hs = ($hours > 1 ? 's' : '');
    $ms = ($minutes > 1 ? 's' : '');

    $response .= "$hours heure$hs et $minutes minute$ms";

    return $response;
  }

  public function difficulty() {
    return $this->generator->randomElement(self::DIFFICULTY);
  }

  public function way() {
    return $this->generator->randomElement(self::WAYS);
  }

  public function mountainImg() {
    return $this->generator->randomElement(self::MOUNTAIN_PICTURES);
  }


  /**
   * Geo fonctionnalities are from Justin Hileman
   * https://github.com/bobthecow/Faker/blob/master/src/Faker/Geo.php
   */

    // Point indices
    const LAT = 0;
    const LNG = 1;

    // c.f. definition of latitude and longitude
    const LAT_MIN =  -90;
    const LAT_MAX =   90;
    const LNG_MIN = -180;
    const LNG_MAX =  180;

    const PRECISION = 6;

    /**
     * Get a southwest / northeast pair of points defining the bounds of the earth.
     *
     * @access  public
     * @static
     * @return  array [[$swLat, $swLng], [$neLat, $neLng]]
     */
    public static function bounds()
    {
        return array(
            array(static::LAT_MIN, static::LNG_MIN),
            array(static::LAT_MAX, static::LNG_MAX),
        );
    }

    /**
     * Generate random coordinates, as an array.
     *
     * @access public
     * @static
     * @param  array $bounds
     * @return array [$lat, $lng]
     */
    public static function point(array $bounds = null)
    {
        if ($bounds === null) {
            $bounds = static::bounds();
        }

        return array(
            self::LAT => self::randFloat(self::latRange($bounds)),
            self::LNG => self::randFloat(self::lngRange($bounds)),
        );
    }

    /**
     * Generate random coordinates, formatted as degrees, minutes and seconds.
     *
     *     45°30'15" -90°30'15"
     *
     * @access public
     * @static
     * @param  array  $bounds
     * @return string Formatted coordinates
     */
    public static function coordinates(array $bounds = null)
    {
        list($lat, $lng) = static::point($bounds);

        return sprintf('%s %s', self::floatToDMS($lat), self::floatToDMS($lng));
    }

    /**
     * Generate a random latitude angle.
     *
     * @access public
     * @static
     * @param  array $bounds
     * @return float Latitude angle
     */
    public static function latitude(array $bounds = null)
    {
        return self::randFloat(self::latRange($bounds));
    }

    /**
     * Generate a random latitude angle, formatted as degrees, minutes and
     * seconds.
     *
     *     45°30'15"
     *
     * @access public
     * @static
     * @param  array  $bounds
     * @return string Formatted latitude angle
     */
    public static function latitudeDMS(array $bounds = null)
    {
        return self::floatToDMS(static::latitude($bounds));
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds.
     *
     * @access public
     * @static
     * @param  array $bounds
     * @return float Longitude angle
     */
    public static function longitude(array $bounds = null)
    {
        return self::randFloat(self::lngRange($bounds));
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds.
     *
     *     -90°30'15"
     *
     * @access public
     * @static
     * @param  array  $bounds
     * @return string Formatted longitude angle
     */
    public static function longitudeDMS(array $bounds = null)
    {
        return self::floatToDMS(static::longitude($bounds));
    }

    private static function latRange(array $bounds = null)
    {
        if ($bounds === null) {
            $bounds = static::bounds();
        }

        // Handle either a range of points, or a range of floats.
        if (is_array($bounds[0])) {
            return array($bounds[0][self::LAT], $bounds[1][self::LAT]);
        } else {
            return $bounds;
        }
    }

    private static function lngRange(array $bounds = null)
    {
        if ($bounds === null) {
            $bounds = static::bounds();
        }

        // Handle either a range of points, or a range of floats.
        if (is_array($bounds[0])) {
            return array($bounds[0][self::LNG], $bounds[1][self::LNG]);
        } else {
            return $bounds;
        }
    }

    private static function randFloat(array $range)
    {
        list($min, $max) = $range;

        return round($min + (lcg_value() * abs($max - $min)), static::PRECISION);
    }

    private static function floatToDMS($float)
    {
        $deg    = floor($float);
        $minSec = abs($float - $deg) * 60;
        $min    = floor($minSec);
        $sec    = floor(abs($minSec - $min) * 60);

        return sprintf('%d°%d\'%d"', $deg, $min, $sec);
    }

}