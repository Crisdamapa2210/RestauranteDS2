<?php
    include("../navbar/dir_navbar.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
incluir_navbar();
?>
<center><h1>¿Quienes Somos?</h1><br></center>
<center><p class="lead col-9">
Bienvenidos a Food's Store, donde la pasión por la buena comida y la atención al cliente se encuentran en perfecta armonía. Nuestro restaurante, fundado en 2021, ha sido un pilar en la comunidad de Guadalajara de Buga gracias a nuestra dedicación a ofrecer una experiencia culinaria inolvidable. En Food's Store, creemos que cada comida debe ser una celebración, y trabajamos arduamente para crear un ambiente acogedor y familiar donde todos nuestros huéspedes se sientan como en casa.

Nuestra misión es sencilla: brindar platos exquisitos elaborados con ingredientes frescos y de la más alta calidad. Nuestro menú, cuidadosamente diseñado por nuestro talentoso equipo de chefs, combina lo mejor de la cocina tradicional con toques modernos e innovadores, garantizando una explosión de sabores en cada bocado. Desde nuestras entradas hasta nuestros postres, cada plato es una obra de arte culinaria que refleja nuestra pasión y compromiso con la excelencia.

En Food's Store, nos enorgullece no solo en la comida que servimos, sino también en el servicio que ofrecemos. Nuestro equipo de profesionales dedicados está siempre dispuesto a ir más allá para asegurarse de que cada visita sea memorable. Ya sea que esté celebrando una ocasión especial, disfrutando de una cena familiar o simplemente pasando a tomar una copa con amigos, nuestra meta es hacer de su tiempo con nosotros una experiencia extraordinaria.

Además, en Food's Store valoramos la sostenibilidad y el apoyo a la comunidad local. Nos esforzamos por utilizar productos locales y sostenibles siempre que sea posible, contribuyendo así al bienestar de nuestro entorno y asegurando la frescura de nuestros ingredientes.

Gracias por elegirnos y ser parte de nuestra familia. Esperamos darle la bienvenida pronto y compartir con usted nuestra pasión por la buena comida y el buen vivir.


</p></center>

<center><div class="accordion col-9  " id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Nuestra comida
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Comidas Rapidas.</strong> En nuestro restaurante nos especializamos en la comida rapida como lo es Hamburguesas, Pizzas, Salchipapas, Perros calientes, Sandwich Q'banos con vista a ser un restaurante mas completo de acuerdo a las peticiones que los clientes puedan otrogar</div>
    </div>
  </div>
  <div class="accordion-item">

    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Reservaciones
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>¿Quieres apartar un espacio en el restaurante?.</strong> Desde nuestra pagina web podrás realizar reservaciones para poder disfrutar de una fecha en especifica ya sea con amigos, familia, pareja, arrocito en bajo, etc. solo tienes que contactarnos y tendras un cupo exclusivamente reservado para ti </div>
    </div>
  </div>
</div></center>

</body>
<?php
include("pie.php");
incluir_pie();
?>
</html>