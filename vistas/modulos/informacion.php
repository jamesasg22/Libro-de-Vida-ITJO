    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ACERCA DE
                    <small>Extend the default collapse behavior to create an accordion with the panel component.</small>
                </h2>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingOne_1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                            Instituto técnico Jesús Obrero
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                    <div class="panel-body">
                                      Somos una institución católica fundada en 1948 bajo el objetivo de llevar educación de calidad a jovenes caraqueños
                                       de escasos recursos, bajo los valores de una educación ignaciana, tecnificada y de calidad.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                           aria-controls="collapseTwo_1">
                                            Nosotros
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                    <div class="panel-body">
                                        Bajo el concepto de avanzar de manera cualitativa hacia la profesionalidad, los creadores del presente sistema
                                        funcionan como uno solo en el aporte de ideas y cración de sistemas de información, con ideas frescas y conceptos
                                        de ultima tecnología como PHP7, ECMASCRIPT6, utilizando el modelo vista-controlador orientado a objetos y la conexion a base de datos
                                        PDO.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingThree_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                           aria-controls="collapseThree_1">
                                            Caracas Nigth
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                    <div class="panel-body">
                                        Dando sus primeros pasos en el año 2017 y bajo las mentes visionarias de 3 jovenes programadores,
                                        el concepto de Caracas Nigth nace bajo el concepto de aportar ideas y trabajar como conjunto en
                                        el ambito educativo, sin embargo la idea ha ido evolucionando hasta el ambito profesional, transformandose
                                        en más que una idea en una sociedad, la cual busca el reconocimiento y profesionalismo
                                        dentro del ambiente del desarrollo de software
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
                <!-- Basic Example -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>GALERIA DE FOTOS</h2>
                        </div>
                        <div class="body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?php echo $url; ?>vistas/img/plantilla/6to.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $url; ?>vistas/img/plantilla/cn.png">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $url; ?>vistas/img/plantilla/aja.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo $url; ?>vistas/img/plantilla/progra.jpg">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Example -->
