<div class="card-panel hoverable">
  <img src="img/user.png" alt="" class="circle responsive-img center-align"/>
  <div class="container">
    <form id="form-contact" class="col s12">
      <h5>Envíanos tus comentarios</h5>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="name" class="validate">
          <label for="icon_prefix">Escribe tu nombre</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="icon_prefix" type="email" name="email" class="validate">
          <label for="icon_prefix">Escribe tu email</label>
        </div>
        <div class="input-field col s12">
          <input id="icon_prefix" type="text" name="subject" class="validate">
          <label for="icon_prefix">Asunto a tratar</label>
        </div>
        <div class="input-field col s12">
          <textarea id="textarea1" name="comments" class="materialize-textarea"></textarea>
          <label for="textarea1">Tus comentarios</label>
          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
          </button>
          <input type="hidden" name="action" value="contact">
          <div id="message" class="input-field col s12"></div>
        </div>
      </div>
    </form>
  </div>
</div>
