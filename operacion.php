<?php
class operacion{
        //atributos
        private $n;
        private $cadena;
        private $a;
        private $b;
        private $c;
        //metodos
        public function __construct($n,$cadena,$a,$b,$c){
            $this->n=$n;
            $this->cadena=$cadena;
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }

        public function calcularFibonacci(){
            $n1=0;
            $n2=1;
            echo "<select>";
            echo "<option>".$n1."</option>";
            echo "<option>".$n2."</option>";
            for($i=0;$i<($this->n-2);$i++)
            {
                $fibo=$n1 + $n2;
                echo "<option>".$fibo."</option>";
                $n1=$n2;
                $n2=$fibo;

            }
            echo "</select>";



        }
        public function mayor(){ //a>b a>c b>a b>c c>a c>b
            echo "&nbsp".$this->a."&nbsp".$this->b."&nbsp".$this->c."<br>";
            if(($this->a>$this->b)&&($this->a>$this->c))
                echo "&nbsp <b>".$this->a."</b>&nbsp".$this->b."&nbsp".$this->c;
            if(($this->b>$this->a)&&($this->b>$this->c))
                echo "&nbsp".$this->a."&nbsp<b>".$this->b."</b>&nbsp".$this->c;
            if(($this->c>$this->a)&&($this->c>$this->b))
                echo "&nbsp".$this->a."&nbsp".$this->b."&nbsp<b>".$this->c."</b>";
            
        }
        public function piramide(){
            $n=strlen($this->cadena);
            if(($n%2)==0){
            $this->cadena="_".$this->cadena;            
            }
            $n=strlen($this->cadena);

		    if(($n%2)==0)
			    {$i=($n/2)-1;}
		    else
			    {$i=($n/2)-0.5;}
		    $j=1;
		    $bandera=true;
		    echo ("<div align='center'>");
		    do
		    {
			    $sc=substr($this->cadena, $i,$j);
			    if(($n%2)==0)
			    {
				    if($i==-1)
				    {
					echo("$this->cadena");
					$bandera=false;
				    }
			    }
			    if($i==-1)
			    {
				$bandera=false;
			    }
			    else
			    {
	   		    echo("$sc<br>");
	   		    $i--;
	   		    $j=$j+2;
			    }
		    }while($bandera);
		    echo("</div>");
        }
    }
?>