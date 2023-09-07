<?php
include'../Model/DBConn.php';
function BabyShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from baby") ;
     $res = oci_execute($sql);
     return $sql;
}
function Babysitter(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from Babysitter") ;
     $res = oci_execute($sql);
     return $sql;
}
function Parent_info(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from Parent_info") ;
     $res = oci_execute($sql);
     return $sql;
}
function Parent_contact(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from Parent_contact") ;
     $res = oci_execute($sql);
     return $sql;
}
?>