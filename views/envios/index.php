<section >
    <h1 class="envio-title">¿CUÁNTO TARDARÁ MI PEDIDO?</h1>
<p class="envio-text2" >Elige tu país a continuación para ver los plazos de entrega estimados si realizas el pedido hoy.</p>

</section>

<!-- Aquí puedes incluir un formulario para que el usuario seleccione su país y método de envío -->
<form class="envios-form" action="envios.php" method="post">
    <label for="pais">País:</label>
    <select name="pais" id="pais">
        <option value="Spain">Spain</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Canada">Canada</option>
        <option value="France">France</option>
        <option value="Germany">Germany</option>
        <option value="Italy">Italy</option>
        <option value="Japan">Japan</option>
        <option value="Mexico">Mexico</option>
        <option value="Brazil">Brazil</option>
        <option value="Australia">Australia</option>
        <option value="China">China</option>
        <option value="South Korea">South Korea</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Sweden">Sweden</option>
        <option value="Norway">Norway</option>
        <option value="Denmark">Denmark</option>
        <option value="Finland">Finland</option>
        <option value="Belgium">Belgium</option>
        <option value="Austria">Austria</option>
        <option value="Portugal">Portugal</option>
        <option value="Greece">Greece</option>
        <option value="Ireland">Ireland</option>
        <option value="New Zealand">New Zealand</option>
    </select>


    <label for="envio">Método de envío:</label>
    <select name="envio" id="envio">
        <option value="economico">Envío económico</option>
        <option value="expreso">Envío exprés</option>
    </select>

    <input type="submit" value="Calcular">
    <div class="envio-text">
    <?php
    require_once 'controllers/envioscontroller.php';
    ?>
</div>

</form>

<div class="envio-cont container-faq">
    <p><strong>GRATIS</strong> cuando gastes más de €60 EUR</p>

    <h2>¿QUÉ MEDIDAS PREVENTIVAS SE ESTÁN TOMANDO PARA DETENER LA PROPAGACIÓN DE COVID-19?</h2>
    <p>Desde el 16/03/2020 aussieBum introdujo estrictas prácticas de higiene y salud en el entorno de trabajo. Por puntos, esto es lo que hemos hecho para garantizar tu salud y seguridad personal y la de nuestros equipos:</p>
    <ul>
        <li>Cualquier persona que ingrese a nuestras instalaciones y las de nuestros fabricantes en Australia, está obligada a medirse la temperatura corporal con un lector de temperatura láser.</li>
        <li>Cualquier persona que ingrese al edificio debe utilizar un desinfectante de manos a base de alcohol para limpiarse las manos. A continuación, se les pide que se laven las manos con agua y jabón antes de continuar su trabajo.</li>
        <li>Todos los empleados que pueden trabajar desde casa lo hacen. Para aquellos que no pueden trabajar desde casa, se les ha proporcionado equipo de protección personal (EPP) como guantes, mascarillas y gafas de protección, y se les ha pedido que mantengan una distancia física adecuada entre sí.</li>
        <li>Todos los artículos y superficies que entran en contacto con las manos humanas se limpian y desinfectan regularmente.</li>
        <li>Los empleados que se sienten enfermos o tienen síntomas de COVID-19 se les pide que se queden en casa y que busquen atención médica según sea necesario.</li>
    </ul>
    <h2>¿CÓMO PUEDO PAGAR POR MI PEDIDO?</h2>
    <p>Aceptamos tarjetas de crédito y débito, PayPal y transferencias bancarias como formas de pago.</p>
</div>

<!-- <div id="emoticons-container"></div>
<script>
    const emoticons = ['😀', '😆', '😍', '🤩', '🤪', '😎', '🤑', '🤯', '😡', '🤬', '😱', '🥺', '😴', '🥳', '🎉', '🎁'];

    const container = document.getElementById('emoticons-container');

    emoticons.forEach((emoticon) => {
        const span = document.createElement('span');
        span.textContent = emoticon;
        container.appendChild(span);
    });
</script> -->