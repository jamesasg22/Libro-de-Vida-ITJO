      <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONSULTA DE PASES SALIDA / ENTRADA
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                              <thead>
                                  <tr>
                                      <th>Cédula</th>
                                      <th>Alumno</th>
                                      <th>Tipo</th>
                                      <th>Descripción del pase</th>
                                      <th>Fecha</th>
                                  </tr>
                              </thead>
                              <tbody>
                                    <?php

                                      $pases = ControladorPases::ctrConsultaPases();

                                        foreach ($pases as $key => $value) {

                                          echo'
                                            <tr>

                                                <td>'.$value["e_cedula"].'</td>
                                                <td>'.$value["e_nombres"].' '.$value["e_apellidos"].'</td>
                                                <td>'.$value["pase"].'</td>
                                                <td>'.$value["descripcion"].'</td>
                                                <td>'.$value["fecha"].'</td>

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
        </div>
