<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.104.2">
    <?php include_once ('../../header.php')  ?>
    <title>Membresias</title>    
    <style>
     
    </style>

    
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container mt-4">
    <div class="row justify-content-center">
      <h1 class="display-4 fw-normal">Membresias</h1>
      <p class="fs-5 text-muted">Ofrecemos una variedad de planes de membresía para satisfacer tus necesidades y metas específicas. Ya sea que busques entrenamiento personalizado, acceso a clases grupales o simplemente el uso de nuestras instalaciones, tenemos la opción perfecta para ti.</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Funcional</h3>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">100.000<span>&#8370;</span>.<small class="text-muted fw-light">/Mes</small></h1>
            <h4 class="card-subtitle mb-4">Asesoramiento Nutricional</h4>
            <h3 class="card-title pricing-card-title">100.000<span>&#8370;</span>.<small class="text-muted fw-light">/Mes</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Programas Variados.</li>
              <li>Entrenamiento basado en Movimientos Funiconal.</li>
              <li>Instructores Especializados.</li>
              <li>Equipamiento Especifico.</li>
            </ul>
            <div class="d-flex justify-content-between">
            <button id="btnNutricional1" type="button" class="w-100 btn btn-lg btn-success">Membresia Entrenamiento</button>
                <button type="button" class="w-100 btn btn-lg btn-primary" data-monto="100.000 ">Plan Entrenamiento y Alimentacion</button>
            </div>          
        </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h3 class="my-0 fw-normal">Musculacion</h3>
          </div>
          <div class="card-body">
          <img src=""  class="img-fluid mb-3" />
            <h1 class="card-title pricing-card-title">100.000<span>&#8370;</span>.<small class="text-muted fw-light">/Mes</small></h1>
            <h4 class="card-subtitle mb-4">Asesoramiento Nutricional</h4>
            <h3 class="card-title pricing-card-title">100.000<span>&#8370;</span>.<small class="text-muted fw-light">/Mes</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Equipo de Calidad</li>
              <li>Entrenamiento Personalizado</li>
              <li>Programas de Entrenamiento</li>
              <li>Horarios Flexibles</li>
            </ul>
            <div class="d-flex justify-content-between">
            <button id="btnNutricional2" type="button" class="w-100 btn btn-lg btn-danger" onclick="alternarBoton()">Asesoramiento Nutricional</button>
                <button type="button" class="w-100 btn btn-lg btn-primary" data-toggle="modal" data-target="#modalPagos">Comprar Membresia</button>
            </div>
        </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h3 class="my-0 fw-normal">Crossfit</h3>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">150.000<span>&#8370;</span>.<small class="text-muted fw-light">/Mes</small></h1>
            <h4 class="card-subtitle mb-4">Asesoramiento Nutricional</h4>
            <h3 class="card-title pricing-card-title">100.000<span>&#8370;</span>.<small class="text-muted fw-light">/Mes</small></h3>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Sesiones de Entrenamiento Diarias(WOD)</li>
              <li>Entrenadores Certificados</li>
              <li>Equipamiento Especifico</li>
              <li>Sesiones en Grupo</li>
            </ul>
            <div class="d-flex justify-content-between">
            <button type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#modalPagos" data-monto="200000">Asesoramiento Nutricional</button>
                <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#modalPagos" data-monto="200000">Comprar Membresia</button>
            </div>          
        </div>
        </div>
      </div>
    </div>
</div>
  </main>
    <!-- Formulario de Pagos AJAX-->
    <div class="modal fade" id="modalPagos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Realizar pago</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="guardarPago.php" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <label>Monto a pagar</label>
                <input type="text" id="montoModal" class="form-control" readonly>
              </div>
              <div class="col-12">
                <label>Usuario</label>
                <input type="text" id="matricuala" class="form-control" required>
              </div>
              <div class="col-12">
                <label>Fecha</label>
                <input type="date" id="feca" class="form-control" required value="<?= date('Y-m-d'); ?>">
              </div>
              <div class="col-12">
                <label>Matricula</label>
                <input type="text" id="matricuala" class="form-control" readonly>
              </div>
              <div class="col-12">
                <label>Metodo Pago</label>
                <select class="form-control" name="idSexo" id="idSexo" required>
                    <option value="1">Efectivo</option>
                </select>
              </div>
              <div class="col-12">
                <label></label>
                <input type="text" id="montoModal" class="form-control" readonly>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Realizar Pago</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    
  <footer>
    
  </footer>
  </body>
  <?php include_once ('../../footer.php')  ?>
</html>
