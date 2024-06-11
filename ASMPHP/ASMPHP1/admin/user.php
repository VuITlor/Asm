<?php
    function checkuser($username, $pass){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_taikhoan WHERE username='".$username."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $us = $stmt->fetchAll();
        if(count($us)>0){
            return $us[0]['role'];
        }else{
            return 0;
        }
    }
?>