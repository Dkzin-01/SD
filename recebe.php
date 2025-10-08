<?php

#dados cliente
$nome = $_POST["nome"];
$tel  = $_POST["tel"];
$end  = $_POST["end"];
$bar  = $_POST["ba"];
 
#camiseta 1 
$c1 = $_POST["c1"];
$t1 = $_POST["t1"];
$q1 = $_POST["q1"];
 
#camiseta 2 
$c2 = $_POST["c2"];
$t2 = $_POST["t2"];
$q2 = $_POST["q2"];
 
#moletom 
$mo = $_POST["mo"];
$t3 = $_POST["t3"];
$q3 = $_POST["q3"];
 
#caneca
$ca = $_POST["ca"];
$q4 = $_POST["q4"];
 
#dados pagamento  
$p   = $_POST["p"];
$en  = $_POST["en"];
$no  = $_POST["no"];

#tamanho=p e quantidade=1 camiseta 2
if ($c2 != 0) {
   if ($t2 == 0) 
    { 
    $t2 = 2; 
    }
   if ($q2 == 0) 
    { 
        $q2 = 1; 
    }
}

#tamanho=p e quantidade=1 moletom
if ($mo != 0) {
   if ($t3 == 0) 
    { 
        $t3 = 2; 
    }  
   if ($q3 == 0) 
    { 
        $q3 = 1; 
    }  
}

#tamanho=p e quantidade=1 caneca
if ($ca != 0) {
   if ($q4 == 0) { $q4 = 1; }
}

#operacoes
$valor1 = 0;
$v1     = 0;
$valor2 = 0;
$v2     = 0;
$valor3 = 0;
$v3     = 0;
$valor4 = 0;
$v4     = 0;
$valort = 0;
$frete  = 0;

echo "<h1>PEDIDO CONFIRMADO</h1>";

#dados cliente
echo "<h2>DADOS - CLIENTE</h2>";
echo "Cliente: $nome <br>";
echo "Telefone: $tel <br>";
echo "Endereço: $end <br>";
echo "Bairro: $bar <br>";

#CAMISETA 1
   echo "<h2>DADOS - PEDIDO</h2>";

if ($c1 == 1) { 
    echo "Camiseta: Homem de Ferro<br>"; 
    $v1 = 79.99; 
}
elseif ($c1 == 2) { 
    echo "Camiseta: Homem Aranha<br>"; 
    $v1 = 79.99; 
}
elseif ($c1 == 3) { 
    echo "Camiseta: Hulk<br>"; 
    $v1 = 79.99; 
}
elseif ($c1 == 4) { 
    echo "Camiseta: Capitão America<br>"; 
    $v1 = 79.99; 
}
elseif ($c1 == 5) { 
    echo "Camiseta: Thanos<br>"; 
    $v1 = 79.99; 
}
elseif ($c1 == 6) { 
    echo "Camiseta: Venom<br>"; 
    $v1 = 79.99; 
}
else { echo "Camiseta: Deadpool<br>"; 
    $v1 = 79.99; 
}

#tamanho 1
if ($t1 == 1) { 
    echo "Tamanho: PP<br>"; 
}
elseif ($t1 == 2) { 
    echo "Tamanho: P<br>"; 
}
elseif ($t1 == 3) { 
    echo "Tamanho: M<br>"; 
}
elseif ($t1 == 4) { 
    echo "Tamanho: G<br>"; 
}
elseif ($t1 == 5) { 
    echo "Tamanho: GG<br>"; 
}
elseif ($t1 == 6) { 
    echo "Tamanho: G2<br>"; 
}
else { echo "Tamanho: G3<br>"; 
}

   echo "Quantidade: $q1 <br><br>";
   $valor1 = $v1 * $q1;

#CAMISETA 2
if ($c2 != 0) 
{
   if ($c2 == 1) { 
    echo "Camiseta: Homem de Ferro<br>"; 
    $v2 = 79.99; 
}
   elseif ($c2 == 2) { 
    echo "Camiseta: Homem Aranha<br>"; 
    $v2 = 79.99; 
}
   elseif ($c2 == 3) { 
    echo "Camiseta: Hulk<br>"; 
    $v2 = 79.99; 
}
   elseif ($c2 == 4) { 
    echo "Camiseta: Capitão America<br>"; 
    $v2 = 79.99; 
}
   elseif ($c2 == 5) { 
    echo "Camiseta: Thanos<br>"; 
    $v2 = 79.99; 
}
   elseif ($c2 == 6) { 
    echo "Camiseta: Venom<br>"; 
    $v2 = 79.99; 
}
   else { echo "Camiseta: Deadpool<br>"; 
    $v2 = 79.99; 
}

   if ($t2 == 1) { 
    echo "Tamanho: PP<br>"; 
}
   elseif ($t2 == 2) { 
    echo "Tamanho: P<br>"; 
}
   elseif ($t2 == 3) { 
    echo "Tamanho: M<br>"; 
}
   elseif ($t2 == 4) { 
    echo "Tamanho: G<br>"; 
}
   elseif ($t2 == 5) { 
    echo "Tamanho: GG<br>"; 
}
   elseif ($t2 == 6) { 
    echo "Tamanho: G2<br>"; 
}
   else { echo "Tamanho: G3<br>"; }

   echo "Quantidade: $q2 <br><br>";
   $valor2 = $v2 * $q2;
}

# MOLETOM
if ($mo != 0) {
   if ($mo == 1) { 
    echo "Moletom: Manopla do Infinito<br>"; 
    $v3 = 149.99; 
}
   elseif ($mo == 2) { 
    echo "Moletom: Homem de Ferro<br>"; 
    $v3 = 149.99; 
}
   elseif ($mo == 3) { 
    echo "Moletom: Homem Aranha<br>"; 
    $v3 = 149.99; 
}
   elseif ($mo == 4) { 
    echo "Moletom: Homem Aranha (Miles Morales)<br>"; 
    $v3 = 149.99; 
}
   elseif ($mo == 5) { 
    echo "Moletom: Hulk<br>"; 
    $v3 = 149.99; 
}
   elseif ($mo == 6) { 
    echo "Moletom: Escudo Capitão América<br>"; 
    $v3 = 149.99; 
}
   else { 
    echo "Moletom: Martelo Thor<br>"; 
    $v3 = 149.99; 
}

   if ($t3 == 1) { 
    echo "Tamanho: PP<br>"; 
}
   elseif ($t3 == 2) { 
    echo "Tamanho: P<br>"; 
}
   elseif ($t3 == 3) { 
    echo "Tamanho: M<br>"; 
}
   elseif ($t3 == 4) { 
    echo "Tamanho: G<br>"; 
}
   elseif ($t3 == 5) { 
    echo "Tamanho: GG<br>"; 
}
   elseif ($t3 == 6) { 
    echo "Tamanho: G2<br>"; 
}
   else { echo "Tamanho: G3<br>"; 
}

   echo "Quantidade: $q3 <br><br>";
   $valor3 = $v3 * $q3;}


#CANECA
if ($ca != 0) 
{
   if ($ca == 1) { 
    echo "Caneca: Jóias do Infinito<br>"; 
    $v4 = 39.99; 
}
   elseif ($ca == 2) { 
    echo "Caneca: Jóia do Tempo<br>"; 
    $v4 = 35.99; 
}
   elseif ($ca == 3) { 
    echo "Caneca: Jóia do Poder<br>"; 
    $v4 = 35.99; 
}
   elseif ($ca == 4) { 
    echo "Caneca: Jóia do Espaço<br>"; 
    $v4 = 35.99; 
}
   elseif ($ca == 5) { 
    echo "Caneca: Jóia da Realidade<br>"; 
    $v4 = 35.99; 
}
   elseif ($ca == 6) { 
    echo "Caneca: Jóia da Mente<br>"; 
    $v4 = 35.99; 
}
   else { 
    echo "Caneca: Homem de Ferro<br>"; 
    $v4 = 49.99; 
}

   echo "Quantidade: $q4 <br><br>";
   $valor4 = $v4 * $q4;
}

#PAGAMENTO
if ($p == 1) {
   echo "Pagamento: Cartão Crédito<br>";
} elseif ($p == 2) {
   echo "Pagamento: Cartão Débito<br>";
} else {
   echo "Pagamento: Pix<br>";
}

#ENTREGA
if($en==1){
   echo "Entrega: Não<br>";
} else {
   echo "Entrega: Sim (+R$5,00)<br>";
   $frete = 5.00;
}

#NOTIFICAÇÃO
if ($no == 1) {
   echo "Notificação: E-mail<br>";
} elseif ($no == 2) {
   echo "Notificação: WhatsApp<br>";
} elseif ($no == 3) {
   echo "Notificação: SMS<br>";
} else {
   echo "Notificação: Não desejo receber :(<br>";
}

#TOTAL
$valort = $valor1 + $valor2 + $valor3 + $valor4 + $frete;
echo "<h3>Total a pagar: R$$valort</h3>";

?>