<?php
include './src/application.php';

     $cat1Name      = 'Maza';
     $cat1Price     = '10'  ;
     $cat1Location  = 'Plovdiv';

//$catNameCollection  = [
// "Maza", "Pisana", "Kotka Kotka", "Dundio", "Obama"
//];
//    $catFatIndexCollection  = [
// "много дебела", "котка",    
//];
//$catFurCollection = ["зелена"];   
$catObjectCollection = [
["name"               => "Maza",
 "fat_level"          => "много дебела",
 "fur_colour"         => "червена",
 "age"                => 4  ,
 "is_available_for_buy"  => false,
 "is_available_for_sell" => true],    
 [ "name"              => "Pisana",
 "fat_level"          => "дебела",
 "age"                => 2,     
 "fur_colour"         => "зелена",
 "is_available_for_buy"  => false,
 "is_available_for_sell" => true],    
 [ "name"              => "Pisana",
 "fat_level"          => "слаба",
 "age"                => 3,
 "fur_colour"         => "бяла",
 "is_available_for_buy"  => true,
 "is_available_for_sell" => false]



    
    
];    
     
     
function  doesPrpertyExist($propertyValue){
return !!$propertyValue;
  
}
function getCatProperty($property){
if (doesPrpertyExist($property)){
    return "<span> $property </span>";   
}
return "<span> марсиянска технология </span>";   
}

?>
<!DOCTYPE html>  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style/style.css">    

    </head>
    <body>
 <div id="header">
        <div id="slogan">
       <?php slogan();?> 
            
        </div>    
     <div id="top--navigation">

       <?php main_menu (); ?>
     </div>
 </div>
        <div id="wrapper" >  
            <div id="body">
                <h2> Списък с котки:</h2>
            
                <hr> 
                <?php
//                for($startCount=0; $startCount < count($catNameCollection);$startCount++){
//                for($startCount=0; $startCount < count($catObjectCollection);$startCount++){   
//                    echo '<pre>';
//                    var_dump($catObjectCollection[$startCount]);
//                     echo '</pre>';
//                    
//                    
//                    echo"<span>";
//                    echo "$catNameCollection[$startCount] - ";
//                    echo"</span>";
//                    if(isset($catFatIndexCollection[$startCount])){
//                       echo getCatProperty($catFatIndexCollection[$startCount]);
//                    }
//                    else{
//                       echo   "<span> марсиянска технология </span>";   
//                    }
//                    if(isset($catFatIndexCollection[$startCount])){
//                       echo getCatProperty($catFatIndexCollection[$startCount]);
//                    }
//                    else{
//                       echo   "<span> черна котка </span>";   
//                    }
//                    
//                    echo "<br>";
//                }
                ?>
                <table> 
                    <thead>
                    <th>Cat name</th>
                    <th>Fat level</th>
                    <th>Fur colour</th> 
                    <th>Age</th>
                    <th>Buy / Sell</th>
                    </thead>   
                <?php for ($i= 0; $i < count($catObjectCollection); $i++): ?>
                    <tr>
                        <td><?php echo $catObjectCollection[$i]['name'      ];?></td>
                        <td><?php echo $catObjectCollection[$i]['fat_level' ];?></td>
                        <td><?php echo $catObjectCollection[$i]['fur_colour'];?></td>
                        <td><?php echo $catObjectCollection[$i]['age'       ];?></td>
                        
                        <?php if($catObjectCollection[$i]['is_available_for_buy']):?>
                        <td> <a href="buy.php">Buy<a/><td>
                        <?php endif; ?>
                            <?php if($catObjectCollection[$i]['is_available_for_sell']):?>
                        <td> <a href="sell.php">Sell<a/><td>
                        <?php endif; ?> </tr>
                        <?php endfor;?>
                        </table> 
                <hr>
                <table> 
                    <thead>
                    <th>Cat name</th>
                    <th>Fat level</th>
                    <th>Fur colour</th> 
                    <th>Age</th>
                    <th>Buy / Sell</th>
                    </thead>
                 <?php foreach($catObjectCollection as $element):?> 
                    <tr>
                        <td><?php echo $element['name'      ];?></td>
                        <td><?php echo $element['fat_level' ];?></td>
                        <td><?php echo $element['fur_colour'];?></td>
                        <td><?php echo $element['age'       ];?></td>
                        
                        <?php if($element['is_available_for_buy']):?>
                        <td> <a href="buy.php">Buy<a/><td>
                        <?php endif; ?>
                        <?php if($element['is_available_for_sell']):?>
                        <td> <a href="sell.php">Sell<a/><td>
                        <?php endif; ?> </tr>
                     <?php endforeach; 
                 ?> </table> 
            </div>
            </div>
        <div id=""footer></div>
    </body>
</html>

