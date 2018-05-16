<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          REGISTRAR ALUMNOS CON JUSTIFICATIVOS
        </h2>
      </div>
      <div class="body">
        <form method="POST">
          <label for="email_address">Ingrese la cédula del Alumno que quiere buscar</label>
          <div class="form-group">
            <div class="form-line">
               <input type="text" class="form-control" placeholder="Cédula" id="cedula" onkeypress="return solonumeros(event);">
             </div>
               <div id="resultado"></div>
               <table class="table" id="tabla2" name="cedula">
                 <thead id="th2"></thead>
                 <tbody id="t2"></tbody>
               </table>
          </div>
          <label for="email_address">Justificación</label>
          <div class="form-group">
            <div class="form-line">
              <select class="form-control show-tick" name="justificativo">
                  <option value="1">Médico</option>
                  <option value="2">Deportivo</option>
                  <option value="3">Extra-curricular</option>
                  <option value="4">Otros</option>
              </select>

            </div>
          </div>
          <label for="email_address">Fecha - Hora</label>
          <div class="form-group">
            <div class="form-line">
              <p>
                <input id="datatime" type="datetime-local" name="fecha" required>
             </p>
            </div>
          </div>
          <label for="email_address">Descripción del justificativo</label>
          <div class="form-group">
            <div class="form-line">
               <textarea rows="4" name="descripcion" class="form-control no-resize" placeholder="Ingrese el motivo del justificativo..." required></textarea>
            </div>
          </div>
          <br>

                      <?php

                        $registrarJustificativo = new ControladorJustificativos();
                        $registrarJustificativo -> ctrRegistrarJustificativo();

                        ?>

          <div class="align-center">
            <button type="submit" id="enviar"  onmouseover="limpiar();" class="btn btn-danger btn-lg m-t-15 waves-effect">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
