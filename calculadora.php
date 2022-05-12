<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
    <div class="container">
       <form method="post" >
         Numero 1:<input type="number" name="numero1"  max="1000" min="-1000" required>
         Numero 2:<input type="number" name="numero2"  max="1000" min="-1000" required>
         <hr>
         <input type="radio" name="opcion" value="Sumar" required> Sumar
         <input type="radio" name="opcion" value="Restar" required> Restar
         <input type="radio" name="opcion" value="Multiplicar" required > Multiplicar
         <input type="radio" name="opcion" value="Dividir" required> Dividir
         <hr>
        <input type="submit" class="btn btn-success w-25" value="Enviar">
        <input type="reset" class="btn btn-danger w-25" value="Limpiar">
       </form>

       <div>
           <?php
           if ($_POST){
              $n1 = $_POST['numero1'];
              $n2 = $_POST['numero2'];
              $op=$_POST['opcion'];
            
            //funcion suma
            function suma ($n1,$n2){
                $s=$n1+$n2;
                return $s;
            }

            //funcion resta
            function resta ($n1,$n2){
                $s=$n1-$n2;
                return $s;
            }

            //funcion multiplicar
            function multiplicar ($n1,$n2){
                $s=$n1*$n2;
                return $s;
            }

             //funcion dividir
             function dividir ($n1,$n2){
                $s=$n1/$n2;
                return $s;
            }

            switch($op){
                case "Sumar":
                    echo "La resultado es: ",suma($n1,$n2);
               

                case "Restar":
                    echo "La resultado es: ",resta($n1,$n2);
                

                case "Multiplicar":
                    echo "El resultado es: ",multiplicar($n1,$n2);
               

                case "Dividir":
                    echo "La resultado es: ",dividir($n1,$n2);
              

                default:
                   "Error en la introduccion de datos";
                break;

            }
      
           }
           ?>

       </div>
    </div>
    
</body>
</html>