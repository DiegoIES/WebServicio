<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulario</title>
        <style type="text/css">
        </style>
    </head>

    <body color="#FFFFFF">
        <FORM method="post" name="formulario">
            Nombre:<input type="text" name="nombre" id="nombre">
            <br />
            Apellido: <input type="text" name="apellido" id="apellido">
            <br />
            Carrera: <input type="text" name="carrera" id="carrera">
            <br />
            Materia: <input type="text" name="materia" id="materia">
            <br />
            <input type="submit" value="Enviar">
            <input type="reset">
            <?php
                $archivo = "alumnos.txt";//creamos un archivo llamado 'alumnos'
                $gestor = @fopen("alumnos.txt", "w");//abrimos este archivo

                fclose($gestor);//cerramos el archivo de alumnos
            ?>
        </FORM>
    </body>
</html>