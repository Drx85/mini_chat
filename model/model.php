<?php

function listMessages()
{
    $limit_page = getLIMIT();
    $bdd = dbConnect();
    $chat = $bdd->prepare('SELECT pseudo, user_message, DATE_FORMAT(chat_date, \'%d/%m/%Y\') AS chat_date, chat_time AS chat_time 
	FROM mini_chat_db ORDER BY ID DESC LIMIT :limit_page, 10');

    $chat->bindValue('limit_page', $limit_page, PDO::PARAM_INT);
    $chat->execute();

    return $chat;
}

function insertMessage()
{
    $bdd = dbConnect();
    $chat_message = $bdd->prepare('INSERT INTO mini_chat_db (pseudo, user_message, chat_date, chat_time) VALUES (:pseudo, :user_message, NOW(), NOW())');
    $chat_message->execute(array(
        'pseudo' => $_POST['pseudo'],
        'user_message' => $_POST['user_message']
    ));
}

function countPages()
{
    $bdd = dbConnect();
    $nb = $bdd->query('SELECT COUNT(*) AS lines_number FROM mini_chat_db');

    $count_lines_number = $nb->fetch();

    $page_number = $count_lines_number['lines_number'] / 10;

    $rounded_page_number = ceil($page_number);

    return $rounded_page_number;
}

function getLIMIT()
{
    $limit_page = 0;

    for ($i = 0; $i < $_GET['page'] - 1; $i++)
    {
        $limit_page = $limit_page + 10;
    }

    return $limit_page;
}

function dbConnect()
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    return $bdd;
}