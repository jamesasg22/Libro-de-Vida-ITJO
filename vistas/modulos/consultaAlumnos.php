        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CONSULTA DE ALUMNOS
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>Cédula</th>
                                        <th>Alumno</th>
                                        <th>Año</th>
                                        <th>Sección</th>
                                        <th>Número de lista</th>

                                    </tr>
                                </thead>

                                <tbody>

                                <?php

                            				$alumnos = ControladorAlumnos::ctrConsultaAlumnos();

                            				foreach ($alumnos as $key => $value) {

                                      echo'
                                        <tr>

                                            <td>'.$value["id_estudiante"].'</td>
                                            <td>'.$value["e_cedula"].'</td>
                                            <td>'.$value["e_nombres"].' '.$value["e_apellidos"].'</td>
                                            <td>'.$value["curso"].'</td>
                                            <td>'.$value["seccion"].'</td>
                                            <td>'.$value["num"].'</td>

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
