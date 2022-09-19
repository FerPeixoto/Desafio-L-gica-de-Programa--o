<?php
/*Desafio:
Minha rotina diária utilizando como base os conceitos da lógica de programação
*/


$ola           = "Hello World Dev";
$desafio_dev   = "Desafio  - Lógica de Programação";
$Welcome       = "Minha Rotina";


//Data

$dia           = ('15/09/2022');
$hora          = 8;

//acoes rotineiras

$acordar                  = true;
$escovar_dentes           = true;
$comprar_pao              = false;
$tomar_café_da_manhã      = true;
$arrumar_trabalho         = false;
$inicio_expediente        = true;
$trabalhar                = true;

$horario_de_almoco        = false;
$almocar                  = false;
$descanso                 = true;
$assistir_tv              = true;
$retornar_trabalho        = false;

$futebol                  = false;
$banho                    = true;
$jantar                   = false;
$estudar                  = false;
$fim_de_expediente        = true;
$dormir                   = false;

$arr=array( "Nome"=>"Fernando Peixoto", "Idade" => "39 anos", "Naturalidade" =>"Rio de Janeiro","Desafio"=>"Logica de programacao");
print_r($arr);

echo "<br/><br/>";

echo "<b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $desafio_dev <br> <br> <br>"."</b><br/>";


echo "Nome: <b>".$arr["Nome"]."</b><br/>";
echo "Naturalidade: <b>".$arr["Naturalidade"]."</b><br/>";
echo "Desafio: <b>".$arr["Desafio"]."</b>";

echo "<br> <br>";



while ($hora <24){
    if($acordar == true && $hora == 8){
        echo "Tocar o despertador";
        echo "Acordando às {$hora} Horas";
    }

    if($hora == 7){
        echo "escovar_dentes";
        $comprar_pao                        = false;
        $tomar_café_da_manhã                = true;
    }

    if($hora == 9 && $arrumar_trabalho != true){
        echo "Arrumar Trabalho";
    }

    if($hora >=9 && $hora <= 11){
        echo "Estudando";
        $estudar                            = true;
    }

    if($hora >=11.30 && $hora < 13){
        echo "Horário do Almoço";
    }

    if($hora == 12 && $horario_de_almoco = true){
        echo "Alçocando";
    }

    if($hora == 14 && $inicio_expediente = true){
        echo "Trabalhando";
    }

    if($hora == 20 && $retornar_trabalho = true){
        echo "Retornando ao Trabalho";
    }

    if($hora == 21 && $fim_de_expediente== true){
    echo "Fim do Expediente";
    $jantar = true;
    $descanso = false;
    }

    if($hora == 22){
        echo "Futebol";

    } elseif($hora == 23){
        echo "Fazer filha dormir";
    }

   
}
?>;
