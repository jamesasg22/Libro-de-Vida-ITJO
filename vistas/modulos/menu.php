<section>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

      <!-- User Info -->
      <div class="user-info">
          <div class="image">
              <img src="<?php echo $url; ?>vistas/img/plantilla/user.png" width="48" height="48" alt="User" />
          </div>
          <div class="info-container">
              <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><p style="font-size:17px; "> Seccional de <?php  echo $_SESSION["nom_seccional"];?></p></div>
              <div class="btn-group user-helper-dropdown">
                  <i data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="icon-arrow_drop_down_circle"></span> </i>
                  <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo $url; ?>salir"><h5> <span class="icon-input"></span> SALIR</h4></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <!-- #User Info -->

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU</li>

                <li class="active">
                    <a href="<?php echo $url; ?>inicio" class="menu-toggle">
                      <i><span class="icon-home"></i>
                      <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a class="menu-toggle">
                        <i><span class="icon-assignment"></i>
                        <span>Consulta</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo $url; ?>consultaFaltas">Faltas academicas</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>consultaPases">Pases de Entrada / Salida</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>consultaJustificativos">Justificativos</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>consultaAlumnos">Alumnos</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>consultaRepresentantes">Representantes</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>manualDeConvivencia">Manual de convivencia</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i><span class="icon-group_add"></i>
                        <span>Registrar</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo $url; ?>registrarFalta">Falta academica</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>registrarPases">Pases de Entrada / Salida</a>
                        </li>
                        <li>
                            <a href="<?php echo $url; ?>registrarJustificativos">Justificativos</a>
                        </li>
                    </ul>
                </li>

                <li class="header">ACERCA DE</li>
                <li>
                    <a href="<?php echo $url; ?>informacion">
                        <i><span class="icon-announcement col-light-blue"></i>
                        <span>Información</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->


        <!-- Footer -->
        <div class="legal">
          <center>
            <div class="copyright">
               <a href="<?php echo $url; ?>inicio"><?php echo APP; ?></a>
            </div>
            <div class="copyright">
               <a href="<?php echo $url; ?>inicio"><?php echo APP_ITJO; ?></a>
            </div>
          </center>
        </div>
        <!-- #Footer -->

    </aside>
    <!-- #END# Left Sidebar -->



</section>
