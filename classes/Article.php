<?php

class Article
{
    private $db = null;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function create($title, $intro, $text, $author)
    {
        try {
            $result = $this->db->prepare("INSERT INTO `articles` (`title`, `intro`, `text`, `author`) VALUES (:title, :intro, :text, :author)");
            $result->execute(['title' => $title, 'intro' => $intro, 'text' => $text, 'author' => $author]);
        } catch (PDOException $exception) {
            if (strstr($_SERVER['HTTP_USER_AGENT'], 'Win'))
                $obj = new ContextLog(new DbLog());
             else
                $obj = new ContextLog(new FileLog());

            $obj->log('ошибка при добавлении данных в БД');
            $obj->showLog();
        }
    }
}