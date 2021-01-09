<h4>Gallery</h4>
<form action="index.php?page=3" method="post">
    <label for="ext">Выбор формата:
        <select name="ext" id="ext">
        <?php
        $path = 'images/';
        if ($dir = opendir($path)) {
            $ar = [];
            while ($file = readdir($dir)) {
                // Получаем расширение файла и делаем в нижнем регистре
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                // Проверяем, нет ли расширения в массиве
                if (!in_array($ext, $ar) and $ext !== '') {
                    $ar[] = $ext; // аналог append в js, т.е. добавления в конец массива
                    echo "<option>$ext</option>";
                }
            }
            closedir($dir);
        }
        ?>
        </select>
    </label>

    <button type="submit" name="submit" class="btn btn-primary ml-5">Показать изображения</button>
</form>

<?php

if (isset($_POST['submit'])) {
    $ext = $_POST['ext']; // name селекта
    $ar = glob("$path*.$ext"); // ищем изображения выбранного расширения
    foreach ($ar as $a) {
        echo "<img src=$a width='130px' height='100px' style='margin: 10px 10px;'>";
    }
} else {
    $ar = glob("$path*.*");
    foreach ($ar as $a) {
        echo "<img src=$a width='130px' height='100px' style='margin: 10px 10px;'>";
    }
}