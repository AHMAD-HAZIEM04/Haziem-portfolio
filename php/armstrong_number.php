<?php
   $result = '';
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $originalNum = $_POST['orinumber'];
    $num = $originalNum ;
        $digits = strlen((string)$num);
        $sum = 0;

    while ($num > 0) {
            $digit = $num % 10;
            $sum += pow($digit, $digits);
            $num = (int)($num / 10);
        }
        $sum === $originalNum;

    if($sum == $originalNum){
       echo"<p>$sum is armstrong number</p>";
    } else{
        echo"<p>$originalNum is not armstrong number</p>";
    }
   }
    
    

?>
<html>
    <head><title>ARMSTRONG CONVERTER</title></head>
    <body>
        <h1>Armstrong Converter</h1>
        <form method="POST">

            <label>Enter Armstrong Number:</label>
            <input type="number" name="orinumber" required>
            <br><br>

            <input type="submit" value="Check">
        </form>
        <?php if (!empty($result)): ?>
          <div class="result">
            <?php echo $result; ?>
          </div>
        <?php endif; ?>
    </body>
</html>