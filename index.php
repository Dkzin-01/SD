<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="right">Compras Marvetes.com</h1>

    <h2>DADOS DO CLIENTE</h2>
    
    <fieldset>
        <form> 
            <legend> <strong><h3>PREENCHA TODOS OS CAMPOS</h3></strong></legend>  <!-- titulo-->

            <label for="c1">CPF:</label>
            <input type="text" name="cpf" id="c1" size="15" maxlength="11" required title="Preencha este campo"><br><br>
            
            <label for="c2">Nome:</label>
            <input type="text" name="nome" id="c2" size="55" maxlength="50"><br><br>

            <label for="c3">Endereço:</label>
            <input type="text" name="end" id="c3" size="50" maxlength="45"><br><br>

            <label>CEP:</label>
            <input type="text" name="cep" size="12" maxlength="10"><br><br>

            <label>Cidade:</label>
            <input type="text" name="cid" size="25" maxlength="20"><br><br>

            <label>Estado:</label>
            <input type="text" name="estado" size="3" maxlength="2"><br><br>

            <label>SEXO:</label><br>
            <input type="radio" name="sexo" value="s1">Masculino <br>
            <input type="radio" name="sexo" value="s2">Feminino <br>

            <label>VOCÊ GOSTARIA DE RECEBER NOVAS OFERTAS E PROMOÇÕES POR:</label>
            <input type="sheckbox" name="email" value="check">E-mail<br>
            <input type="sheckbox" name="whats" value="check">WhatsApp<br>
            <input type="sheckbox" name="sms" value="check">SMS<br>
            <input type="sheckbox" name="n" value="check">Não desejo receber :(<br>
        </form>
    </fieldeset>
</body>
</html>