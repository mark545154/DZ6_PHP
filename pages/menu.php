<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Site 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto justify-content-between">
            <li class="nav-item"><a href="index.php?page=1" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="index.php?page=2" class="nav-link">Upload</a></li>
            <li class="nav-item"><a href="index.php?page=3" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="index.php?page=4" class="nav-link">Registration</a></li>
<!--            <li class="nav-item"><a href="index.php?page=5" class="nav-link">Login</a></li>-->
<!--            <li class="nav-item"><a href="index.php?page=6" class="nav-link">Вход</a></li>-->
            <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">Авторизация</a></li>
        </ul>
<!--        <button type="button" onclick="location.href = ' ';" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Вход</button>-->
        <form action='index.php?page=1' method='post'>
            <input type='submit' name='logout' class='btn btn-warning mr-2' value='Выйти'>
        </form>
<!--        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Вход</button>-->

        <form action="index.php?page=5" method="post">
            <input href="#myModal" type="submit" value="Войти" name="logbtn" class="btn btn-success login" data-toggle="modal">
        </form>
    </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLongTitle">Авторизация пользователя</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <p>Логин</p>
                        <input type="text" class="form-control" name="login" id="login" placeholder="ваш логин">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group help">
                        <p>Пароль</p>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="ваш пароль">
                        <i class="fa fa-lock"></i>
                        <a href="#" class="fa fa-question-circle"></a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Войти</button>
            </div>
        </div>
    </div>
</div>



