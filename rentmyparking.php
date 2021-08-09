<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
          
        $name = "parkings";
        $file_name = $name . '.json';


        $current_data = file_get_contents($file_name);  
        $array_data = json_decode($current_data, true);  
        $extra = array(
            'fullName' => $_POST['fullName'],
            'contactNumber' => $_POST['contactNumber'],
            'emailAddress' => $_POST['emailAddress'],
            'parkingLocation' => $_POST['parkingLocation'],
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data); 
       
        if(file_put_contents("$file_name", $final_data)) {
                echo $file_name .' data added';
            }
        else {
            echo 'There is some error';
        }
    }
?>