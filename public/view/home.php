        <div style="margin-top: 50px;" class="instructions container">
                <h2>Instruções</h2>
                <p>Preencha os campos abaixo com as palavras que completam o texto. Cada campo representa uma palavra que foi omitida no texto original. Após preencher todos os campos, clique no botão "Enviar" para submeter suas respostas.</p>
            </div>
    <div style="margin-top: 50px;margin-bottom:100px;" class="container">
        <main class="form-signin w-100 m-auto">

            <form action="processar" method="POST">
                <h1 class="h3 fw-normal my-0 ms-2 text-center mb-4">A Invisibilidade do Cuidado Feminino: Um Olhar sobre as 'Anas' do Brasil</h1>

                <p class="line-spacing">
                    Um dos contos presentes no livro "Laços de Família", de Clarice Lispector, acompanha a epifania da personagem Ana ao fugir de seus afazeres <input type="text" placeholder="Palavra 1" name="word1"  required> Ela, que se via sentenciada a cuidar da casa e dos filhos, assemelha-se a muitas <input type="text" placeholder="Palavra 2" name="word2"  required> brasileiras, que exercem essa e outras tarefas diariamente, sem valorização e, até mesmo, sem <input type="text" placeholder="Palavra 3" name="word3"  required>. Nesse sentido, cabe analisar as causas socioeconômicas da <input type="text" placeholder="Palavra 4" name="word4"  required> do trabalho de cuidado no Brasil contemporâneo.
                </p>

                <p class="line-spacing">
                    Em primeira perspectiva, a sociedade limita a <input type="text" placeholder="Palavra 5" name="word5"  required> e sua função social ao ambiente caseiro e à realização de cuidados especiais. Isso ocorre porque, de acordo com o corpo social estabelecido, a essência cuidadosa é algo inerente ao feminino, muitas vezes associada à <input type="text" placeholder="Palavra 6" name="word6"  required>. Todavia, essa característica é construída e imposta às <input type="text" placeholder="Palavra 7" name="word7"  required>. Esse cenário é instigado pela cultura <input type="text" placeholder="Palavra 8" name="word8"  required> e <input type="text" placeholder="Palavra 9" name="word9"  required> da nação, que atribui o cuidado e o lar somente ao sexo feminino. Desse modo, esse trabalho é visto como uma obrigação da mulher, e não como um trabalho de fato, o que, por conseguinte, gera a <input type="text" placeholder="Palavra 10" name="word10"  required> de tão importante exercício.
                </p>

                <p class="line-spacing">
                    Ademais, o cuidado não é percebido com valor de mercado. Isso, porque não é uma atividade altamente lucrativa e produtiva, do ponto de vista mercadológico, o que, segundo Byung Chul-Han em "A Sociedade do Cansaço", são fatores valorizados nos dias atuais. Esse panorama se dá pela lógica <input type="text" placeholder="Palavra 11" name="word11"  required> que norteia as relações de trabalho no mundo hoje, priorizando o lucro de indústrias e empresas em detrimento do cuidado com pessoas — majoritariamente exercido por <input type="text" placeholder="Palavra 12" name="word12"  required>. Consequentemente, há a má remuneração dessa ocupação, o que afeta a igualdade de gênero na inserção no mercado de trabalho e atrapalha a emancipação feminina.
                </p>

                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </main>
    </div>

    <?php

if (!isset($_SESSION["ABRIU"])) {
    $_SESSION["ABRIU"] = true;
    ?>
    <div id='popup' class='PopUp-sobreposicao'>
        <div class='conteudo-popup'>
            <h2>BEM VINDO!</h2>
            <div class='check'>
                <div class='linha-checked-1'></div>
                <div class='linha-checked-2'></div>
            </div>
            <p>Desafie sua mente! Em "Lacuna Lógica", complete o texto com as palavras certas e veja se você consegue desvendar o sentido completo. Boa sorte e divirta-se!</p>
            <button onclick="Fechar_PopUp('popup')" class='Fechar-Popup'>FECHAR</button>
        </div>
    </div>
    <?php
}
?>

    
    </div>
 
