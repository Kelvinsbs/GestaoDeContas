<?php

class conta{
    function dados(){
        $agencia;
        $conta;
        $digito;
        $saldo;
        $saque;
        $deposito;
        $imprimir;
    }
    function saque($saque){
        echo "O valor sacado é de $saque Reais <br />";
    }
    function deposito($deposito){
        echo "Você depositou $deposito <br />";
    }
    function exibirSaldo($saldo){
        echo "Seu Saldo no nosso banco é de $saldo Reais<br />";
    }
    function imprimirExtrato($imprimir){
        echo "$imprimir <br /> <br /><br />";
    }    
}
/*class corrente extends conta{
    function contaCorrente(){
        $Deveteralgoaqui = 10;
    }
}
class poupanca extends conta{
    function contaPoupanca(){
        $Deveteralgoaqui2;
    }
}*/

$conta = new conta();
/*$conta->agencia("532687");
$conta->conta("88749558");
$conta->digito("16");*/
//$conta->exibirSaldo("132.57");
$conta->saque("100.00");
$conta->deposito("338.50");
$conta->imprimirExtrato("Aloooo aqui imprime tudo");


//Parte de Pessoa
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class pessoa{
    function dadosP(){
        $cpf;
        $cnpj;
        $nome;
        $etc;
    }
    function cpf($cpf){
        echo "Seu CPF é $cpf <br />";
    }
    
    function cnpj($cnpj){
        echo "O CNPJ da sua empresa é esse (Caso você tenha uma) $cnpj ? <br />";
    }
    
    function nome($nome){
        echo "Bem vindo sr(a). $nome <br />";
    }
    
    function etc($etc){
        echo "$etc <br />";
    }
    
}
class fisica extends pessoa{
    function dadosPessoa(){
        $VariasVariaveis;
    }
}
class juridica extends pessoa{
    function dadosEmpresa(){
        $VariasVariaveis2;
    }
}

$pessoa = new pessoa();
$pessoa->nome("Kelvin Santos Barcelos");
$pessoa->cpf("101.115.299-13");
$pessoa->cnpj("07.656.329/0001-54");
$pessoa->etc("Aqui eu falo sobre mim, e o quão chato eu posso ser!!!");
?>
<html>
<body>
	<div style="width: 400px; height: 550px; margin-left: 36%; margin-top: 5%;">
		<form method="post" action="">
			<fieldset style="background-color: #F6F6F6">
				<legend>Formulario</legend>
				
                <label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" >
				<br><br>
                
                <!--<label for="agencia">Agência:</label>
				<input type="text" name="agencia" id="agencia" >
				<br><br>
                
                <label for="conta">Conta:</label>
				<input type="text" name="conta" id="conta" >
				<br><br>
                
                <label for="digito">Dígito:</label>
				<input type="text" name="digito" id="digito" >
				<br><br>-->
                
                <label for="cpf">CPF:</label>
				<input type="text" name="cpf" id="cpf" >
				<br><br>
                
                <label for="cnpj">CNPJ:</label>
				<input type="text" name="cnpj" id="cnpj" >
				<br><br>
                
                <br />
                <br />
                <?php $conta->exibirSaldo("132.57");?>
                <br />
                <br />
                
                <label for="saque">Saque Aqui:</label>
				<input type="text" name="saque" id="saque" >
				<br><br>
                
                <label for="depositar">Deposite Aqui:</label>
				<input type="text" name="depositar" id="depositar" >
				<br><br>
				
				
				<input type="submit" name="submit" value="Enviar">
			</fieldset>
		</form>
	</div>
</body>
</html>