<!-- Textarea -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>REGISTRAR ALUMNOS CON FALTAS ACADEMICAS</h2>
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
                <label for="email_address">Tipo de Falta</label>
                <div class="form-group">
                  <div class="form-line">
                    <select class="form-control show-tick" name="manual">
                    <?php
                      $manualConvivencia = ControladorManualConvivencia::ctrConsultaManualConvivencia();

                        foreach ($manualConvivencia as $key => $value) {
                          echo'
                            <tr>
                              <option value="'.$value["id_manual_convivencia"].' ">'.$value["gravedad"].' - '.$value["gravedad_descripcion"].'</option>
                            </tr>
                          ';
                      }

                      ?>
                    </select>
                  </div>
                </div>
                <label for="email_address">Describa como sucedió la falta</label>
                <div class="form-group">
                  <div class="form-line">
                     <textarea rows="4" name="descFalta" class="form-control no-resize" placeholder="No lo diga, escribalo..." required></textarea>
                  </div>
                </div>
                <label for="password">Acuerdos</label>
                <div class="form-group">
                  <div class="form-line">
                    <textarea rows="4" name="acuerdo" class="form-control no-resize" placeholder="De acuerdo a lo escrito, se llegó a los siguientes acuerdos y medidas" required></textarea>
                  </div>
                </div>
                <br>

                            <?php

                              $registrarFalta = new ControladorFaltasAcademicas();
                              $registrarFalta -> ctrRegistrarFalta();

                              ?>
                <div class="align-center">
                  <button type="submit" id="enviar"  onmouseover="limpiar();" class="btn btn-danger btn-lg m-t-15 waves-effect">Registrar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Textarea -->
