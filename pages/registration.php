<h4>Registration</h4>
<?php
if (!isset($_POST['regbtn'])) {

?>
<form action="index.php?page=4" method="post">
    <div class="form-group">
        <label for="login">Login:
            <input type="text" id="login" class="form-control" name="login" required autocomplete="off">
        </label>
    </div>

    <div class="form-group">
        <label for="pass1">Password:
            <input type="password" id="pass1" class="form-control" name="pas1" required autocomplete="off">
        </label>
    </div>

    <div class="error"></div>

    <div class="form-group">
        <label for="pass2">Password:
            <input type="password" id="pass2" class="form-control" name="pass2" required autocomplete="off">
        </label>
    </div>

    <div class="form-group">
        <label for="email">Email:
            <input type="email" id="email" class="form-control" name="email" required autocomplete="off">
        </label>
    </div>

    <button type="submit" class="btn btn-primary" name="regbtn">Регистрация</button>
</form>
<?php
} else {
    if (register($_POST['login'], $_POST['pass1'], $_POST['pass2'], $_POST['email'])) {
        echo "<h3 class='text-success'>Пользователь был добавлен</h3>";
    }
}
?>
