<?php 

namespace App\Controller;

use App\Controller\AbstractController;

class ProcessarController extends AbstractController
{
    public function index($request): void
    { 
        $palavras_corretas = [
            "word1" => "domésticos",
            "word2" => "mulheres",
            "word3" => "remuneração",
            "word4" => "invisibilidade",
            "word5" => "mulher",
            "word6" => "maternidade",
            "word7" => "mulheres",
            "word8" => "patriarcal",
            "word9" => "machista",
            "word10" => "desvalorização",
            "word11" => "capitalista",
            "word12" => "mulheres"
        ];
 
        $palavras_recebidas = [
            "word1" =>  $_POST["word1"],
            "word2" =>  $_POST["word2"],
            "word3" =>  $_POST["word3"],
            "word4" =>  $_POST["word4"],
            "word5" =>  $_POST["word5"],
            "word6" =>  $_POST["word6"],
            "word7" =>  $_POST["word7"],
            "word8" =>  $_POST["word8"],
            "word9" =>  $_POST["word9"],
            "word10" => $_POST["word10"],
            "word11" => $_POST["word11"],
            "word12" => $_POST["word12"],
        ];
 
        $total_palavras = count($palavras_corretas);
        $acertos = 0;
        $erros = 0;
        $resultado = [];
        $palavras_erradas = [];
        $palavras_acertadas = []; 

        foreach ($palavras_corretas as $key => $palavra_correta) {
            if (isset($palavras_recebidas[$key]) && $palavras_recebidas[$key] === $palavra_correta) {
                $acertos++;
                $resultado[$key] = [
                    "status" => "Acertou",
                    "palavra" => $palavra_correta
                ];
                $palavras_acertadas[] = $palavras_recebidas[$key];
            } else {
                $erros++;
                $resultado[$key] = [
                    "status" => "Errou",
                    "palavra_correta" => $palavra_correta,
                    "palavra_digitada" => $palavras_recebidas[$key]
                ];
                $palavras_erradas[] = $palavras_recebidas[$key];
            }
        }
 
        $porcentagem_acertos = ($acertos / $total_palavras) * 100;
        $porcentagem_erros = ($erros / $total_palavras) * 100;
 
        $data = [
            'total_palavras' => $total_palavras,
            'acertos' => $acertos,
            'erros' => $erros,
            'porcentagem_acertos' => $porcentagem_acertos,
            'porcentagem_erros' => $porcentagem_erros,
            'resultado' => $resultado,
            'status_geral' => $porcentagem_acertos >= 50 ? 'bom' : 'ruim', 
        ];

        $this->render("resultado.php",$data);
    }
}
