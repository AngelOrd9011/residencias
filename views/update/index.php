<?php
include('../components/head.component.php');
include('../components/navlog.component.php');
?>
<main class="grey lighten-4">
  <div class="container pagina">
    <h4 id="tituloRFC" class="green-text text-darken-2">Modificar el usuario con RFC: </h4>
    <form id="formUsuModifica" name="formUsuModifica" class="infoPaste" method="POST">
    <div class="row highlight z-depth-2 grey lighten-2 formMargen formUsu">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s3">
              <input id="nombre_s" name="nombre_s" type="text" class="validaTexto" maxlength="30" autocomplete="off">
              <label class="active" for="nombre_s"><strong>* </strong>Nombre(s)</label>
            </div>
            <div class="input-field col s3">
              <input id="a_pat" name="a_pat" type="text" class="validaTexto" maxlength="20" autocomplete="off">
              <label class="active" for="a_pat"><strong>* </strong>Apellido paterno</label>
            </div>
            <div class="input-field col s3">
              <input id="a_mat" name="a_mat" type="text" class="validaTexto" maxlength="20" autocomplete="off">
              <label class="active" for="a_mat"><strong>* </strong>Apellido materno</label>
            </div>
            <div class="input-field col s2 offset-s1">
              <input id="n_empleado" name="n_empleado" type="text" class="validaNumero" maxlength="12" autocomplete="off">
              <label class="active" for="n_empleado"><strong>* </strong>No. Empleado</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s2">
              <input id="rfc_8" name="rfc_8" type="text" class="validaAlfanumerico" onkeyup="javascript:this.value=this.value.toUpperCase();" minlength="8" maxlength="8" autocomplete="off">
              <label class="active" for="rfc_8"><strong>* </strong>RFC de 8 digitos</label>
            </div>
            <div class="input-field col s3 offset-s1">
              <select id="puesto" name="puesto" class="green-text text-darken-2" >

              </select>
              <label>Puesto</label>
            </div>
            <div class="input-field col s4 offset-s1">
              <select id="adm_general" name="adm_general" class="green-text text-darken-2" >

              </select>
              <label>Administración General</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s2">
              <input id="ip_address" name="ip_address" type="text" class="validaIP" maxlength="15" autocomplete="off">
              <label class="active" for="ip_address">Dirección IP</label>
            </div>
            <div class="input-field col s3">
              <select id="n_serie" name="n_serie" class="green-text text-darken-2" >

              </select>
              <label>No. Serie de equipo</label>
            </div>
            <div class="input-field col s3">
              <select id="perfil" name="perfil" class="green-text text-darken-2" >

              </select>
              <label>Perfil</label>
            </div>
            <div class="input-field col s3">
              <select id="entrega" name="entrega" class="green-text text-darken-2" >

              </select>
              <label>Tipo de entrega</label>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col s6 red-text text-darken-4 alerta">
        <strong>Todos los campos con * son obligatorios</strong>
      </div>
      <div class="col s6 offset-s8 botones2">
        <a href="../admin/" name="cancelar" class="green darken-2 white-text btn">Cancelar</a>
        <button type="button" name="modificarUsuario" class="green darken-2 white-text btn modificarUsuario">Guardar</button>
      </div>
    </div>
    </form>
  </div>
</main>
<?php include('../components/footer.component.php') ?>
<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/inventario/assets/js/update.js"></script>
