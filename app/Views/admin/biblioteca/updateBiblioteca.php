<?=$navAdmin?>
<!--
    <?php 
        print_r($libro);
    ?>-->


    <div class="container main mt-5">
        <main>
            <div class="card bg-light mb-3 w-100">
                <div class="card-body">
                    <div class="card-header text-center">
                        <h6>Biblioteca</h6>
                    </div>
                    <form method="post" action="<?=site_url('/actualizarLibro') ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$libro['id']?>">
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" id="titulo"
                            placeholder="Título" name="titulo" value="<?=$libro['titulo']?>">
                        </div>

                        <label for="imagen">Imagen</label><br>
                        <img class="img-thumbnail" width="100" alt=""
                            src="<?=base_url()?>/biblioteca/imgBiblioteca/<?=$libro['imagen'];?>">
                        <div class="custom-file mb-2">
                            <input id="imagen" class="custom-file-input" type="file"
                            name="imagen">
                            <label for="imagen" class="custom-file-label">
                                Subir imagen del libro
                            </label>
                        </div>

                        <label for="archivo">Archivo</label>
                        <div class="custom-file mb-2">
                            <input id="archivo" class="custom-file-input" type="file"
                            name="archivo">
                            <label for="archivo" class="custom-file-label">Subir libro</label>
                        </div>

                        <button class="btn btn-primary" type="submit">Actualizar</button>
                        <a href="<?=site_url('/Dashboard/bibliotecaAdmin') ?>"
                        class="btn btn-info">Cancelar</a>
                        
                    </form>
                </div>
            </div>
        </main>
    </div>
<?=$footer?>