<?php


$_POST["seeked"] = "";
$_POST["modify"] = "";
$_POST["button"] = "";

$seeked = $_POST["seeked"];
   $button = $_POST["button"];
   $modify = $_POST["modify"];

    
   // // $file = file_get_contents("carnet.txt");
     
   // // $tab = explode("|", $file);
   // // var_dump($tab);

   // if(isset($_POST["seeked"])){//and !empty($_POST["seeked"]) and isset($_POST["modify"]) and !empty($_POST["modify"]))/ {
      
   //    $seeked = $_POST["seeked"];
   //    $button = $_POST["button"];
   //    $modify = $_POST["modify"];
   //    // str_replace("yes", "jef", $file);
   //    //    $_POST["seeked"] = "";
   //    //    $_POST["modify"] = "";
   //    //    echo "ok";
  
   // // var_dump($tabs);

   //    if(isset($button)) {
         // if(str_replace($seeked, $modify, $file)){
          
           
   //       // }else {
   //       //    echo "erreur";
   //       // }
   //    }else {
   //       echo "jjjjjjjjjjjjjjjjjjj";
   // //    }
   // echo "bien definie";

   // }else {
   //    echo "variables non connues";
   // }

   // $file=file_get_contents("carnet.txt");
   // $tab = explode("|", $file);
   // $tabs=str_replace("joseph","bel",$tab);
   // $conte = file_put_contents("carnet.txt", $tabs);
   // var_dump($tabs);




if(isset($_POST["button"])){
   if(!empty($seeked) && !empty($modify)){
      extract($_POST);
      echo "erreur"; 
   }else{
    $seeked = $_POST["seeked"];
    $button = $_POST["button"];
    $modify = $_POST["modify"];

    $_POST["seeked"] = $seeked;
    $_POST["modify"] = $modify;


      
      $file=file_get_contents("carnet.txt");
      $tab = explode("|", $file);
      // $keys=explode("-", $key);
      $tabs=str_replace("M","F",$tab);
      $conte = file_put_contents("carnet.txt", $tabs);
      foreach ($tab as $key) {
        
         echo"valide";
         // if(in_array($seeked, $keys, false)){
            
         // var_dump($tabs);
         // }else{
         //    echo "pas de tableau";
         // }
         
      }
     
      
    }
   }
   


?>