<html>
    <head>
        
    </head>
    <body>
        
        <table>
            
        
            <?php
            $letters = ['A', 'B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
                'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                
            $numbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
            
            
            
                $count = 0;
                for($i=0;$i<25;$i++) {
                    
                    $passwords = array();
                    $ranLet = rand(4,7);
                    for($i=0;$i<$ranLet;$i++) {
                        shuffle($letters);
                        array_push($passwords,$letters[$i]);
                    }
                    
                    $ranNum = rand(1,3);
                    for($i=0;$i<$ranNum;$i++) {
                        shuffle($numbers);
                        array_push($passwords,$numbers[$i]);
                    }
                    shuffle($passwords);
                    
                    $ranPass = rand(5,10);
                     echo "<tr>"   ;
                        echo "<td>";
                        for($i=0;$i<$ranPass;$i++) {
                            
                            echo $passwords[$i];
                        }
                        echo "</td>";
                    echo "</tr>";     
                        // echo "<br>";
    
                    $count++;
                    if($count == 25) {
                        break;
                    }
                }
            ?>
        </table>
    </body>
</html>