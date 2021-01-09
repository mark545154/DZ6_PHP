<h4>Home</h4>

<?php
if ($_SESSION['registered_user']) {
    echo "<h3>Hello, {$_SESSION['registered_user']}</h3>";
    echo "<form action='index.php?page=1' method='post'>
<input type='submit' name='logout' class='btn btn-danger' value='Выйти'>
</form>";
    if (isset($_POST['logout'])) {
        session_destroy();
        echo '<script>window.location = "index.php?page=1"</script>';
    }
} else {
    echo "<h3>You are not auth! Anonymous</h3>";
}
?>


<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--    Модальное окно-->
<!--</button>-->
<!---->
<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title" id="exampleModalLabel">Заголовок модального окна</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                Какой то текст. Какой то текст. Какой то текст. Какой то текст. Какой то текст. Какой то текст.  Какой то текст. Какой то текст. Какой то текст. Какой то текст. Какой то текст. Какой то текст. Какой то текст.-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



