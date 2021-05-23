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
                            placeholder="Título" name="titulo" required>
                        </div>

                        <label for="imagen">Imagen</label>
                        <div class="custom-file mb-2">
                            <input id="imagen" class="custom-file-input" type="file"
                            name="imagen" required>
                            <label for="imagen" class="custom-file-label">
                                Subir imagen del libro
                            </label>
                        </div>

                        <label for="archivo">Archivo</label>
                        <div class="custom-file mb-2">
                            <input id="archivo" class="custom-file-input" type="file"
                            name="archivo" required>
                            <label for="archivo" class="custom-file-label">Subir archivo</label>
                        </div>

                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a href="<?=site_url('/Dashboard/bibliotecaAdmin') ?>"
                        class="btn btn-info">Cancelar</a>
                    </form>
                </div>
            </div>
        </main>
    </div>
<?=$footer?>