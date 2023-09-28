<form action="#" method="post">
    <fieldset>
        <legend>Kiểm tra số nguyên tố.</legend>
    Nhập số N: <input type="text" name="soN"></br>
    <input type="submit" name="kiemtra" value="Kiểm tra">
    </fieldset>
</form>

<?php
    function check_prime($n){
        if ($n <= 1){
            return false;
        }else {
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0){
                    return false;
                };
            };
            return true;
        };
    };
    $n = $_POST["soN"];
    if(check_prime($n)){
        echo "{$n} là số nguyên tố.";
    }else {
        echo "{$n} không phải là số nguyên tố.";
    };
?>