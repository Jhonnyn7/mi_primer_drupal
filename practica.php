<?php
/*$entrada = "este texto tiene muchos caracteres para ser un titulo";

  $contador =  strlen($entrada);

  if($contador <= 20){
    print $entrada;
  }
  else if($contador >= 21){
    echo "el texto: $entrada tiene $contador";
  }
    else{
    echo "error: no funcionan las condicionales  del if :v";
  }  *----incincluso----*    */

  class nueva_clase{
    protected function funcion_1(){
      echo "esta es la funcion 1 ";
    }
  }
  class clase_2 extends nueva_clase{
    public function funcion_1(){
      parent::funcion_1();
      echo "esta es la funcion 2";
    }
  }

  $clase= new clase_2();
  $clase->funcion_1();


class claseNueva{
  public $var1=2;
  public $var2=20;
  public static $varstatic="<br>mi variable estatica";
  protected $varpublic="esta variable es protegida";
  public function contar(){
    for($this->var1; $this->var1 <= $this->var2; $this->var1=$this->var1+2){
      echo "<br>$this->var1,";
      }
      echo "<br> for terminado";
    }
  function prueba(){
    echo $this->varpublic;
  }
    function __construct(){
      self::contar();
    }
/*
    function __destruct(){
      //self::contar();
      echo '<br>se supone que esta"destruido"';
    }*/
  }

class claseHereda extends claseNueva{
  protected $varpublic="<br>reemplazo de la variable protegida";
  function prueba(){
    echo $this->varpublic;
  }
}


$claseNueva=new claseNueva();
print $claseNueva::$varstatic;
//$prueba="claseNueva";
//print $prueba::$varstatic;
$claseHereda=new claseHereda();
//echo $claseHereda->varpublic;
$claseHereda->prueba();
//$claseNueva->contar();

?>
