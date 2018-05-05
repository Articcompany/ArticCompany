<section id="contactanos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Hagamos Negocios</h2>
                <h3 class="section-subheading text-muted">Contáctenos para darte una cotización y asesoría especializada y  personalizada.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" method="POST" href="#contactanos">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre" class="col-form-label">Nombre:</label>
                                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" required data-validation-required-message="Por favor escriba su nombre.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Correo Electrónico</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" required data-validation-required-message="Por favor escriba su correo electrónico.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="col-form-label">Número de Teléfono:</label>
                                <input class="form-control" name="telefono" id="telefono" type="tel" placeholder="Teléfono" required data-validation-required-message="Por favor digite su número telefónico.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mensaje" class="col-form-label">Describa su proyecto:</label>
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="8" placeholder="Escribanos un mensaje con las especificaciones generales de lo que ud necesita." required data-validation-required-message="Por favor cuentanos de que trata tu proyecto."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input name="enviar" id="enviar" class="btn btn-primary2 btn-xl text-uppercase" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

