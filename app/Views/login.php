<div class="jumbo mt-3">
    <div class="container">
        <h1 class="jumbo-title text-center">Inicio de Sesión</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card rounded p-3">
                <h2 class="jumbo-title text-center mb-4">Ingresar</h2>
                <form>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="E-mail" class="form-control mb-3">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Contraseña" class="form-control mb-3">
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                        <button type="button" class="btn btn-secondary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card rounded p-3 text-center">
                <p>¿Aún no está registrado? <a href="<?php echo base_url('registrarse'); ?>">Registrarse</a></p>
            </div>
        </div>
    </div>
</div>
