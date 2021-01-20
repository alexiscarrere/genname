<?php

// src/DataFixtures\Faker

namespace App\DataFixtures\Faker;

use \Faker\Provider\Base as BaseProvider;

class Faker extends BaseProvider{

    protected static $DNames = [
        'Dulir',
        'Ruvon',
        'Malvon',
        'Dradir',
        'Artion',
        'Dugin',
        'Thovir',
        'Glondil',
        'Flintheart',
        'Shatterbranch',
        'Digin',
        'Agran',
        'Rulvir',
        'Boriol',
        'Bothor',
        'Bhaston',
        'Flintbender',
        'Brozzurum',
        'Honorbuckle',
        'Sivrerlum',
        'Orcgut',
        'Dhotdruk',
        'Hillmane'
    ];

    protected static $DFirstNames = [
        'Salmumin', 
        'Brafraeg ',
        'Dunan',
        'Bamur',
        'Balor',
        'Dwokhumlin ',
        'Hokul ',
        'Malgon ',
        'Glorgan',
        'Dilur',
        'Ralvol',
        'Dranan',
        'Reirgami ',
        'Whuzzod ',
        'Dulan',
        'Gigan',
        'Dagion',
        'Malvur',
        'Hazeal ',
        'Firguc ',
        'Dwomnaed ',
        'Doursum ',
        'Thondin',
        'Aigror',
        'Bagan',
        'Dalir',
        'Dumion',
        'Dalozzurum ',
        'Glorifrir ',
        'Martin',
        'Radur',
        'Duvur',
        'Avion',
        'Khubrorlug ',
        'Daremrun ',
        'Algir',
        'Garton',
        'Digan',
        'Duvon',
        'Buboth '
    ];

    protected static $HNames = [
        'Jackson',
        'Martin',
        'Lee',
        'Perez',
        'Thompson',
        'White',
        'Harris',
        'Sanchez',
        'Clark',
        'Ramirez',
        'Lewis',
        'Robinson',
        'Walker',
        'Young',
        'Allen',
        'King'
    ];

    protected static $HFirstNames = [
        'James',
        'John',
        'Robert',
        'Michael',
        'William',
        'David',
        'Richard',
        'Joseph',
        'Thomas',
        'Charles',
        'Christopher',
       ' Daniel',
        'Matthew',
        'Anthony',
       ' Donald',
       ' Mark',
        'Paul',
        'Steven	',
        'Kenneth'
    ];

    protected static $ENames = [
      'Qigella',
      'Urixisys',
      'Umefaren',
      'Ularen',
      'Farkrana',
      'Urisalor',
      'Presdi',
      'Xilxisys',
      'Ulaleth',
      'Leotris',
      'Ravamoira',
      'Permaris',
      'Reyyra',
      'Miraxina',
      'Grekian',
      'Aewynn',
      'Trakian',
      'Bimyar',
      'Loraleth',
      'Wysavalur'
    ];

    protected static $EFirstNames = [
        'Flardryn',
        'Sontar',
        'Gorwin',
        'Khidell',
        'Ailmar',
        'Tasar',
        'Halflar',
        'Ornthalas',
        'Mlartlar',
        'Purtham',
        'Calarel',
        'Daratrine',
        'Edraele',
        'Tinesi',
        'Chalsarda',
        'Tinesi',
        'Vestele',
        'Taenya',
        'Lura',
        'Syvis'
    ];

    protected static $Titles = [
        'Admiral',
        'Queen',
        'Count',
        'Lady',
        'Chairman',
        'Baron',
        'Parent of Time',
        'Doctor of Time',
        'Sage',
        'Duc',
        'Emperor'
    ];

    public static function HNames(){
        return static::randomElement(static::$HNames);
    }

    public static function HFirstNames(){
        return static::randomElement(static::$HFirstNames);
    }

    public static function DNames(){
        return static::randomElement(static::$DNames);
    }

    public static function DFirstNames(){
        return static::randomElement(static::$DFirstNames);
    }

    public static function ENames(){
        return static::randomElement(static::$ENames);
    }

    public static function EFirstNames(){
        return static::randomElement(static::$EFirstNames);
    }

    public static function Titles(){
        return static::randomElement(static::$Titles);
    }
}