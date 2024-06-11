<?php
    function themdm($ten){
        $conn = cndb();
        $sql = "INSERT INTO tbl_danhmuc (ten)
        VALUES ('".$ten."')";
        $conn->exec($sql);
    }

    function uddm($id,$ten){
        $conn = cndb();
        $sql = "UPDATE tbl_danhmuc SET ten='".$ten."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function get1dm($id){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function deldm($id){
        $conn = cndb();
        $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function laydanhmuc(){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>