<!--## Snack 3
 Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

 <?php 
    $newArray=[];
    echo "<pre>";
    while(count($newArray) < 15 ){
        $number = rand(1,50);
        if(!in_array($number,$newArray)){
            $newArray[]= $number;
        } 
    }
    
    print_r($newArray);
    echo "</pre>";
 ?>
 