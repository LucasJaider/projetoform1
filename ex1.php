<?php
$nome ="jaja";
$anoNasc = 2001;
$idade = 2023 - $anoNasc;
$altura = 1.88;
$peso = 79.90;
$imc = $peso/pow($altura,2);
// $imc = $peso/($altura * $altura);

echo "<h1 style='color:green; text-align: center;'>
 Ola $nome me disseram que você tem $idade anos<br>";
 
 echo" Seu peso é de $peso e sua altura $altura <br>";
 echo" O seu IMC é de $imc <br>";

 if($imc<17){
    echo " $nome Coma pelo amor de Deus";
 }else if($imc >=17 && $imc<=18.5){
    echo " $nome Continue comendo!! ta dodoi ";
 }else if($imc >=18.5 && $imc<=24.9){
    echo " $nome está se achando, está pronto para a praia";
 }else if ($imc >=25 && $imc <=29.9){
    echo " $nome larga a bolachinha traquinas, está acima do peso";
 }else if($imc >=30 && $imc <=34.9){
    echo "$nome larga o Mac tá obeso !!";
 }else if($imc >=35 && $imc<= 40 ){
    echo "$nome seu porquinho";
 }else {
    echo "$nome chama o guicho!";
 }