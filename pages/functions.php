<?php

function register($login, $pass1, $pass2, $email) {
    // trim() - позволяет обрезать в начале и конце строки пробелы, табуляции, переход на строку
    // htmlspecialchars() - Преобразует специальные символы в HTML-сущности, т.е & -> &amp;
    $login = trim(htmlspecialchars($login));
    $pass1 = trim(htmlspecialchars($pass1));
    $pass2 = trim(htmlspecialchars($pass2));
    $email = trim(htmlspecialchars($email));

    if ($login === '' || $pass1 === '' || $pass2 === '' || $email === '') {
        echo '<h3 class="table-danger">Заполните все данные</h3>';
        return false;
    }

    if (strlen($login) < 3 || strlen($login) > 20 || strlen($pass1) < 3 || strlen($pass1) > 20) {
        echo '<h3 class="table-danger">Количество символов от 3 до 20</h3>';
        return false;
    }

    if ($pass1 !== $pass2) {
        echo "<h3 class='text-danger'>Пароли не совпадают</h3>";
        return false;
    }

    // занесение данных в тексвовый файл
    // Ключи:
    // + - если файл не создан, то создать его
    // a(append) - добавить в конец файла
    // w(write) - открыть за запись и затереть страые данные
    // r(read) - открыть на чтение
    $file = fopen('pages/users.txt', 'a+');


    // проверка на дублированияе $login
    // fgets - построчно считывает файл
    while ($line = fgets($file)) {
//        $readname = substr($line, 0, strpos($line, ':')); // ВАРИАНТ 1 - получаем login из строки

        // explode() - разбивает строку по символу создавая массив
        $line_array = explode(':', trim($line));
        $readname = $line_array[0]; // 0 - логин, 1 - пароль, 2 - почта
        $reademail = $line_array[2];


        if ($readname === $login || $reademail === $email) {
            echo '<h3 class="text-danger">Логин существует</h3>';
            return false;
        }
    }

    // md5 - захешировать пароль (в реальных проектах не исп. для шифрования паролей)
    $line = "{$login}:".md5($pass1).":{$email}\r\n";
    fputs($file, $line);
    fclose($file);
    return true;
}

function login($login, $pass) {
    $login = trim(htmlspecialchars($login));
    $pass = trim(htmlspecialchars($pass));

    $file = fopen('pages/users.txt', 'r');
    while ($line = fgets($file)) {
        $line_array = explode(':', trim($line));
        $readname = $line_array[0];
        $readpass = $line_array[1];
//        echo "$readname ----------- $readpass<br>"; // Вывести данные


        if ($readname === $login && $readpass === md5($pass)) {
            $_SESSION['registered_user'] = $login;
            echo "<h3 class='text-success'>Пароль и логин верны</h3>";
            return true;
        }
    }

}


// Модальное окно




