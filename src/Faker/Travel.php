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