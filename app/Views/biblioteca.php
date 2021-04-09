    <main>
        <div class="container main mt-5 ">
            <div class="jumbotron">
                <h1 class="">Biblioteca FEC</h1>
                <hr class="my-4">
                <p class="lead">¡Un espacio donde brindamos distintos recursos que pueden ayudarte a tus estudios!</p>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Buscar</label>
                    <input type="search" class="form-control" id="exampleInputEmail1" placeholder="Buscar...">
                </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card w-100 mt-5">
                        <div class="card-header">
                            <!-- h5 necesita de un id para la db /// titulo del pdf para biblio -->
                            <h5 class="card-title">Título</h5>
                        </div>
                        <div class="card-body text-center">
            <!-- para que modal funcione, data-target="#modall" de ".card-body img" = id="Modal1" de (div class="modal fade") -->
                            <img class="card-img-bottom mb-2 p-3" src="<?= base_url() ?>/assets/img/icono_pdf.png" alt="PDF" data-toggle="modal"
                                data-target="#modal1"> <!-- data-target="#exampleModalCenter" necesita de un id para la db -->
                            <!-- a href necesita de un id para la db, mismo link de pdf-->
                            <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca_alimenticia.pdf"
                                class="btn btn-success mt-1">Descargar</a>
                        </div>

            <!-- para que modal funcione, data-target="#modall" de ".card-body img" = id="Modal1" de (div class="modal fade") -->
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <!-- iframe src necesita de un id para la db, mismo link de pdf-->
                                        <iframe
                                            src="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca_alimenticia.pdf"
                                            class=" w-100" alt="Card image cap" frameborder="0"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mt-1"
                                            data-dismiss="modal">Cerrar</button>
                                        <!-- a href necesita de un id para la db, mismo link de pdf -->
                                        <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca_alimenticia.pdf"
                                            class="btn btn-success mt-1">Descargar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card w-100 mt-5">
                        <div class="card-header">
                            <h5 class="card-title">Título</h5>
                        </div>
                        <div class="card-body text-center">
                            <img class="card-img-bottom mb-2 p-3" src="<?= base_url() ?>/assets/img/icono_pdf.png" alt="PDF" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca.pdf"
                                class="btn btn-success mt-1">Descargar</a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <iframe
                                            src="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca.pdf"
                                            class=" w-100" alt="Card image cap" frameborder="0"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mt-1"
                                            data-dismiss="modal">Cerrar</button>
                                        <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca.pdf"
                                            class="btn btn-success mt-1">Descargar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card w-100 mt-5">
                        <div class="card-header">
                            <h5 class="card-title">Título</h5>
                        </div>
                        <div class="card-body text-center">
                            <img class="card-img-bottom mb-2 p-3" src="<?= base_url() ?>/assets/img/icono_pdf.png" alt="PDF" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/ESTUDIO_SOCIOECONÓMIO.pdf"
                                class="btn btn-success mt-1">Descargar</a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <iframe
                                            src="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/ESTUDIO_SOCIOECONÓMIO.pdf"
                                            class=" w-100" alt="Card image cap" frameborder="0"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mt-1"
                                            data-dismiss="modal">Cerrar</button>
                                        <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/ESTUDIO_SOCIOECONÓMIO.pdf"
                                            class="btn btn-success mt-1">Descargar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card w-100 mt-5">
                        <div class="card-header">
                            <!-- h5 necesita de un id para la db -->
                            <h5 class="card-title">Título</h5>
                        </div>
                        <div class="card-body text-center">
                            <img class="card-img-bottom mb-2 p-3" src="<?= base_url() ?>/assets/img/icono_pdf.png" alt="PDF" data-toggle="modal"
                                data-target="#exampleModalCenter"> <!-- data-target="#exampleModalCenter" necesita de un id para la db -->
                            <!-- a href necesita de un id para la db, mismo link de pdf-->
                            <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca_alimenticia.pdf"
                                class="btn btn-success mt-1">Descargar</a>
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <!-- iframe src necesita de un id para la db, mismo link de pdf-->
                                        <iframe
                                            src="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca_alimenticia.pdf"
                                            class=" w-100" alt="Card image cap" frameborder="0"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mt-1"
                                            data-dismiss="modal">Cerrar</button>
                                        <!-- a href necesita de un id para la db, mismo link de pdf -->
                                        <a href="http://federaciondeestudiantescolimenses.com/application/libraries/docs/descargas/formato_solicitud_beca_alimenticia.pdf"
                                            class="btn btn-success mt-1">Descargar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </main>