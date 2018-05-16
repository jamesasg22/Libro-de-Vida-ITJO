  <?php
      $justificativosTotal = ControladorJustificativos::ctrConsultaJustificativosTotal();
      $faltasTotal = ControladorFaltasAcademicas::ctrConsultaFaltasAcademicasTotal();
      $pasesTotal = ControladorPases::ctrConsultaPasesTotal();
  ?>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <center><h4><span class="label bg-pink">Faltas</span> <span class="label label-info">Pases</span> <span class="label bg-amber">Justificativos</span></h4></center>
                </div>
                <div class="body align-center">
                    <div class="sparkline-pie"><?php echo $faltasTotal["countf"];?>,<?php echo $pasesTotal["countp"];?>,<?php echo $justificativosTotal["countj"];?></div>
                </div>
            </div>
        </div>

        <!-- Bar Chart -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <h2>FALTAS REGISTRADAS</h2>
                </div>
                <div class="body">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="150px" data-bar-Width="16" data-bar-Spacing="7" data-bar-Color="rgb(0, 188, 212)">
                        6,7,8,9,10,5,13,18,21,7,9
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Bar Chart -->

        <!-- Line Chart -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <h2>FALTAS REGISTARDAS</h2>
                </div>
                <div class="body">
                    <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                         data-offset="90" data-width="100%" data-height="150px" data-line-Width="2" data-line-Color="rgb(0, 188, 212)"
                         data-fill-Color="rgba(0, 188, 212, 0.3)">
                        6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Line Chart -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="body">
                        <blockquote>
                            <p>MISIÓN</p>
                            <footer><cite title="Source Title">“Procurar el mejor escenario para el cuidado y la formación integral, haciendo énfasis en el desarrollo social y emocional de los alumnos, en un ambiente natural, seguro, armónico y estimulante, propicio para el aprendizaje a través de la experiencia.
                              <br><br>Para ello contamos con un personal altamente calificado, motivado y en permanente actualización. Promovemos actividades para la integración de la familia así como una orientación y comunicación constante”.</cite></footer>
                        </blockquote>
                        <blockquote>
                          <p>VISIÓN</p>
                          <footer><cite title="Source Title">"Somos una institución educativa, reconocida como líderes por mantenernos a la vanguardia en la formación de alumnos exitosos, y seguros de sí en su entorno familiar, social y natural”.</cite></footer>
                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
