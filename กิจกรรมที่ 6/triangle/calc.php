<?php
    $height = $_POST["height"];
    $base = $_POST["base"];
	$two = 2;
    $result = $height*$base/$two;

    echo "พื้นที่ของรูปสามเหลี่ยมที่ฐาน $base หน่วย และ ความสูง $height หน่วย คือ $result หน่วย^2";
?> 