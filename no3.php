<?php

for ($i = 1; $i < 30; $i++ )
{ 
    if (90 % $i == 0 ) {
        echo "<br>";
        $hisil = 90 / $i;
        echo "90 / $i = ". $hisil ;
    }
};

echo '<h4>jadi bilangan yang bisa di bagi oleh 90 adalah : </h4>';
for ($u = 1; $u <= 30; $u++ ) 
{ 
    if (90 % $u == 0 ) {
       echo '<br>';
       echo $u;
    }
}; 

