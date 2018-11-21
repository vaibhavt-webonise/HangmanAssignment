<?php
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hangman</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <div id="hangman-div">
            <form action="controller.php" method="POST">
               <input type="hidden" name="action" value="1" />
                <div class="center">
                    <div id="levels-div">
                        <span id="level">
                         </span>
                    </div>
                    <div>
                        <input type="submit" value="Play!!!" id="submit-button" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
