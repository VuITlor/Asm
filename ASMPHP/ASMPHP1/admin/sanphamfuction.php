<?php
    function addsp($iddm,$ten,$gia,$ma,$dvt,$img){
        $conn = cndb();
        $sql = "INSERT INTO tbl_sanpham (iddm, ten, gia, ma, dvt, img)
        VALUES ('$iddm','$ten','$gia','$ma','$dvt','$img')";
        $conn->exec($sql);
    }

    function udsp($id,$ten){
        $conn = cndb();
        $sql = "UPDATE tbl_sanpham SET ten='".$ten."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udspgia($id,$gia){
        $conn = cndb();
        $sql = "UPDATE tbl_sanpham SET gia='".$gia."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udspimg($id,$img){
        $conn = cndb();
        $sql = "UPDATE tbl_sanpham SET img='".$img."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udspma($id,$ma){
        $conn = cndb();
        $sql = "UPDATE tbl_sanpham SET ma='".$ma."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udspdvt($id,$dvt){
        $conn = cndb();
        $sql = "UPDATE tbl_sanpham SET dvt='".$dvt."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function udspiddm($id,$iddm){
        $conn = cndb();
        $sql = "UPDATE tbl_sanpham SET iddm='".$iddm."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function get1sp($id){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function delsp($id){
        $conn = cndb();
        $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
        $conn->exec($sql);
    }

    function laysanpham(){
        $conn = cndb();
        $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function laysanpham1($iddm,$kyw=""){
        $conn = cndb();
        $sql="SELECT * FROM tbl_sanpham WHERE 1";
        if($iddm>0) $sql.=" AND iddm =".$iddm;
        if($kyw!="") $sql.=" AND ten like '%".$kyw."%";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>