
<?php
// exercicio 1
// funçao criada ( etapa 01)
function retornarMaiorValor (int $auxValor1, int $auxValor2): int{
    if($auxValor1>$auxValor2){
        return $auxValor1;
    }else{
        return $auxValor2;
    }
}

?>

<?php
// exercicio 2
function verificarAprovacao(float $nota01, float $nota02, float $nota03) : void {
    $media = ($nota01 + $nota02 + $nota03) / 3;
    if ($media >= 6) {
        echo("Aluno APROVADO!!");
    } else {
        echo("Aluno REPROVADO!!");
    }
    return;
}
?>

<?php
// exercicio 3
function calcularMedia(float $nota01, float $nota02, float $nota03) {
    $media = ($nota01 + $nota02 + $nota03) / 3;
    return $media;
  }
  function mostrarMedia($media) {
    echo ("A média do aluno é: ") . $media;
  }
?>
<?php
// exercicio 4
function reajustarSalario($salarioAtual, $numReajustes) {
    $salarioReajustado = $salarioAtual + ($numReajustes * 50);
    return $salarioReajustado;
  }
  
  function mostrarSalario($salario) {
    echo "Salário atual: R$ " . $salario;
  }  
?>