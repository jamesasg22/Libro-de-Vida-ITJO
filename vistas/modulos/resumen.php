<div class="block-header">
    <h2>ESTADISTICAS</h2>
</div>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="info-box bg-red">
          <div class="icon">
              <i><span class="icon-school"></span></i>
          </div>
          <div class="content">
              <div class="text">ALUMNOS REGISTRADOS</div>

          <?php $alumnosTotal = ControladorAlumnos::ctrConsultaAlumnosTotal(); ?>

          <div class="number count-to" data-from="0" data-to="<?php echo $alumnosTotal["counta"];?>" data-speed="1000" data-fresh-interval="20"></div>
          </div>
      </div>
  </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green">
            <div class="icon">
                <i><span class="icon-storage"></span></i>
            </div>
            <div class="content">
                <div class="text">FALTAS REGISTRADAS</div>

                <?php $faltasTotal = ControladorFaltasAcademicas::ctrConsultaFaltasAcademicasTotal(); ?>

                <div class="number count-to" data-from="0" data-to="<?php echo $faltasTotal["countf"];?>" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-purple">
            <div class="icon">
                <i><span class="icon-turned_in"></span></i>
            </div>
            <div class="content">
                <div class="text">PASES REGISTRADOS</div>

                <?php $pasesTotal = ControladorPases::ctrConsultaPasesTotal(); ?>

                <div class="number count-to" data-from="0" data-to="<?php echo $pasesTotal["countp"];?>" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-blue hover-zoom-effect">
            <div class="icon">
                <i><span class="icon-schedule"></span></i>
            </div>
            <div class="content">
                <div class="text">HORA ACTUAL</div>
                <div class="number"><span id="liveclock"></span></div>
            </div>
        </div>
    </div>
</div>
