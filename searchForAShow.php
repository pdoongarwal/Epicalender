<?php

    $showname="Sherlock";

    $url="http://api.tvmaze.com/search/shows?q=$showname";
 
    $ch=curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);

    $response=curl_exec($ch);

    curl_close($ch);

    $response=json_decode($response,true);

    $numberofitems=count($response);


    for($i=0;$i<$numberofitems;$i++){

          $res=$response[$i];

          $show=$res['show'];

          $url=$show['url'];

          $name=$show['name'];

          $rating=$show['rating'];

          $avgrating=$rating['average'];

          $image=$show['image'];

          $mediumimage=$image['medium'];

          $summary=$show['summary'];

          echo "Show name:".$name."<br><br>";

          echo "<a href=$url>".$name."</a>"."<br><br>";

          echo "rating:".$avgrating;

          echo "<img src=$mediumimage><br><br>";

          echo "Summary : ".$summary;
          


    }


  
















?>