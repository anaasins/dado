<?php
/**
 * Clase de dado creada por Ana Asins
 */
class jugadorDado
{
  //atributos
  private $minNumDado=0;
  private $maxNumDado=12;
  private $tiradas=[];


//setters
  public function setminNumDado($minNumDado){
    if ($minNumDado<0) {
      $this->minNumDado=0;
    }else {
      $this->minNumDado=$minNumDado;
    }
  }

  public function setmaxNumDado($maxNumDado){
    if ($maxNumDado>12) {
      $this->maxNumDado=12;
    }else {
      $this->maxNumDado=$maxNumDado;
    }
  }

  //getters
  public function getminNumDado(){
    return $this->minNumDado;
  }
  public function getmaxNumDado(){
    return $this->maxNumDado;
  }

  //funcion tirar dado
  public function tirarDado($minNumDado, $maxNumDado){
    $tirarDado=rand($this->minNumDado, $this->maxNumDado);
    $this->guardarTiradas($tirarDado);
    echo $tirarDado;
  }

  //funcion guardar tiradas
  private function guardarTiradas($tirarDado){
     $this->tiradas[]=$tirarDado;
  }

  //funcion imprimir tiradas
  public function imprimirTiradas(){
    print_r($this->tiradas);
  }

  //funcion calcular media tiradas
  public function calcularMediaTiradas(){
    $media=0;
    for ($i=0; $i < count($this->tiradas); $i++) {
      $media=$media+$this->tiradas[$i];
    }
    $media=$media/count($this->tiradas);
    echo "Media: " .round($media);
  }


}

 ?>
