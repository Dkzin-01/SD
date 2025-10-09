<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARVETES</title>
</head>
<body>
    <form method="POST" action="recebe.php">   <!-- ENVIA DADOS PARA receb.php-->
       
    <!-- PREENCHER CAMPO - DADOS CLIENTE-->
    <h1 align="center">LOJA DE PRODUTOS - MARVEL</h1><br>
        <legend><h2>DADOS CLIENTE</h2></legend>
        <fieldset style="width: 50%">
            NOME: <input type="text" name="nome" size="50" maxlenght="45" required><br>
            TELEFONE: <input type="text" name="tel" size="25" maxlenght="20"><br>
            ENEDEREÇO: <input type="text" name="end" size="40" maxlenght="30" required><br>
            BAIRRO: <input type="text" name="ba" size="30" maxlenght="25"><br>
        </fieldset>
 
        <!-- ESCOLHER OPÇÃO - DADOS PEDIDO - CAMISETA -->
        <legend><h2>DADOS PEDIDO</h2></legend>
        <fieldset style="width: 50%">
            <h3> CAMISETAS - R$79,99 CADA  </h3>
            <select name="c1">
                <option value="1"> neda </option>
                <option value="2"> Camiseta Homem Aranha </option>
                <option value="3"> Camiseta Hulk </option>
                <option value="4"> Camiseta Capitão America </option>
                <option value="5"> Camiseta Thanos </option>
                <option value="6"> Camiseta Venom </option>
                <option value="7"> Camiseta Deadpool </option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <!-- ESPAÇO-->
            <select name="t1">
                <option value="1"> PP </option>
                <option value="2"> P </option>
                <option value="3"> M </option>
                <option value="4" selected> G </option>
                <option value="5"> GG </option>
                <option value="6"> G2 </option>
                <option value="7"> G3 </option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <!-- ESPAÇO-->
            <select name="q1">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select>
<br><br>    
            <!-- ESCOLHER OPÇÃO - CAMISETA 2 -->
            <select name="c2">
                <option value="0"> ----------------------------------- </option>
                <option value="1"> Camiseta Homem de Ferro </option>
                <option value="2"> Camiseta Homem Aranha </option>
                <option value="3"> Camiseta Hulk </option>
                <option value="4"> Camiseta Capitão America </option>
                <option value="5"> Camiseta Thanos </option>
                <option value="6"> Camiseta Venom </option>
                <option value="7"> Camiseta Deadpool </option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <!-- ESPAÇO-->
            <select name="t2">
                <option value="0"> ---- </option>
                <option value="1"> PP </option>
                <option value="2"> P </option>
                <option value="3"> M </option>
                <option value="4"> G </option>
                <option value="5"> GG </option>
                <option value="6"> G2 </option>
                <option value="7"> G3 </option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <!-- ESPAÇO-->
            <select name="q2">
                <option value="0"> - </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select>
<br><br>
            <!-- ESCOLHER OPÇÃO - DADOS PEDIDO - MOLETOM -->
            <h3> MOLETOM - R$149,99 CADA</h3>
            <select name="mo">
                <option value="0"> ---------------------------------------------------------- </option>
                <option value="1"> Manopla do Infinito</option>
                <option value="2"> Homem de Ferro</option>
                <option value="3"> Homem Aranha </option>
                <option value="4"> Homem Aranha (Miles Morales)</option>
                <option value="5"> Hulk</option>
                <option value="6"> Escudo Capitão América</option>
                <option value="7"> Martelo Thor</option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="t3">
                <option value="0"> ---- </option>
                <option value="1"> PP </option>
                <option value="2"> P </option>
                <option value="3"> M </option>
                <option value="4"> G </option>
                <option value="5"> GG </option>
                <option value="6"> G2 </option>
                <option value="7"> G3 </option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="q3">
                <option value="0"> - </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select>
 <br><br>          
            <!-- ESCOLHER OPÇÃO - DADOS PEDIDO - COPO -->
            <h3> CANECAS </h3>
            <select name="ca">
                <option value="0"> ----------------------------------- </option>
                <option value="1"> Jóias do Infinito - R$39,99</option>
                <option value="2"> Jóia do Tempo - R$35,99</option>
                <option value="3"> Jóia do Poder - R$35,99</option>
                <option value="4"> Jóia do Espaço - R$35,99</option>
                <option value="5"> Jóia da Realidade - R$35,99</option>
                <option value="6"> Jóia da Mente - R$35,99</option>
                <option value="7"> Jóia da Alma - R$35,99</option>
                <option value="8"> Homem de Ferro - R$49,99</option>
                <option value="9"> Hulk - R$49,99</option>
                <option value="10"> Homem Aranha - R$49,99</option>
            </select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="q4">
                <option value="0"> - </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select>
        </fieldset>
<br><br>
        <!-- ESCOLHER OPÇÃO - FINALIZAÇÃO DE PEDIDO -->
        <legend><h2>FINALIZAÇÃO DE PEDIDO</h2></legend>
        <fieldset style="width: 50%">
            <h3>FORMA DE PAGAMENTO</h3>
            <select name="p">  
                <option value="1"> Cartão Crédito </option>
                <option value="2"> Cartão Débito </option>
                <option value="3" selected> Pix </option>
            </select>
<br><br>
            <!-- ESCOLHER OPÇÃO - FINALIZAÇÃO DE PEDIDO - ENTREGA -->
            <h3>ENTREGA</h3> 
                <input type="radio" name="en" value="1" checked> Retirada na Loja </option><br>
                <input type="radio" name="en" value="2"> Entrega em Endereço - Frete: R$5,00</option>
<br><br>
            <!-- ESCOLHER OPÇÃO - FINALIZAÇÃO DE PEDIDO - NOTIFICAÇÃO -->
            <h3>NOTIFICAÕES - OFERTAS/PROMOÇÕES</h3> 
                <input type="checkbox" name="no" value="1"> E-mail </option><br>
                <input type="checkbox" name="no" value="2"> WhatsApp </option><br>
                <input type="checkbox" name="no" value="3"> SMS </option><br>
                <input type="checkbox" name="no" value="4"> Não desejo receber :( </option>
<br><br>
            <!-- APAGAR TUDO OU FINALIZAR -->
            <button type="reset"> Apagar Tudo </button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit"> Confirmar Pedido </button>
    </form>
</body>
</html>