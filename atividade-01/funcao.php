
<?php
    function calcularAreaQuadrado(float $lado):float {
        $area = $lado * $lado;
        return $area;
      }      
     function mostrarAreaQuadrado (float $lado, float $area) :  void{
        echo ("A área do quadrado de lado ".$lado." é ".$area);
     }
     function perimetroQuadrado (float $lado):float{
        $perimetro = $lado + $lado + $lado + $lado;
        return $perimetro;
     }
     function mostrarPerimetroQuadrado (float $lado, float $perimetro): void {
        echo("O perimetro do quadrado com lado ".$lado." é ".$perimetro);
     }
?>

<?php
   function areaCirculo(float $raio):float{
      $area = 3.14 * $raio * $raio;
      return $area;
   }
   function mostrarAreaCirculo (float $raio, float $area) : void{
      echo ("A área do circulo de raio ".$raio." é ".$area);
   }
   function perimetroCirculo (float $raio): float{
      $perimetro = 2 * 3.14 * $raio;
      return $perimetro;
   }
   function mostrarPerimetroCirculo (float $raio, float $perimetro): void{
      echo("O perimetro do circulo com raio ".$raio." é ".$perimetro);
   }
?>

<?php
   function areaTrianculo(float $base, float $altura) : float{
      $area = ($base * $altura)/2;
      return $area; 
   }
   function mostrarAreaTriangulo (float $base, float $altura, float $area) : void{
      echo ("A área do triângulo retangulo de base ".$base." e altura ".$altura." é ".$area);
   }
   function perimetroTriangulo(float $base, float $altura): float{
      $perimetro = $base + $altura + $altura;
      return $perimetro;
   }
   function mostrarPerimetroTriangulo(float $base, float $altura, float $perimetro): void{
      echo ("O perimetro do triângulo retângulo de base ".$base." e altura ".$altura." é ".$perimetro);
   }
?>