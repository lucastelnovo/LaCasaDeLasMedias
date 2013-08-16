 <!-- Div de consulta -->
      <div class="hero-unit" style="float:left; position: relative; left: 100px;">
        <h1>&iexcl;Env&iacute;anos tu consulta!</h1>
        <p>Escribinos tu consulta a continuaci&oacute;n y te estaremos respondiendo a la brevedad.</p>
        <form id="form1" name="form1" method="post" action="sendEmail.php">
        <textarea rows="12" autofocus name="email_content"></textarea><br>
        <p>Ingrese su e-mail:</p> <input type="email" name="email" required><br>
        </form>
        <p><a onclick="document.form1.submit(); alert('Su mensaje ha sido enviado.');" class="btn btn-primary btn-large">Enviar &raquo;</a></p>
      </div>
 <!-- Div de ubicacion -->     
      <div class="hero-unit" style="float:right; height: 420px; width: 430px; position: relative; right: 80px">
        <h1>&iexcl;Vis&iacute;tanos en nuestros locales!</h1>
        <p>Encontranos en Ram&oacute;n L. Falcon 7061/7074, Liniers.</p>
		<img style="border:2px solid black" alt="ubicacion" src="http://maps.googleapis.com/maps/api/staticmap?center=-34.640318,-58.526026&zoom=16&size=430x380&sensor=false&markers=color:red%7C-34.640318,-58.526026&markers=size:tiny">
      </div>