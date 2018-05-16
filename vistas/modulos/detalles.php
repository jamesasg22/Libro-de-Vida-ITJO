
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            DETTALES DE LA FALTA ACADEMICA
                        </h2>
                    </div>

                    <div class="body">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Cédula</th>
                                  <th colspan="2">Alumno</th>
                                  <th>Curso</th>
                                  <th>Representante</th>
                                  <th>Correo</th>
                                  <th>Teléfeno</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php

                            $valor = $rutas[1];

                              $faltas = ControladorFaltasAcademicas::ctrConsultaFaltasAcademicasDetalles($valor);

                                foreach ($faltas as $key => $value) {
                                    if (isset($value["id_representante"])){
                                      $nombre = $value["r_nombres"];
                                      $apellido = $value["r_apellidos"];
                                      $correo = $value["correo"];
                                      $telefono = $value["telefono"];
                                    }else{
                                      $nombre = "No registrado ...";
                                      $apellido = "";
                                      $correo = "No registrado ...";
                                      $telefono = "No registrado ...";
                                    }

                                    if (isset($value["id_falta_academica"])) {
                                      $gravedad = $value["gravedad"];
                                      $descripcion_articulo = $value["gravedad_descripcion"];
                                      $descripcion_falta = $value["descripcion"];
                                      $acuerdo = $value["acuerdo"];
                                      $fecha = $value["fecha"];
                                    }else{

                                      $gravedad = "";
                                      $descripcion_articulo = "";
                                      $descripcion_falta = "No hay descripción de la falta";
                                      $acuerdo = "No hay un acuerdo";
                                      $fecha = "";

                                    }

                                  echo'
                                    <tr>

                                        <td>'.$value["e_cedula"].'</td>
                                        <td colspan="2">'.$value["e_nombres"].' '.$value["e_apellidos"].'</td>
                                        <td>'.$value["curso"].'-'.$value["seccion"].'-'.$value["num"].'</td>
                                        <td>'.$nombre.' '.$apellido.'</td>
                                        <td>'.$correo.'</td>
                                        <td>'.$telefono.'</td>

                                    </tr>
                            </tbody>

                                  ';
                              }

                            ?>
                       <thead>
                                <tr>
                                    <th colspan="7"></th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                    <th>Gravedad</th>
                                    <th colspan="6">Descripcón del articulo</th>
                                </tr>
                            </thead>

                            <tbody>
                              <tr>

                                  <td> <?php echo $gravedad; ?> </td>
                                  <td colspan="6"><?php echo $descripcion_articulo; ?> </td>

                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th colspan="7"></th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                    <th colspan="3">Descripcón de la Falta</th>
                                    <th colspan="3">Acuerdo</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>

                            <tbody>
                              <tr>

                                  <td colspan="3"><?php echo $descripcion_falta; ?></td>
                                  <td colspan="3"><?php echo $acuerdo; ?></td>
                                  <td><?php echo $fecha; ?></td>

                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th colspan="8"></th>
                                </tr>
                            </thead>

                            <thead>
                                <tr>
                                    <th colspan="8">Firmas</th>
                                </tr>
                            </thead>

                            <tbody>
                              <?php

                                foreach ($faltas as $key => $value) {

                                  echo'
                         <tr>


                                  <td colspan="4">'.$value["e_nombres"].' '.$value["e_apellidos"].'</td>
                                  <td colspan="4">'.$value["r_nombres"].' '.$value["r_apellidos"].'</td>

                                </tr>

                                  ';
                              }

                            ?>

                            </tbody>



                      </table>
                    </div>

                </div>
            </div>
        </div>
