<DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Rando Page</title>
        </head>
        <body>
            <?php

            $score = 0;
             print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
            //this for loop example should run ten round and compare computer score to player
            for($round = 0; $round < 10; $round++) {
                $playerscore = rand(1, 100);
                $compscore = rand(1, 100);
                print("<tr><td>$playerscore</td><td>$compscore</td>");
                //this if statement will check the player and computer and adjust the $score
                if($playerscore < $compscore) {
                    print("<td>Player lost this round </td></tr>\n");
                    $score--;
                }elseif ($playerscore > $compscore) {
                    print ("<td>Player won this round</td></tr>\n");
                    $score++;
                } else {
                    print("<td>Player tied this round</td></tr>\n");
                }
            }
            print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");
            ($score>0)?print("Good Job"):print("Sorry you lost");

            $year = date("Y");
            print("<p>It is the year of the:<br>");
            switch ($year % 12) {
                case 0:
                    echo 'Monkey</p>';
                    break;
                case 1:
                    echo 'Rooster</p>';
                    break;
                case 2:
                    echo 'Dog</p>';
                    break;
                case 3:
                    echo 'Boar</p>';
                    break;
                case 4:
                    echo 'Rat</p>';
                    break;
                case 5:
                    echo 'Ox</p>';
                    break;
                case 6:
                    echo 'Tiger</p>';
                    break;
                case 7:
                    echo 'Rabbit</p>';
                    break;
                case 8:
                    echo 'Dradon</p>';
                    break;
                case 9:
                    echo 'Snake</p>';
                    break;
                case 10:
                    echo 'Horse</p>';
                    break;		
                case 11:
                    echo 'Lamb</p>';
                    break;
                default:					
                    echo "Something broke";
            }
            ?>
        </body>
    </html>
		
