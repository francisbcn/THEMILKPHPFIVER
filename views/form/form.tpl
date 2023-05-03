<div class="form">

 <div id="error">
    <?php
      echo isset($error) ? $error : "";
      echo isset($exito) ? $exito : "";
    ?>
  </div>

  <form class="form-1" method="post" name="contacto" action="">
    <fieldset class="form-group">
      <label for="contacto">Motivo de contacto</label>
      <select name="contacto" id="contacto" required>
        <optgroup>
          <option value="esperando">¿Dónde está mi pedido?</option>
          <option value="envio">¿Dónde está mi envío?</option>
          <option value="pago">Problema con mi pago</option>
        </optgroup>
      </select>
    </fieldset>

    <fieldset class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" value="{{::nombre::}}"  placeholder="Nombre" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido" value="{{::apellido::}}"  placeholder="Apellido" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{::email::}}" placeholder="correo electrónico" required autocomplete="off">
      <div class="valid-feedback">email OK</div>
      <div class="invalid-feedback">email no correcto</div>
    </fieldset>

  <fieldset class="form-group">
      <label for="asunto">Asunto</label>
      <input type="text" class="form-control" id="asunto" name="asunto" value="{{::asunto::}}" pattern="[A-Za-zÀ-ÿ-\u00f1\u00d1\s]{5,250}">
      <div class="valid-feedback">Asunto OK</div>
      <div class="invalid-feedback">asunto no correcto</div>
      <small id="mostra2" class="text-muted"></small>
    </fieldset> 

    <fieldset class="form-group">
      <label for="contenido">¿Qué te gustaría preguntarnos?</label>
      <textarea class="form-control" id="contenido" name="contenido" rows="3">{{::contenido::}} </textarea>
      <div class="valid-feedback"> OK</div>
      <div class="invalid-feedback"> No correcto</div>
    </fieldset>

    <section>
      <p>Estoy de acuerdo con las <a href="#">Política de privacidad</a></p>
    </section>

    <section>
      <input id="bottom" type="submit" name="enviar" id="enviar" value="Enviar">
    </section>
  </form>
</div>


<!-- 
            <form method="post" name="firstContact" action="">
                  <fieldset class="form-group">
                        <label for="email">Dirección de email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{::email::}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">
                        <div class="valid-feedback">email OK</div>
                        <div class="invalid-feedback"> email no correcto</div>
                  </fieldset>
                  <fieldset class="form-group">
                        <label for="asunto">Asunto</label>
                        <input type="text" class="form-control" id="asunto" name="asunto" value="{{::asunto::}}" pattern="[A-Za-zÀ-ÿ-\u00f1\u00d1\s]{5,250}">
                        <div class="valid-feedback">Asunto OK</div>
                        <div class="invalid-feedback"> asunto no correcto</div>
                        <small id="mostra2" class="text-muted"></small>
                  </fieldset>
                  <fieldset class="form-group">
                        <label for="contenido">¿Qué te gustaría preguntarnos?</label>
                        <textarea class="form-control" id="contenido" name="contenido" rows="3">{{::contenido::}}</textarea>

                        <div class="valid-feedback"> OK</div>
                        <div class="invalid-feedback"> No correcto</div>
                  </fieldset>
                  <button type="submit" name="enviar" id="enviar" class="btn btn-primary">Enviar</button>
            </form>

 -->