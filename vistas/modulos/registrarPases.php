<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          REGISTRAR ALUMNOS CON PASES ENTRADAS / SALIDAS
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

          <label for="email_address">Tipo de pase</label>
          <div class="form-group">
            <div class="form-line">
              <p>
                  Entrada &nbsp;&nbsp; <input name="pase" type="radio" checked value="1"/>&nbsp;&nbsp;&nbsp;&nbsp;
                  Salida  &nbsp;&nbsp; <input name="pase" type="radio" value="2"/>
             </p>
            </div>
          </div>
          <label for="email_address">Fecha - Hora</label>
          <div class="form-group">
            <div class="form-line">
              <p>
                <input id="datetime" type="datetime-local" name="fecha" required>
             </p>
            </div>
          </div>
          <label for="password">Descripción del pase</label>
          <div class="form-group">
            <div class="form-line">
              <textarea rows="4" name="descripcion" class="form-control no-resize" placeholder="Ingrese el motivo del pase" required></textarea>
            </div>
          </div>
          <br>

                      <?php

                        $registrarPase = new ControladorPases();
                        $registrarPase -> ctrRegistrarPase();

                        ?>
          <div class="align-center">
            <button type="submit" id="enviar"  onmouseover="limpiar();" class="btn btn-danger btn-lg m-t-15 waves-effect">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- #END# Advanced Form Example With Validation -->
