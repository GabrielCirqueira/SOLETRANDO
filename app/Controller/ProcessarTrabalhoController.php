<?php 

namespace App\Controller;

use App\Controller\AbstractController;

class ProcessarTrabalhoController extends AbstractController
{
    public function index($request): void
    { 
        $palavras_corretas = [
            "word1" => "cuidado",
            "word2" => "invisibilidade",
            "word3" => "convenções",
            "word4" => "reconhecimento",
            "word5" => "estigmatizadas",
            "word6" => "escolaridade",
            "word7" => "capitalismo",
            "word8" => "valorização",
            "word9" => "doméstico",
            "word10" => "assistência",
            "word11" => "tradicionais",
            "word12" => "desprezo",
            "word13" => "datilógrafa",
            "word14" => "importância",
            "word15" => "doméstico",
            "word16" => "medidas",
            "word17" => "desvalorização",
            "word18" => "mínimo",
            "word19" => "valoriza",
            "word20" => "trabalho"
        ];
 
        $palavras_recebidas = [
            "word1" => $_POST["word1"],
            "word2" => $_POST["word2"],
            "word3" => $_POST["word3"],
            "word4" => $_POST["word4"],
            "word5" => $_POST["word5"],
            "word6" => $_POST["word6"],
            "word7" => $_POST["word7"],
            "word8" => $_POST["word8"],
            "word9" => $_POST["word9"],
            "word10" => $_POST["word10"],
            "word11" => $_POST["word11"],
            "word12" => $_POST["word12"],
            "word13" => $_POST["word13"],
            "word14" => $_POST["word14"],
            "word15" => $_POST["word15"],
            "word16" => $_POST["word16"],
            "word17" => $_POST["word17"],
            "word18" => $_POST["word18"],
            "word19" => $_POST["word19"],
            "word20" => $_POST["word20"],
        ]; 

        $total_palavras = count($palavras_corretas);
        $acertos = 0;
        $erros = 0;
        $resultado = [];
 
        foreach ($palavras_corretas as $key => $palavra_correta) {
            if (isset($palavras_recebidas[$key]) && $palavras_recebidas[$key] === $palavra_correta) {
                $acertos++;
                $resultado[$key] = [
                    "status" => "Acertou",
                    "palavra_digitada" => $palavras_recebidas[$key]
                ];
            } else {
                $erros++;
                $resultado[$key] = [
                    "status" => "Errou",
                    "palavra_digitada" => $palavras_recebidas[$key] ?? ''
                ];
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
 
        $this->render("resultadoTrabalho.php", $data);
    }
}
