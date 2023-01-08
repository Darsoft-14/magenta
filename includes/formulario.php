<?php 

   

    $query = "SELECT id, nombre from cliente ORDER BY nombre";
     $result = mysqli_query($conection,$query);


?>

<!--nuevo-->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">
                <form class="row g-3" action="guardar.php" method="POST">
                    <!--ur-->
                  <div class="col-md-2">
                    <label name="url_lbl" class="form-label col-form-label-sm"><strong>URL</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="url_txt" class="form-control form-control-sm" id="colFormLabelSm" value="" required>
                  </div>
                  <!--cliente-->
                  <div class="col-md-2">
                    <label name="cliente_lbl" class="form-label col-form-label-sm"><strong>CLIENTE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <select  class="form-control mb-2 mr-sm-2" name="cliente_txt" class="form-select form-select-lg  aria-label" id="cliente" required>
                   <option value="">Selecciona</option>
                   <?php while ($ver=mysqli_fetch_array($result)) {?>

                       <option value="<?php echo $ver["nombre"] ?>">
                          <?php echo $ver["nombre"] ?>
            </option>
                          <?php }?>
        </select>
                  </div>
                  <!--usuario-->
                  <div class="col-md-2">
                    <label name="usuario_lbl" class="form-label col-form-label-sm"><strong>USUARIO</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="usuario_txt" class="form-control form-control-sm" id="colFormLabelSm" value="">
                  </div>
                  <!--registrador-->
                  <div class="col-md-2">
                    <label name="regis1_lbl" class="form-label col-form-label-sm"><strong>REGISTRADOR</strong></label>
                  </div>
                  <div class="col-md-4">
                    <select  class="form-control mb-2 mr-sm-2" name="regis1_txt" class="form-select form-select-lg  aria-label=" id="regis1" required>
                      <option value="">Selecciona</option>
                      <option value="mi.paola">mi.paola</option>
                      <option value="mi.ceo">mi.ceo</option>
                      <option value="godaddy.paola">godaddy.paola</option>
                      <option value="cointernet">cointernet</option>
                      <option value="Cliente">Cliente</option>                   
                    </select>
                  </div>
                  <!--contraseña-->
                  <div class="col-md-2">
                    <label name="contrasena_lbl" class="form-label col-form-label-sm"><strong>CONTRASEÑA</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="contrasena_txt" class="form-control form-control-sm" id="colFormLabelSm" value="">
                  </div>
                  <!--paquete-->
                  <div class="col-md-2">
                    <label name="paquete_lbl" class="form-label col-form-label-sm"><strong>PAQUETE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <select  class="form-control mb-2 mr-sm-2" name="paquete_txt" class="form-select form-select-lg  aria-label=" id="paquete" required>
                      <option value="">Selecciona</option>
                      <option value="Estudiantil_250mb">Estudiantil_250mb</option>
                      <option value="Mini_500mb">Mini_500mb</option>
                      <option value="Basico_1Gb">Basico_1Gb</option>
                      <option value="Empresarial_2Gb">Empresarial_2Gb</option>
                      <option value="Super_3Gb">Super_3Gb</option>
                      <option value="Maxi_5Gb">Maxi_5Gb</option>
                      <option value="Oro_10Gb">Oro_10Gb</option>
                      <option value="Platino_20Gb">Platino_20Gb</option>
                      <option value="Ilimitado">Ilimitado</option>                   
                    </select>
                  </div>
                  <!--estado-->
                  <div class="col-md-2">
                    <label name="estado_lbl" class="form-label col-form-label-sm"><strong>ESTADO</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="estado_txt" class="form-control form-control-sm" id="colFormLabelSm" value="">
                  </div>
                  <!--fecha1-->
                  <div class="col-md-2">
                    <label name="fecha1_lbl" class="form-label col-form-label-sm"><strong>VENCE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <!-- <input type="text" name="fecha1_txt" class="form-control form-control-sm" id="colFormLabelSm" value="" placeholder="AAAA-MM-DD" required> -->
                    <!-- <label for="fecha" class="etiqueta"> -->
                     
                      <input name="fecha1_txt" type="date" id="fecha" class="form-control form-control-sm" required />
                    <!-- </label> -->
                  </div>

                  <div class="dropdown-divider">
                    
                  </div>
                    
                  <!--otro dominio-->
                  <div class="col-md-2">
                    <label name="dominio_lbl" class="form-label col-form-label-sm"><strong>DOMINIO 2</strong></label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="dominio_txt" class="form-control form-control-sm" id="colFormLabelSm" value="">
                  </div>

                  

                   <!--registrador 2-->
                  <div class="col-md-2">
                    <label name="regis2_lbl" class="form-label col-form-label-sm"><strong>REGISTRADOR</strong></label>
                  </div>
                  <div class="col-md-4">
                    <select  class="form-control mb-2 mr-sm-2" name="regis2_txt" class="form-select form-select-lg  aria-label=" id="regis2">
                      <option value="">Selecciona</option>
                      <option value="mi.paola">mi.paola</option>
                      <option value="mi.ceo">mi.ceo</option>
                      <option value="godaddy.paola">godaddy.paola</option>
                      <option value="cointernet">cointernet</option>
                      <option value="Cliente">Cliente</option>                   
                    </select>
                  </div>
                  
                  <!--fecha2-->
                  <div class="col-md-2">
                    <label name="fecha2_lbl" class="form-label col-form-label-sm"><strong>VENCE</strong></label>
                  </div>
                  <div class="col-md-4">
                    <!-- <input type="text" name="fecha2_txt" class="form-control form-control-sm" id="colFormLabelSm" value="" placeholder="AAAA-MM-DD">    -->
                    <input name="fecha2_txt" type="date" id="fecha" class="form-control form-control-sm" />         
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
                    <textarea name="notas_txt" rows="2" class="form-control" placeholder="Agregar Notas"></textarea>
                  </div>

                  <!-- botones-->
                    <div class="col-md-4">
                    <label  class="form-label col-form-label-sm"></label>
                    </div>
                    <div class="col-md-4">
                    <label  class="form-label col-form-label-sm"></label>
                    </div>
                    <div class="col-md-2">
                    <label  class="form-label col-form-label-sm"></label>
                    </div>
                    <div class="col-md-2">
                    <button class="btn btn-success" name="guardar">
                                Guardar
                    </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<br>