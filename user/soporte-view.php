<div class="container">
  <div class="row well">
    <div class="col-sm-3">
      <img src="img/soporte.jpg" class="img-responsive" alt="Image">
    </div>
    <div class="col-sm-9 lead">
      <h2 class="text-info">Centro de soporte de Conectores Rosario</h2>
      <p>Si usted tiene problemas con alguno de nuestros productos no dude en hacernoslo saber,
         mediante un nuevo ticket usted puede dejar su reclamo, al cual nosotros podremos responderle
          y ayudarle a solucionar su problema.
          <br>
          Si usted ya nos ha enviado un ticket, puede consultar el estado del mismo mediante su
          <strong>Ticket ID</strong>.</p>
    </div>
  </div>
  <!--fin row 1-->

  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-info">
        <div class="panel-heading text-center"><i class="fa fa-file-text"></i>&nbsp;<strong>Nuevo Ticket</strong></div>
        <div class="panel-body text-center">
          <img src="./img/ticketicon.jpg" width="200" height="200" alt="">
          <h4>Crear un nuevo ticket</h4>
          <p class="text-justify">
            Si tiene un problema o duda al respecto de alguno de nuestros productos reportalo
             creando un nuevo ticket y te ayudaremos a solucionarlo.
             Si desea actualizar una peticion ya realizada utiliza el formulario
              de la derecha <em>Consultar estado de Ticket</em>, debera estar previamente registrado como
              <strong>usuario</strong> para poder abrir un nuevo ticket.</p>
            <p>Para crear un nuevo <strong>ticket</strong> has click en el siguiente boton</p>
          <a type="button" class="btn btn-info" href="./index.php?view=ticket">Nuevo Ticket</a>
        </div>
      </div>
    </div>
    <!--fin col-md-6-->
    
    <div class="col-sm-6">
      <div class="panel panel-danger">
        <div class="panel-heading text-center"><i class="fa fa-link"></i>&nbsp;<strong>Comprobar estado de Ticket</strong></div>
        <div class="panel-body text-center">
          <img src="./img/revisar.png" width="200" height="200" alt="">
          <h4>Consultar estado de ticket</h4>
          <form class="form-horizontal" role="form" method="GET" action="./index.php">
            <input type="hidden" name="view" value="ticketcon">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" name="email_consul" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label">ID Ticket</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_consul" placeholder="ID Ticket" required="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Consultar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--fin col-md-6-->
  </div>
  <!--fin row 2-->
</div>
<!--fin container-->