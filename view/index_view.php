<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <title>Mini-chat</title>
  </head>

  <body>
      <p>
        <h1>Mini-chat</h1>

            <form method="post" action="index.php">
                <p>
                    <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" value="<?php
                            if (isset($_COOKIE['remember_pseudo']))
                            {
                                echo htmlspecialchars($_COOKIE['remember_pseudo']);
                            }
                        ?>"/> <br/>
                    <label for="user_message">Votre message : </label><input type="text" name="user_message"/> <br/>
                    <input type="submit" name="validate_message"/>
                </p>
            </form>

            <?php
                $error_page = true;
                while ($display_chat = $chat->fetch())
                {
                    echo 'Le ' . $display_chat['chat_date'] . ', à ' . $display_chat['chat_time'] . ' -<strong> ' . htmlspecialchars($display_chat['pseudo']) . '</strong> dit : ' . htmlspecialchars($display_chat['user_message']) . '<br>';
                    $error_page = false;
                }

                if ($error_page) //If asked page doesn't exist
                {
                    throw new Exception ('Oups ! On dirait que cette page n\'existe pas...');
                }
            ?>

            <p><a href="index.php">Actualiser le chat</a></p>

            <?php
                $page = 1;

                echo 'Pages : | ';

                for ($l=0 ; $l < $rounded_page_number ; $l++)
                {
                    echo '<a href="index.php?page=' . $page . '">' . $page++ . ' </a> | ';
                }
            ?>
      </p>
  </body>

</html>

