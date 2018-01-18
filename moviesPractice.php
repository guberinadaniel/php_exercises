<?php
class Movies {

  const BR = '<br/>';
  const PRE1 = '<pre>';
  const PRE2= '</pre>';

  public $price;
  public $name;
  public $photo;
  public $dir = 'movies/';

  public function print_movie(){

    #echo $this->name.self::BR;
    #echo $this->price.self::BR;
    #echo $this->dir.$this->photo;

    echo "<div style='float:left; margin-right: 40px;'>";
    echo "<font size='5px'>{$this->name}</font>".self::BR;
    echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
    echo '$'.$this->price;
    echo "</div>";
  }

  public function set_movies($name,$price,$photo){
    $this->name = $name;
    $this->price = $price;
    $this->photo = $photo;
  }

}

$movie = new Movies();
$movie->name = 'avengers';
$movie->price = 4.99;
$movie->photo = 'avengers(2005).jpg';

$movie->print_movie();

$movie->set_movies('GOT', 10,'got(2012).jpg');

$movie->print_movie();
