<?=$navAdmin?>
    <main>
        <div class="container main mt-5">
            <div class="jumbotron">
                <h1 class="text-center">Biblioteca</h1>
                <hr class="my-4">
                <p class="lead">Puedes agregar una archivo para la biblioteca desde aquí</p>
                <a class="btn btn-primary" href="<?=base_url('registroBiblioteca') ?>">Agregar</a>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Buscar</label>
                    <input type="search" class="form-control" id="exampleInputEmail1" placeholder="Buscar...">
                </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>

            <!-- // <?php echo base_url()."/Dashboard/bibliotecaAdmin";?>  -->

            <div class="table-responsive mt-5">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Título</th>
                            <th scope="col">Archivo</th>
                            <th scope="col">Imagen</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($libros as $libro): ?>

                        <tr>
                            <td> <?=$libro['id']; ?> </td>
                            <td> <?=$libro['titulo']; ?> </td>
                            <td> <?=$libro['archivo']; ?> </td>
                            <td> <?=$libro['imagen']; ?> </td>
                            <td><a href="registroBiblioteca.html" class="btn btn-warning">Editar</a></td>
                            <td>
                                <a href="<?=base_url('eliminarLibro/'.$libro['id']);?>" class="btn btn-danger" type="button">
                                    Eliminar
                                </a>
                            </td>
                        </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?=$footer?>