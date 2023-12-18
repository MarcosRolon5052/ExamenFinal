<div class="modal fade" id="idver<?=$row['idModalidad']?>" tabindex="-1" aria-labelledby="VistaModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="VistaModal">Vista Completa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="card" style="width: 28rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">MODALIDAD: <?=$row['nombre_modalidad']?></li>
                    <li class="list-group-item">COSTO: <?=$row['costo']?></li>
                    <li class="list-group-item">INSTRUCTOR: <?=$row['nombre']?><?=$row['apellido']?></li>
                </ul>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>