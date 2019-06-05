<?php

        require_once('../classes/init.php');

        global $database;
        $imageElements=array();
        $places="";
        $user_list="";
        $row="";
        $row1="";
        $output1="";
        $user=$_POST['user'];

        /*$user_list=$database->query("SELECT `places_list` FROM `user_result` WHERE `user_email`='mon@gmail.com'");*/
        $user_list=$database->query("SELECT `places_list` FROM `user_result` WHERE `user_email`='". $user . "'");


        while($row=$user_list->fetch_assoc()){
            $places=$row['places_list'];
            echo "<script> console.log(".$places.");</script>";
        }
            $placesArray=explode(",",$places);


            for($i=0;$i<12;$i++){
                $z=$i+1;
                $photo=$database->query("SELECT `image_URL`,`link`,`name` FROM `place` WHERE `idPlace`='".$placesArray[$i]."'");
                while($row1=$photo->fetch_assoc()) {
                    if($i<3){
                    $output1='
            <div class="col-4 place123">
            <div class="box123">
            <a href="'.$row1['link'].'">
            <img style="height:100%" class="imgindex123" src="'.$row1['image_URL'].'">
            <div class="titleBox">'.$row1['name'] .'-'.$z.' מקום</div>
            </a>
            </div>
            </div>
            ';
                    
            echo $output1;
                    }
                    else{
                $output2='
                    <div class="box">
            <div  class="boxInner">
            <a href="'.$row1['link'].'">
                <img style="height:100%" src="'.$row1['image_URL'].'" />
                <div class="titleBox">'.$row1['name'] .'-'.$z.' מקום</div>
                </a>
            </div>
        </div>
            ';
                    
            echo $output2;
                    }
                }
                /*$imageElements[$i]=*/ 


            }

         /*   $firstElement=$imageElements[0];
            echo $firstElement;
            $secondElement=$imageElements[1];
            echo $secondElement;
            $firdElement=$imageElements[2];
            echo $firdElement;
            $fourElement=$imageElements[3];
            echo $fourElement;
            $fiveElement=$imageElements[4];
            echo $fiveElement;
            $sixElement=$imageElements[5];
            echo $sixElement;
            $sevenElement=$imageElements[6];
            echo $sevenElement;
            $eightElement=$imageElements[7];
            echo $eightElement;
            $nineElement=$imageElements[8];
            echo $nineElement;
            $tenElement=$imageElements[9];
            echo $tenElement;
            $elevenElement=$imageElements[10];
            echo $elevenElement;
            $twoElement=$imageElements[11];
            echo $twoElement;*/

    ?>
