<?php
echo "Olá mundo ";?>
 <br>


 5+2 = <?php echo 5+2; ?> <br>
 10-2 = <?php echo 10-2; ?> <br>
 10/2 = <?php echo 10/2; ?> <br>
 10*2 = <?php echo 10*2; ?> <br>
 10%3 = <?php echo 10%3; ?> <br>
 10**2 = <?php echo 10**2; ?> <br>
 <br>
 
 <?php  
 $salario = 2700.60; // decimal ou flot
 $idade = 21; // inteiro ou integer
 $sobrenome = "Silva"; // string
 $animalDeEstimacao = false;// bool ou boolean 
 echo "<br>";
 echo "Eu tenho $idade anos <br>";
 echo 'Eu tenho $idade anos <br>';
 echo 'Eu tenho ' . $idade . 'anos <br>';
 echo "Eu tenho " . $idade . "anos <br>";
 

 if($idade <= 18){

 echo "você pode jogar ";
 }
 else{
    echo "não pode jogar";
 }

 $i =0;
 while($i<10){
    echo "<br>vambora";
    $i = $i+1;
 }
 for($i =0; $i < 10; $i=$i+1){
    echo "<br>vambora2";
 }
 ?><br>


 

 
 


