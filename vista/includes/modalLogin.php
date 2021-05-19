<!-- Modal Login -->
<div id="modalLogin" class="modal">
    <div class="modal-content">
        <h4>Iniciar Sesion</h4>
        <div class="row">
            <form method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input placeholder="" id="dniL" type="text" class="validate" name="dniL">
                        <label for="dniL">DNI</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input placeholder="" id="passwordL" type="password" class="validate" name="passwordL">
                        <label for="passwordL">Contraseña</label>
                    </div>
                    <div class="input-field col s12 input-btn-login blockSend">
                        <input class="waves-effect waves-light btn sendAnswer validate" type="submit" class="Ingresar">
                    </div>
                    <div class="text-center">
                        <p>Si no una tienes cuenta <a href="#modalRegister"> Regístrate </a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>