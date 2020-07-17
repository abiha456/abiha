<?php
$user = null;
if(isset($_POST['sbmt'])) {
    $user = $_POST['num'];
}

function numberTowords($n){
    $n = (int)$n;
        $key = array(
                1     => 'one',
                2     => 'two',
                3     => 'three',
                4     => 'four',
                5     => 'five',
                6     => 'six',
                7     => 'seven',
                8     => 'eight',
                9     => 'nine',
                10    => 'ten',
                11    => 'eleven',
                12    => 'twelve',
                13    => 'thirteen',
                14    => 'fourteen',
                15    => 'fifteen',
                16    => 'sixteen',
                17    => 'sesnteen',
                18    => 'eighteen',
                19    => 'nineteen',
                20    => 'twenty',
                30    => 'thirty',
                40    => 'fourty',
                50    => 'fifty',
                60    => 'sixty',
                70    => 'seventy',
                80    => 'eighty',
                90    => 'ninety'
        );
        if (array_key_exists($n,$key)) {
            return $key[$n];
          };
        
          if ($n > 20 && $n < 100) {
            return numberTowords(floor($n / 10) * 10) . ' ' . numberTowords($n % 10);
          }
          if($n > 100 && $n < 1000){
            return numberTowords(floor($n / 100)) .' hundred ' .numberTowords($n % 100);
          }
          if($n > 1000 && $n < 100000){
            return numberTowords(floor($n / 1000)).' Thousand ' . numberTowords($n % 1000);
          }
          if($n > 100000 && $n < 10000000){
            return numberTowords(floor($n / 100000)).' Lac ' . numberTowords($n % 100000);
          }
          
           return $n;
};
echo numberTowords($user);
    
?>

<form method="post">
    <input type="text" placeholder="Enter a number" name="num">
    <input type="submit" name="sbmt">
</form>