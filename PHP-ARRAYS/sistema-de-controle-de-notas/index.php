<?php

    function calcularMedia(array $notas) : float {
        $soma = array_sum($notas);
        $quantidade = count($notas);
        $media = $soma / $quantidade;
        return $media;
    }

    $notasAlunos = [
        [8.5, 6.0, 7.8, 9.2, 5.5],
        [7.0, 8.0, 6.5, 7.5, 8.5],
        [6.5, 7.5, 4.5, 5.5, 7.0],
        [5.0, 4.6, 7.8, 9.0, 6.0]
    ];

    $totalAprovados = 0;
    $totalReprovados = 0;

    foreach ($notasAlunos as $indiceAluno => $notas) {
        $media = calcularMedia($notas);
        $status = $media >= 7.0 ? 'Aprovado' : 'Reprovado';
        
        if ($status === 'Aprovado') {
            $totalAprovados++;
        } else {
            $totalReprovados++;
        }
        
        echo "A média do Aluno " . ($indiceAluno + 1) . " é de: " . number_format($media, 2) . " - " . $status . PHP_EOL;
    }

    echo "Total de Alunos Aprovados: " . $totalAprovados . PHP_EOL;
    echo "Total de Alunos Reprovados: " . $totalReprovados . PHP_EOL;

?>
