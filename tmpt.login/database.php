<?php
    
    $data = mysqli_connect("localhost","root","","desakawali");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>