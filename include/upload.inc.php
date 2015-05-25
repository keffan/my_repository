<?php
    function upload_file($files)
    {
        $uploaddir = '../uploads/';
        $savedfile = $uploaddir . $files['filename']['name'];
        $file = $files['filename']['tmp_name'];
        if ($files['filename']['error'] > 0)
        {
            $messages = array
            (
                1 => 'Размер файла превышает допустимое значение UPLOAD_MAX_FILE_SIZE',
                2 => 'Размер файла превышает допустимое значение MAX_FILE_SIZE',
                3 => 'Не удалось загрузить часть файла',
                4 => 'Файл не был загружен',
                6 => 'Отсутствует временная папка.',
                7 => 'Не удалось записать файл на диск.',
                8 => 'PHP-расширение остановило загрузку файла.'
            );
            return $messages[$files['filename']['error']];
        }    
        return (@move_uploaded_file($file, $savedfile)) ? "Файл успешно загружен на сервер" 
                                                       : "Не удалось загрузить файл";
    }