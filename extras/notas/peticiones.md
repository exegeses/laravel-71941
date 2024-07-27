# Peticiones + Vistas

<div style="border-left:solid 4px #5CC9C1; padding-left: 24px">
<p>En Laravel no utilizamos un paradigna de archivos sino que utilizamos un paradigma de peticiones</p>  
<p>Este paradigma responde al patr´´on de diseño MVC</p>
</div>

<div style="text-align: center;"> 
    <img src="../imagenes/peticiones.png"> 
</div>

## Peticiones y rutas
<div style="border-left:solid 4px #5CC9C1; padding-left: 24px">
    <p>Las rutas si declaran que en el archivo "web.php" que está en el directorio /routes.</p>
    <p>Éste es el que conocemos como enrutador</p>
</div>
<div style="border-left:solid 4px #5CC9C1; padding-left: 24px">
    <p>Las peticiones al enrutador tienen el siguiente formato</p>
    Route::metodo('petición', acción)
</div>

<div style="border-left:solid 4px #5CC9C1; padding-left: 24px">
<p>
    El enrutadoor recibirá una petición y con ello decidirá qué acción realizar
</p>
</div>

## Vistas
<div style="border-left:solid 4px #5CC9C1; padding-left: 24px">
    <p>
        Las vistas son las pantallas que vamos a ver en nuestro navegador.
    </p>
    <p>
        Éstas deben almacenarse en el directorio 
        "/resouces/views" y deben tener la extensión .blade.php
    </p>

</div>


