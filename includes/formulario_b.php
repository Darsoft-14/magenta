<!--nuevo-->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">             
                <form class="row g-3" action="actualizar.php?id=<?php echo $id; ?>" method="POST">
                    <!--ur-->
                  <div class="col-md-2">
                    <label name="url_lbl" class="form-label col-form-label-sm"><strong>URL</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="url_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $url;?>" required>
                  </div>
                  <!--cliente-->
                  <div class="col-md-2">
                    <label name="cliente_lbl" class="form-label col-form-label-sm"><strong>CLIENTE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="cliente_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $cliente;?>" required>
                  </div>
                  <!--usuario-->
                  <div class="col-md-2">
                    <label name="usuario_lbl" class="form-label col-form-label-sm"><strong>USUARIO</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="usuario_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $usuario;?>">
                  </div>
                  <!--registrador-->
                  <div class="col-md-2">
                    <label name="regis1_lbl" class="form-label col-form-label-sm"><strong>REGISTRADOR</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="regis1_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $regis1;?>" required>
                  </div>
                  <!--contraseña-->
                  <div class="col-md-2">
                    <label name="contrasena_lbl" class="form-label col-form-label-sm"><strong>CONTRASEÑA</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="contrasena_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $contra;?>">
                  </div>
                  <!--paquete-->
                  <div class="col-md-2">
                    <label name="paquete_lbl" class="form-label col-form-label-sm"><strong>PAQUETE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="paquete_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $paquete;?>" required>
                  </div>
                  <!--estado-->
                  <div class="col-md-2">
                    <label name="estado_lbl" class="form-label col-form-label-sm"><strong>ESTADO</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="estado_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $estado;?>">
                  </div>
                  <!--fecha1-->
                  <div class="col-md-2">
                    <label name="fecha1_lbl" class="form-label col-form-label-sm"><strong>VENCE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <?php 

                    if ($fecha1 === "-0001-11-30") {
                       // echo '<input type="text" name="fecha1_txt" class="form-control form-control-sm" id="colFormLabelSm" value="" placeholder="AAAA-MM-DD" required>';
                      echo '<input name="fecha1_txt" type="date" id="fecha" class="form-control form-control-sm" required />';
                    }else{
                      // echo '<input type="text" name="fecha1_txt" class="form-control form-control-sm" id="colFormLabelSm" value="'.$fecha1.'" required>';
                      echo '<input name="fecha1_txt" type="date" id="fecha" class="form-control form-control-sm" value="'.$fecha1.'" required />';
                    }

                    ?>
                  </div>

                  <div class="dropdown-divider">
                    
                  </div>
                    
                  <!--otro dominio-->
                  <div class="col-md-2">
                    <label name="dominio_lbl" class="form-label col-form-label-sm"><strong>DOMINIO 2</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="dominio_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $dominio;?>">
                  </div>

                  

                   <!--registrador 2-->
                  <div class="col-md-2">
                    <label name="regis2_lbl" class="form-label col-form-label-sm"><strong>REGISTRADOR</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="regis2_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $regis2;?>">
                  </div>
                  
                  <!--fecha2-->
                  <div class="col-md-2">
                    <label name="fecha2_lbl" class="form-label col-form-label-sm"><strong>VENCE</strong></label>
                  </div>
                  <div class="col-md-4">

                     <?php 

                    if ($fecha2 === "-0001-11-30") {
                       echo '<input type="text" name="fecha2_txt" class="form-control form-control-sm" id="colFormLabelSm" value="" placeholder="AAAA-MM-DD">';
                    }else{
                      echo '<input type="text" name="fecha2_txt" class="form-control form-control-sm" id="colFormLabelSm" value="'.$fecha2.'">';
                    }

                    ?>

                    <!-- <input type="text" name="fecha2_txt" class="form-control form-control-sm" id="colFormLabelSm" value="<?php echo $fecha2;?>"> -->
                    
                  </div>
                  <!--espaciador-->
                  <div class="col-md-6">
                    <label name="espaciador_lbl" class="form-label col-form-label-sm"><strong></strong></label>
                    <label name="espaciador_lbl" class="form-label col-form-label-sm"><strong></strong></label>
                  </div>

                  <!--notas-->
                  <div class="col-md-2">
                    <label name="notas_lbl" class="form-label col-form-label-sm"><strong>NOTAS</strong></label>
                  </div>
                  <div class="form-group col-md-10">
                    <textarea name="notas_txt" rows="2" class="form-control" placeholder="Actualizar la descripción"><?php echo $notas ?> </textarea>
                  </div>

                  <!-- botones-->
                    <div class="col-md-4">
                      <label  class="form-label col-form-label-sm"></label>
                    </div>
                    <div class="col-md-4">
                      <label  class="form-label col-form-label-sm"></label>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-success " name="nuevo">
                                  Limpiar
                      </button>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-success " name="actualizar">
                                  Actualizar
                      </button>
                   </div>
                   <!--fin botones-->



                </form>
            </div>
        </div>
    </div>
</div>

<br>