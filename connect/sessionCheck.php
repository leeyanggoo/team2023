<?php
    if(!isset($_SESSION['memberID'])){
        echo("<script>alert('로그인 후 이용해주세요.');window.location.href = '../main/main.php';</script>");
    }
?>