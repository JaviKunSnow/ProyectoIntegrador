<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card p-2">
                <div class="card-body">
                    <h5 class="card-title text-center py-2">Iniciar sesión</h5>
                    <form action="./index.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" name="user" id="user" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="pass" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary border-0 py-2" name="enviar" id="botones">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>