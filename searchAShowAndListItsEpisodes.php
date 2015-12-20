<?php

    $showname="Game Of Thrones";

    $url="http://api.tvmaze.com/singlesearch/shows?q=$showname&embed=episodes";

    $ch=curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);

    $response=curl_exec($ch);

    curl_close($ch);

    $response=json_decode($response,true);

    $name=$response['name'];

    echo $name."<br><br>";

    $image=$response['image'];

    $mediumimage=$image['medium'];

    echo "<image src=$mediumimage>"."<br><br>";

    $summary=$response['summary'];

    $embedded=$response['_embedded'];

    $episodes=$embedded['episodes'];

    $episodecount=count($episodes);

    for($i=0;$i<$episodecount;$i++){

            $epi=$episodes[$i];

            $episodename=$epi['name'];
            $seasonnumber=$epi['season'];
            $episodenumber=$epi['number'];

            $episodesummmary=$epi['summary'];

            echo $episodename."<br><br>";
            echo "S".$seasonnumber."E".$episodenumber."<br><br>";

            echo $episodesummmary."<br><br>";

    }



 ?>