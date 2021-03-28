<?php

require (__DIR__.'/../model/model.php');

function displayChat()
{
    $chat = listMessages();
    $rounded_page_number = countPages();
    require(__DIR__.'/../view/index_view.php');
}

function sendMessage()
{
    insertMessage();
    displayChat();
    header('Location: index.php');
}

//TEST