<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 1/15/18
 * Time: 10:23 AM
 */

const PRE1 = '<pre>';
const PRE2 = '</pre>';
const BR = '<br/>';
const HR = '<hr>';

echo "PHP version ="." ".phpversion().BR;

echo '<h4 style="color: red;">Hello Daniel, are u feeling awesome today?</h4>';
echo HR;

//------------------------------------------------------------------------


function multiply($one,$two) {
  return $one * $two;
}
echo BR;
multiply_print(5,10);

function multiply_print($one,$two) {
  echo $one * $two;
}

//------------------------------------------------------------------------------
function print_info(array $info, $color = 'lightblue',$cellpadding =10){
  echo "<table bgcolor='$color' border='3'"
  ."bordercolor = 'black' cellpadding= '$cellpadding'" . "cellspacing ='0'>";

  foreach($info as $key => $value) {
      echo '<tr><td>'.ucwords($key).'</td><td>'.$value.'</td></tr>';
  }
  echo '</table>';
}
$my_info = array('first Name' => 'Daniel', 'last Name' => 'Guberina','age' => 34 , 'gender' => 'M', );

print_info($my_info, 'lightgreen',30);
echo BR.HR;

//------------------------------------------------------------------------------

$dir = 'movies';
$files = scandir($dir);

//echo PRE1;
//print_r($files);
//echo PRE2;

function pre_r($array){
  echo PRE1;
  print_r($array);
  echo PRE2;
}

$files = array_diff($files, array('..','.'));

$files = array_values($files);


$movies = array();

for ($i =0; $i < count ($files); $i++) {

  preg_match("!(.*?)\((.*?)\)!",$files[$i],$results);
  $movie_name = str_replace('_', ' ',$results[1]);

  $movies[$movie_name]['image'] = $files[$i];
  $movies[$movie_name]['year'] = $results[2];

}

  echo "<table id = 'movies' cellpadding=20>";
  echo "<tr class='odd'>";

  foreach ($movies as $movie_name => $info){
    $content = "<td><span class='name'>$movie_name</span></br>"
      . "<img src = 'movies/$info[image]'></br>"
      . "<span class='year'>($info[year])</span></td>";
    echo $content;
  }

  echo "</tr></table>";
//----------------------------------------

?>

<?//php include 'moviesPractice.php' ?>
<?//php include 'imdb.php' ?>
<?//php include 'primerClasse.php' ?>
