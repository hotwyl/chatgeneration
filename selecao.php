<?php
$temas = [
    'Marketing afiliado',
    'Marketing multinível',
    'White-label',
    'PLR - Private Label Rights',
    'Dropshipping',
    'PRINT ON DEMAND',
    'dinheiro online',
    'renda extra',
    'trabalho na internet',
    'renda compartilhada'
];

$questions = [
    'assuntos mais quentes sobre',
    'principais duvidas sobre',
    'erros mais frequentes sobre',
    'melhores dicas sobre',
    'principais curiosidades sobre',
    'top assuntos sobre',
    'temas mais pesquisados sobre',
    'topicos mais populares sobre',
    'principais temas sobre',
    'principais assuntos sobre',
    'principais topicos sobre',
    'temas relevantes sobre',
    'assuntos relevantes sobre',
    'assuntos populares sobre',
    'assuntos mais quentes sobre',
    'temas relevantes sobre',
    'temas populares sobre',
    'temas mais quentes sobre',
    'topicos relevantes sobre',
    'topicos mais quente sobre',
    'topicos populares sobre',
    'duvidas frequente sobre',
    'curiosidades sobre',
    'dicas sobre',
];

$arr = [];
foreach ($temas as $tema) {
    $arr['pesquisa'][] = 'blogs sobre '. $tema;
    $arr['pesquisa'][] = 'sites sobre '. $tema;
    $arr['pesquisa'][] = 'influencers do nicho de '. $tema;
    foreach ($questions as $question) {
        $arr['prompt']['post'][] = 'liste '.$question.' '.$tema.' para escrever artigo para blog';
        $arr['prompt']['video'][] = 'liste '.$question.' '.$tema.' para escrever roteiro de video para youtube';
        $arr['prompt']['redesocial'][] = 'liste '.$question.' '.$tema.' para escrever post para rede social';
    }
}

echo json_encode($arr, true); 