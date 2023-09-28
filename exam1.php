<form action="#" method="post">
    <fieldset>
        <legend>Tính tổng, hiệu, tích, thương của hai số A và B</legend>
        <input type="number" name="soA"> Nhập số A</br>
        <input type="number" name="soB"> Nhập số B</br>
        <input type="submit" name="tinh" value="Tính">
    </fieldset>
</form>

<?php
    if(isset($_POST['tinh'])){
        $a = $_POST ['soA'];
        $b = $_POST ['soB'];
        $tong = $a + $b;
        $hieu = $a - $b;
        $tich = $a * $b;
        $thuong = $a / $b;
        echo "A = ".$a."</br>";
        echo "B = ".$b."</br>";
        echo "Tổng hai số A + B = ".$tong."</br>";
        echo "Hiệu hai số A - B = ".$hieu."</br>";
        echo "Tích hai số A * B = ".$tich."</br>";
        echo "Thương hai số A / B = ".$thuong;
    }
?>