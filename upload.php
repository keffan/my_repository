<?php
    require_once('include/common.inc.php');
        
    if (!empty($_FILES))
    {
        $error = UploadFile($_FILES);
        $messages = array
            (
                0 => 'Файл успешно загружен на сервер.',
                1 => 'Размер файла превышает допустимое значение UPLOAD_MAX_FILE_SIZE',
                2 => 'Размер файла превышает допустимое значение MAX_FILE_SIZE',
                3 => 'Не удалось загрузить часть файла',
                4 => 'Файл не был загружен',
                6 => 'Отсутствует временная папка.',
                7 => 'Не удалось записать файл на диск.',
                8 => 'PHP-расширение остановило загрузку файла.',
                9 => 'Не удалось загрузить файл.'
            );
        echo '<meta charset="utf-8">';
        echo $messages[$error];
    }
    
    $files = scandir(UPLOAD_DIR);
    $images = array();
    foreach ($files as $filename)
    {
        if (isImage($filename))
        {
            $images[] = UPLOAD_DIR . $filename;
        }
    } 
    
    $vars = array
    (
        'images' => $images
    );
    echo buildPage('savefiles.tpl', $vars);