<?php
    function calcularAreaQuadrado($lado):float {
        $area = $lado * $lado;
        return $area;
      }      
     function mostrarAreaQuadrado (float $lado, float $area) :  void{
        echo ("A area do quadrado é: ").$area;
     }
     function perimetroQuadrado (float $lado):float{
        $perimetro = $lado + $lado + $lado + $lado;
        return $perimetro;
     }
     function mostrarPerimetroQuadrado (float $lado, float $perimetro): void {
        echo("O perimetro do quadrado é: ").$perimetro;
     }
?>