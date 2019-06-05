<?php


    require_once('../classes/init.php');
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];

    global $database;
        
        $lat=array();
        $lon=array();
        
       for ($x = 0; $x < 12; $x++){
             $sql= "SELECT latitude, longitude FROM place WHERE idPlace='".($x+1)."'";
             $result=$database->query($sql);
            
             
             if ($result->num_rows>0){
              if($row=$result->fetch_assoc()){
                $lat[$x]= $row["latitude"];
                $lon[$x]= $row["longitude"];
                 }
             }

        }
   
   $dis=array();

    for ($i = 0; $i < 12; $i++){
        //  $urlContents="https://www.mapquestapi.com/directions/v2/route?key=st0E2pX1anMoIEWK3kQfQGCSDhXDC6u9&from=".$latitude.",".$longitude."&to=".$lat[$i-1].",".$lon[$i-1]."&outFormat=json&ambiguities=ignore&routeType=fastest&doReverseGeocode=false&enhancedNarrative=false&avoidTimedConditions=false";
        // $urlContents = "https://www.mapquestapi.com/directions/v2/route?key=st0E2pX1anMoIEWK3kQfQGCSDhXDC6u9&from=".$latitude.",".$longitude."&to=".$lat[$i].",".$lon[$i]."&outFormat=json&ambiguities=ignore&routeType=fastest&doReverseGeocode=false&enhancedNarrative=false&avoidTimedConditions=false";
         $urlContents= "https://www.mapquestapi.com/directions/v2/route?key=st0E2pX1anMoIEWK3kQfQGCSDhXDC6u9&from=".$latitude.",".$longitude."&to=".$lat[$i].",".$lon[$i]."&outFormat=json&ambiguities=ignore&routeType=fastest&doReverseGeocode=false&enhancedNarrative=false&avoidTimedConditions=false";
        $data = file_get_contents($urlContents);
        $mapArray = json_decode($data,true);
        $distanceKm=$mapArray['route']['distance']*1.609344;
        $dis[$i+1] = $distanceKm;
    }
    
    asort($dis);

        foreach($dis as $key => $value){
                $photo=$database->query("SELECT `image_URL`,`link`,`name` FROM `place` WHERE `idPlace`='".$key."'");
                while($row1=$photo->fetch_assoc()) {
                    $output1='
            <div class="col-4 place123">
            <div class="box123">
            <a href="'.$row1['link'].'">
            <img style="height:100%" class="imgindex123" src="'.$row1['image_URL'].'">
            <div class="titleBox">'.$row1['name'] .'-'.$key.' מקום</div>
            </a>
            </div>
            </div>
            ';
                }
                    
            echo $output1;

}
?>
