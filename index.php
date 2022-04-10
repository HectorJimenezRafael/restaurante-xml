<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anaheim&family=Irish+Grover&display=swap" rel="stylesheet">

<!-- javascript Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MENÚ RESTAURANTE</title>
</head>
<!-- poner foto del restaurante y del nombre -->
<body>
    <div>
        <img class="hectorini" src="./img/restaurante2.png" alt="">
    <img class="titulo" src="img/menu.png" alt="">
    <img class="titulo" src="img/hectorinoimg.jpg" alt="">
    </div>
    <br>
    <br>
<?php

/* lectura del documento xml */
if (file_exists('xml/menu.xml')) {
    $menu = simplexml_load_file('xml/menu.xml');
} else {
    exit('Error abriendo menu.xml.');
}



echo "<div class='column-3'>";
echo "<b class='tapas'>TAPAS</b>";
echo "<br>";
echo "<br>";
    foreach($menu->plato as $plato){
        
        if ($plato['tipo']=='Tapas') {
        
        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo " PVP ";
        echo $plato->precio."€";
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";

       
        foreach($plato->caracteristicas->item as $item) {
            echo "<img class='icono' src=".$item." alt=''>";
          
        }
        echo "<br>";
        echo "---------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";
        

}

}
echo "</div>";


echo "<div class='column-3'>";
echo "<b class='tapas'>ENSALADAS</b>";
echo "<br>";
echo "<br>";
    foreach($menu->plato as $plato){
        
        if ($plato['tipo']=='Ensaladas') {
        
        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo " PVP ";
        echo $plato->precio."€";
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";

        foreach($plato->caracteristicas->item as $item) {
            echo "<img class='icono' src=".$item." alt=''>";
          
        }
            echo "<br>";
            
        echo "---------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";
        

}

}
echo "</div>";

echo "<div class='column-3'>";
echo "<b class='tapas'>PIZZAS</b>";
echo "<br>";
echo "<br>";
    foreach($menu->plato as $plato){
        
        if ($plato['tipo']=='Pizzas') {
        
        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo " PVP ";
        echo $plato->precio."€";
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";

        foreach($plato->caracteristicas->item as $item) {
            echo "<img class='icono' src=".$item." alt=''>";
          
        }
        echo "<br>";
        echo "---------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";

}

}
echo "</div>";

echo "<div class='column-3'>";
echo "<b class='tapas'>COMBINADOS</b>";
echo "<br>";
echo "<br>";
    foreach($menu->plato as $plato){
        
        if ($plato['tipo']=='Combinado') {
        
        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo " PVP ";
        echo $plato->precio."€";
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";
        foreach($plato->caracteristicas->item as $item) {
            echo "<img class='icono' src=".$item." alt=''>";
          
        }
        echo "<br>";
        echo "---------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";

}

}
echo "</div>";

echo "<div class='column-3'>";
echo "<b class='tapas'>SANDWICHES</b>";
echo "<br>";
echo "<br>";
    foreach($menu->plato as $plato){
        
        if ($plato['tipo']=='Sandwich') {
        
        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo " PVP ";
        echo $plato->precio."€";
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";

        foreach($plato->caracteristicas->item as $item) {
            echo "<img class='icono' src=".$item." alt=''>";
          
        }
        echo "<br>";
        echo "---------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";

}

}
echo "</div>";


echo "<div class='column-3'>";
echo "<b class='tapas'>POSTRES</b>";
echo "<br>";
echo "<br>";
    foreach($menu->plato as $plato){
        
        if ($plato['tipo']=='Postres') {
        
        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo " PVP ";
        echo $plato->precio."€";
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";

        foreach($plato->caracteristicas->item as $item) {
            echo "<img class='icono' src=".$item." alt=''>";
          
        }
        echo "<br>";
        echo "---------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";

}

}
echo "</div>";
echo "<br>";
echo "<br>";


    

    ?>
    <br>
    <!-- aqui va la leyenda -->
<div class="column-1 ">
<h1>Leyenda</h1>
</div>



    <div class="column-6">
    
<h2>Carne</h2> <img class='icono' src="img/carne.png" alt=''>
</div>
<div class="column-6">
<h2>Para compartir</h2> <img class='icono' src="img/compartir.png" alt=''>
</div>

<div class="column-6">
<h2>Ensaladas</h2> <img class='icono' src="img/ensalada.png" alt=''>
</div>

<div class="column-6">
<h2>Pescado</h2> <img class='icono' src="img/pescado.svg" alt=''>
</div>

<div class="column-6">
<h2>Picante</h2> <img class='icono' src="img/picante.png" alt=''>
</div>

<div class="column-6">
<h2>Sandwich</h2> <img class='icono' src="img/sandwich.png" alt=''>
</div>

<div class="column-6">
<h2>Sin glúten</h2> <img class='icono' src="img/singluten.svg" alt=''>
</div>

<div class="column-6">
<h2>Elaboración própia</h2> <img class='icono' src="img/casa.png" alt=''>
</div>

<div class="column-6">
<h2>De los más servidos</h2> <img class='icono' src="img/destacado.png" alt=''>
</div>



<!-- aquí va el footer con los datos del RESTAURANTE -->
<footer  class="column-1">

<section style="background-color: chocolate" class="row">
    <div class="column-4 padding-s">

        <h3>Redes</h3>
        <p> <img class="icono-footer" src="img/insta.png" alt=""> : bocatto_hectorini</p>
        <p> <img class="icono-footer" src="img/tiktok.png" alt=""> : bocatto_de_hectorini</p>
       
       

    </div>
    <div class="column-4 padding-s">

    <h3>Nosotros</h3>
        <p>Compromiso <img class="icono-footer" src="img/compromiso.png" alt=""></p>
        <p>Buen trato con el cliente</p>
        
        

    </div>
    <div class="column-4 padding-s">

       
        <h3>Contacto para reservas</h3>
        <p> <img class="icono-footer" src="img/telefono.png" alt=""> :  36181612</p>

    </div>
    <div class="column-4 padding-s">

        <h3>Horario y dirección </h3>
        <p>13:00-23:00 <img class="icono-footer" src="img/reloj.png" alt=""></p>
        <P>Avenida Manzana, Num 36</P>
        

    </div>
</section>
</footer>


</body>
</html>