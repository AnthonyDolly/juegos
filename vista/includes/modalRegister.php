<!-- Modal Register -->
<div id="modalRegister" class="modal">
    <div class="modal-content">
        <div class="row">
            <form method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input placeholder="" id="names" type="text" class="validate" name="nombres">
                        <label for="names">Nombres</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input placeholder="" id="last_names" type="text" class="validate" name="apellidos">
                        <label for="last_names">Apellidos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input placeholder="" id="dniR" type="text" class="validate" name="dniR">
                        <label for="dniR">DNI</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input placeholder="" id="passwordR" type="password" class="validate" name="passwordR">
                        <label for="passwordR">Password</label>
                    </div>
                    <div class="input-field col s12 blockSend">
                        <input class="waves-effect waves-light btn sendAnswer validate" type="submit" class="Registrar">
                    </div>
                    <div class="text-center">
                        <p>¿Ya tienes una cuenta? <a href="#!"> Inicia Sesión </a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>