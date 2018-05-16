      <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONSULTA DE REPRESENTANTES
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                              <thead>
                                  <tr>
                                      <th>Cédula</th>
                                      <th>Nombres y Apellidos</th>
                                      <th>Correo Electrónico</th>
                                      <th>Teléfono Celular</th>
                                      <th>Representado</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php

                                    $representantes = ControladorRepresentantes::ctrConsultaRepresentantes();

                                    foreach ($representantes as $key => $value) {

                                      echo'
                                        <tr>
                                            <td>'.$value["r_cedula"].'</td>
                                            <td>'.$value["r_nombres"].' '.$value["r_apellidos"].'</td>
                                            <td>'.$value["correo"].'</td>
                                            <td>'.$value["telefono"].'</td>
                                            <td>'.$value["e_nombres"].' '.$value["e_apellidos"].'</td>

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
