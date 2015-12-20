<?php

           
          $id="1";     
 
          $url="http://api.tvmaze.com/shows/$id?embed=cast";           

          $ch=curl_init();

          curl_setopt($ch,CURLOPT_URL,$url);

          curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);

          $response=curl_exec($ch);

          curl_close($ch);

          $response=json_decode($response,true);

          $embedded=$response['_embedded'];

          $cast=$embedded['cast'];

          $numberofpeople=count($cast);

          echo "See the cast of this show"."<br><br>";

          for($i=0;$i<3;$i++){

                $res=$cast[$i];

                //Details about real life

                $person=$res["person"];

                $personid=$person["id"];

                $apersonurl=$person["url"];

                $personname=$person["name"];

                $image=$person["image"];

                $personimage=$image["medium"];

                //Details about reel life

                $character=$res["character"];

                $characterid=$character["id"];

                $characterurl=$character["url"];

                $charactername=$character["name"];

                echo $personname."<br>"; //Person's real name                                                
                
          }

  
          echo "<br><br><br>";

          echo "Lets see the episodes"."<br><br>";


          $url="http://api.tvmaze.com/shows/1/episodes";

          $ch=curl_init();

          curl_setopt($ch,CURLOPT_URL,$url);

          curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);          

          $response=curl_exec($ch);

          curl_close($ch);

          $response=json_decode($response,true);

          $numberofepisodes=count($response);

          for($i=0;$i<3;$i++){

                 
                $res=$response[$i];
                
                $episodeid=$res["id"];

                $episodename=$res["name"];

                $episodenumber=$res["number"];

                $seasonnumber=$res["season"];

                $image=$res["image"];

                $episodeimage=$image["medium"];

                $episodesummary=$res["summary"];   
                
                echo $episodename."<br>"; 


          }  

  





?>