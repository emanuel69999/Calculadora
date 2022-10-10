  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap"
    rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>CALCULADORA CON PHP</title>


</head>
<body>
    <style>
        * {
    font-family:  'Times New Roman', Times, serif;
    color: rgb(38, 106, 173);
}

body {
    margin: 0;
    background-color: #224870;
}

.contenido{
    background: #000;
    margin: auto;
    text-align: center;
    margin-top: 4%;
    border:2px solid rgb(255, 255, 255);
    width: 500px;
    border-radius: 20px;
}

    </style>

    <div class="contenido container">
        <h1>CASIO PHP</h1>

        <div class="pantalla">
        <div class="container resul ado">
        <br>
        <?php
        if ($_POST){
            function sumar (){
                echo "La suma de los numeros es: ". ($_POST['numero1']+$_POST['numero2']);
            }

            function Restar (){
                echo "La Resta de los numeros es: ". ($_POST['numero1']-$_POST['numero2']);
            }

            function Multiplicar (){
                echo "La multiplicacion de los numeros es: ". ($_POST['numero1']*$_POST['numero2']);
            }

            function Division (){
                if ($_POST['numero2']==0)
                    $d="Error: division por 0";
                else
                    $d=$_POST['numero1']/$_POST['numero2'];
                    echo "La division de los numeros es: ".$d;
            }

            function Potenciacion (){
                echo "La Potenciacion de los numeros es: ". (pow($_POST['numero1'],$_POST['numero2']));
            }

            function Concatenacion (){
                echo "La Concatenacion de los numeros es: ". ($_POST['numero1'].$_POST['numero2']);
            }
                switch($_POST['opcion']){
                    case 'sumar':
                        Sumar();
                        break;
                    case 'restar':
                        Restar();
                        break;
                    case 'multiplicar':
                        Multiplicar();
                        break;
                    case 'division':
                        Division();
                        break;
                    case 'potenciacion':
                        Potenciacion();
                        break;
                    case 'concatenacion':
                        Concatenacion();
                        break;
                    default:
                        echo "SIXTANT ERROR ";
                        break;
                }
        }
            ?>
        </div>
    <br>
        <form method="post">
            <br>
            <input class="t1" type="number" max=10000 placeholder="0" min="0" name="numero1" required autofocus>
            <label>   →   </label>
            <input class="t1" type="number" max="10000" min="0" placeholder="0" name="numero2" required>

            </div>
            <hr>
            <input type="radio" class="form-check-input" name="opcion" value="sumar" required> Sumar
            <input type="radio" class="form-check-input" name="opcion" value="restar" required> Restar
            <input type="radio" class="form-check-input" name="opcion" value="multiplicar" required> Multiplicar
            <br>
            <input type="radio" class="form-check-input" name="opcion" value="division" required> Dividir
            <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required> Potenciacion
            <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required> Concatenacion
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar">
            <input type="reset" class="btn btn-danger w-25" value="Limpiar">
        </form>
        <br>
        <br>
    </div>
</body>
</html>

