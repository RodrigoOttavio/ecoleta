<div class="container marketing">
    <hr class="featurette-divider" />
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please don't hesitate to contact us directly!</p>
        <form id="contact-form" name="contact-form" action="./engine/enviarEmail.php" method="POST">
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="nome" class="">Your name</label>
                                <input type="text" id="nome" name="nome" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="assunto" class="">Subject</label>
                                <input type="text" id="assunto" name="assunto" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="mensagem">Message</label>
                                <textarea type="text" id="mensagem" name="mensagem" rows="2" class="form-control md-textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Afonso Vaz de Melo, 465, Barreiro de Baixo</p>
                        </li>

                        <li>
                            <i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>Zip code: 30640-070</p>
                        </li>

                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contato@ecoleta.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="mb-2" />
            <div class="text-center text-md-left">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Send</button>
            </div>
        </form>
    </section>
    <hr class="featurette-divider" />
</div>
