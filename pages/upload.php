<h4>Upload</h4>
<?php
if (!isset($_POST['uppbtn'])) {
?>

<form action="index.php?page=2" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Выберите картинку
            <input type="file" id="myfile" class="form-control-file mt-5" name="myfile" multiple="multiple" accept="image/*">
        </label>
    </div>
    <button type="submit" class="btn btn-primary" name="uppbtn">Отправить файл</button>
</form>

<?php
} else {
    if ($_FILES['myfile']['error'] != 0) {
        echo '<h3 class="text-danger">'. $_FILES['myfile']['error'] .'</h3>';
        exit; // прерывает дальнейшее выполнение кода (аналог в функции - return false)
    }

    if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
        move_uploaded_file($_FILES['myfile']['tmp_name'], "images/".$_FILES['myfile']['name']);

//        echo 'Файл: '.$_FILES['myfile']['name'].' загружен.<br />';
        echo "<h3 class='text-success'>Изображение было загружено</h3>";
    }
}
