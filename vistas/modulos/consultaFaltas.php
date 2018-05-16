      <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONSULTA DE FALTAS ACADEMICAS
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Alumno</th>
                                        <th>Descripción de la falta</th>
                                        <th>Más detalles</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php

                                    $faltas = ControladorFaltasAcademicas::ctrConsultaFaltasAcademicas();

                                      foreach ($faltas as $key => $value) {

                                        echo'
                                          <tr>
                                              <td>'.$value["fecha"].'</td>
                                              <td>'.$value["e_nombres"].' '.$value["e_apellidos"].'</td>
                                              <td>'.$value["descripcion"].'</td>
                                              <td><a href="detalles/'.$value["id_falta_academica"].'">Ver más detalles</a></td>

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
