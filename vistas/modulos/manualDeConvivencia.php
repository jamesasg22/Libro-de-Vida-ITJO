    <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                          CONSULTA DEL MANUAL DE CONVIVENCIA
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Gravedad</th>
                                        <th>Descripción del articulo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php

                                    $manualConvivencia = ControladorManualConvivencia::ctrConsultaManualConvivencia();

                                      foreach ($manualConvivencia as $key => $value) {

                                        echo'
                                          <tr>

                                              <td>'.$value["id_manual_convivencia"].'</td>
                                              <td>'.$value["gravedad"].'</td>
                                              <td>'.$value["gravedad_descripcion"].'</td>

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
