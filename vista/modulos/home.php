<?php
// session_start();

if (!$_SESSION["validar"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>



<div class="row">
    <div class="col s12 m12">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="vista/img/husky.svg" height="128px">
                    <span class="card-title black-text">Husky siberiano</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>El husky siberiano es una raza de perro de trabajo originaria del noreste de Siberia (Chukotka, Rusia).
                        Este perro fue creado para trabajar tirando de rieles a travéz de largas bajo las nieves.
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="vista/img/golden-retriever.svg" height="128px">
                    <span class="card-title black-text">Golden retriever</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>El golden retriever o cobrador dorado es una raza de perro que se desarrolló alrededor de 1850 en el Reino Unido, más concretamente en Escocia.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="vista/img/pastor.svg" height="128px">
                    <span class="card-title black-text">Pastor Aleman</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>El pastor alemán u ovejero es una raza canina que proviene de Alemania.​La raza es relativamente nueva, ya que su origen se remonta a 1899.​ Forman parte del grupo de pastoreo, ya que fueron perros desarrollados originalmente para reunir y vigilar ovejas.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="vista/img/rottweiler.svg" height="128px">
                    <span class="card-title black-text">Rottweiler</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>El rottweiler es una raza canina de tipo molosoide originaria de Alemania, aunque fue también usado en la Antigua Roma. Era conocido como «perro carnicero de Rottweil.
                        Fue empleado en sus papeles tradicionales hasta mediados del siglo XIX, cuando el tren reemplazó que el ganado fuera arreado al mercado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>