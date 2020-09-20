<!-- Главный контейнер -->
<div class="default_container">

    <h1 class="header">
        Let's plan your day </h1>
    <h2 class="htwo"> together</h2>
    <!--Контейнер кнопок -->
    <div id="sign" class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
        <a class="nav-link" href="?action=loginform&type=auth">
            <div class="login">Sign in</div>
        </a>
        <a class="nav-link" href="?action=show&type=signup">
            <div class="login">Sign up</div>
        </a>

    </div>
    <!--Контейнер картинки -->
    <div class="into_img"> </div>


    <div class="audio">
     <audio controls >
        <source  src="../music/audio/Detskiy_son_oum_ru.mp3">
    </audio>
</div>

</div>
