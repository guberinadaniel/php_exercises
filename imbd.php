<?php

function pre_r($array){
  echo PRE1;
  print_r($array);
  echo PRE2;
}

$curl = curl_init();
$all_data = array();


$url = "http://www.imdb.com/search/title?year=2000,2000&title_type=feature&sort=moviemeter,asc&page=1&ref_=adv_nxt";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result =curl_exec($curl);

$movies = array();

//match movie title-------------------------------------
preg_match_all('!<a href="\/title\/.*?\/\?ref_=adv_li_tt"\n>(.*?)<\/a>!',$result,$match);
$movies['name'] = $match[0];

//print_r($movies['name']);die;

//match movie year---------------------------------------
preg_match_all('!<span class="lister-item-year text-muted unbold">.*?\((\d{4})\)</span>!',$result,$match);
$movies['year'] = $match[1];

//print_r($movies['year']);die;

//match image url
preg_match_all('!loadlate="(.*?)"!',$result,$match);
$movies['image'] = $match[1];

//print_r($movies);die;

echo "<pre>";
var_dump($match);