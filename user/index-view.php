<!--************ Imagen que reemplaza el carousel para dispositivos moviles ********-->
<div id="img-cable-bg" class="container hidden-lg hidden-md hidden-sm" style="center">
    <img src="img/cablesfondo.jpg" class="img-responsive img-rounded" alt="Image">
</div>

<!--************************************Carousel Pc******************************-->
<div class="container hidden-xs">
    <div class="col-xs-12">
<div id="carousel-example-generic" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
    <div class="carousel-inner">
       <div class="item active">
           <p style="text-align:center;"><img src="img/cablemulti.jpg" width="850" height="450" alt=""></p>
          <div class="carousel-caption">
              Cable Multipolar Flexible
          </div>
       </div>
       <div class="item">
          <p style="text-align:center;"><img src="img/cableuni.jpg" width="850" height="450" alt=""></p>
          <div class="carousel-caption">
              Cable Unipolar Alta y Media Tension
          </div>
       </div>
       <div class="item ">
          <p style="text-align:center;"><img src="img/cablemallado.jpg" width="850" height="450" alt=""></p>
          <div class="carousel-caption">
              Cable Mallado o Blindado a medida
          </div>
        </div>
        <div class="item ">
          <p style="text-align:center;"><img src="img/cabletextil.jpg" width="850" height="450" alt=""></p>
          <div class="carousel-caption">
              Cable Recubierto tipo Textil
          </div>
        </div>
   </div>
   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
       <span class="icon-prev"></span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
     <span class="icon-next"></span>
   </a>
</div>
        </div>
     <div class="col-sm-2">&nbsp;</div>
</div>
<!--************************************ Fin Carousel******************************-->

 <hr class="hidden-xs">

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-info">Detalles sobre Nuestros productos</h1>
    </div>
  </div>
</div>
<br>
<div class="container">
    <div class="row">

    <div class="col-sm-6">
        <div class="card text-center bg-info">
            <br>
        <img src="img/cablemulti2.jpg" width="250" height="250"  alt="...">
        <div class="card-body">
            <h5 class="card-title">Cable Multipolar</h5>
            <p class="card-text">Los cables multipolares permiten agrupar todos los conductores de un circuito bajo una misma cubierta con la correcta coloración de cada aislamiento para identificar fácilmente la función del conductor.</p>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-center bg-info">
            <br>
        <img src="img/cableuni2.jpg" width="250" height="250"  alt="...">
        <div class="card-body">
            <h5 class="card-title">Cable Unipolar</h5>
            <p class="card-text">
                El cable unipolar o cable monopolar es de un solo conductor de cobre o aluminio forrado
                 con diversos tipos de materiales aislantes que le brindan diferentes características 
                 de capacidad y resistencia.
                </p>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-center bg-info">
        <br>
        <img src="img/cablemallado2.jpg" width="250" height="250"  alt="...">
        <div class="card-body">
            <h5 class="card-title">Cable Mallado o Blindado</h5>
            <p class="card-text">
                Un cable apantallado o blindado es un tipo de cable recubierto por una malla o un tubo metálico,
                 que actúa de haula de Faraday para evitar el acople de ruidos y otras interferencias, tanto del
                  entorno hacia el cable, como del cable al entorno.
            </p>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-center bg-info" style="padding-top: 10px;">
        <img src="img/cabletextil2.jpg" width="250" height="250"  alt="...">
        <div class="card-body">
            <h5 class="card-title">Cable Textil</h5>
            <p class="card-text">
            Cables que una vez recubiertos en textil y trenzados son
             usados principalmente en  locales domésticos, cocinas, oficinas, para refuerzos mecánicos
              pequeños, para la alimentación de aparatos  ligeros.
            </p>
        </div>
        </div>
    </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#carousel-example-generic").carousel({
            interval: 4000,
        });
    });
</script>