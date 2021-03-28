<?php

require('controller/controller.php');

try
{
    if (! isset($_GET['page']) OR $_GET['page'] > 1000 OR $_GET['page'] < 0)
    {
        $_GET['page'] = 1;
    }

    else
    {
        $_GET['page'] = (int) $_GET['page'];
    }


    if(isset($_POST['pseudo']) AND isset($_POST['user_message']))
    {
        if(! empty($_POST['pseudo']) AND ! empty($_POST['user_message']) OR $_POST['user_message'] === '0')
        {
            setcookie('remember_pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
            sendMessage();
        }

        else
        {
            displayChat();
            throw new Exception ('Il faut renseigner un pseudo et un message');
        }
    }

    else
    {
        displayChat();
    }
}

catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}