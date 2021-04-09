<?=$navAdmin?>
    <div class="container main mt-5">
        <main>
            <div class="card bg-light mb-3 w-100">
                <div class="card-body">
                    <div class="card-header text-center">
                        <h6>Biblioteca</h6>
                    </div>
                    <form method="post" action="<?=site_url('/guardarLibro') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" id="titulo"
                            placeholder="Título" name="titulo">
                        </div>

                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <input id="archivo" class="form-control-file" type="file" name="imagen">
                        </div>

                        <label for="archivo">Archivo</label>
                        <!-- <div class="custom-file mb-2">
                            <input id="archivo" class="custom-file-input" type="file" name="">
                            <label for="archivo" class="custom-file-label">Subir archivo</label>
                        </div> -->

                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </form>
                    <!--
                    <form>
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" id="titulo"
                            placeholder="Título" name="titulo">
                        </div>

                        <label for="exampleFormControlInput1">Archivo</label>
                        <div class="custom-file mb-2">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Subir archivo</label>
                        </div>

                        <label for="exampleFormControlInput1">Imagen</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Subir imagen</label>
                        </div>

                        <div class="text-center mt-3">
                            <a href="biblioteca.html" class="btn btn-primary">Guardar</a>
                        </div>
                    </form>
                    -->
                </div>
            </div>
        </main>
    </div>
<?=$footer?>