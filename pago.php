<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pago Empleado</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <header>
      <h1 id="centrado">PAGO DE EMPLEADOS</h1>
   </header>
   <section>
      <table align="center">
         <form action="pago.php" method="post">
            <tr>
               <td width="200">Empleado</td>
               <td> <input type="text" name="txtEmpleado" id="" size="40" required autofocus > </td>
            </tr>
            <tr>
               <td width="200">Horas trabajadas</td>
               <td> <input type="text" name="txtHoras" id="" size="40" required autofocus> </td>
            </tr>
            <tr>
               <td width="200">Tarifa por horas</td>
               <td> <input type="text" name="txtTarifa" id="" size="40" required autofocus> </td>
            </tr>
            <tr>
               <td width="20"></td>
               <td> <input type="submit" value="procesar">
                  <input type="reset" value="Limpiar">
               </td>
            </tr>         

            <!-- CODIGO PHP -->
            <?php
            error_reporting(0);
            $empleado = $_POST[ 'txtEmpleado' ];
            $horas = $_POST[ 'txtHoras' ];
            $tarifa = $_POST[ 'txtTarifa' ];

            //REALIZAR LOS CALCULOS
            $salarioBruto = $horas * $tarifa;
            $descuentoSeguroSalud = $salarioBruto * 0.12;           
            $salarioNeto = $salarioBruto - $descuentoSeguroSalud;            
            ?>
                   
            <tr>          
               <td>Empleado</td>
               <td> <?php echo $empleado; ?></td>         
            </tr>
            <tr>
               <td>Salario Bruto</td>
               <td> <?php echo '$'. $salarioBruto; ?></td>         
            </tr>
            <tr>          
               <td>Descuento Salud</td>
               <td> <?php echo '$'. $descuentoSeguroSalud; ?></td>         
            </tr>
            <tr>          
               <td>Salario Neto</td>
               <td> <?php echo '$'. $salarioNeto; ?></td>         
            </tr>
            
         </form>
      </table>
   </section>

</body>

</html>