<?php
    function addtk($username,$pass,$email,$sdt,$role){
        $conn = cndb();
        $sql = "INSERT INTO tbl_taikhoan (username, pass, email, sdt,role)
        VALUES ('$username','$pass','$email','$sdt','$role')";
        $conn->exec($sql);
    }

    function udtk($id,$username){
        $conn = cndb();
        $sql = "UPDATE tbl_taikhoan SET username='".$username."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udtkps($id,$pass){
        $conn = cndb();
        $sql = "UPDATE tbl_taikhoan SET pass='".$pass."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udtkemail($id,$email){
        $conn = cndb();
        $sql = "UPDATE tbl_taikhoan SET email='".$email."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udtksdt($id,$sdt){
        $conn = cndb();
        $sql = "UPDATE tbl_taikhoan SET sdt='".$sdt."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udtkrole($id,$role){
        $conn = cndb();
        $sql = "UPDATE tbl_taikhoan SET role='".$role."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

   
    function get1tk($id){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_taikhoan WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tk = $stmt->fetchAll();
        return $tk;
    }

    function deltk($id){
        $conn = cndb();
        $sql = "DELETE FROM tbl_taikhoan WHERE id=".$id;
        $conn->exec($sql);
    }

    function laytaikhoan(){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_taikhoan");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tk = $stmt->fetchAll();
        return $tk;
    }
?>