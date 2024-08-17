<?php 
include_once './helpers/ConecationToBe.php';
function getusers(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM users");
    return $data->fetchAll();
};
function getproducts(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM Products");
    return $data->fetchAll();
};
function getorders(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM orders");
    return $data->fetchAll();
};
function getdep(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM depratement");
    return $data->fetchAll();
};
function descdep(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM depratement ORDER BY ID DESC ");
    return $data->fetchAll();
}
function ASCdep(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM depratement ORDER BY ID ASC");
    return $data->fetchAll();
}
function descuser(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM users ORDER BY ID DESC ");
    return $data->fetchAll();
}
function ASCuser(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM users ORDER BY ID ASC");
    return $data->fetchAll();
}
function desorder(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM   orders ORDER BY ID DESC ");
    return $data->fetchAll();
}
function ASCOrder(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM orders ORDER BY ID ASC");
    return $data->fetchAll();
}
function desproduct(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM Products ORDER BY ID DESC ");
    return $data->fetchAll();
}
function ASCproduct(){
    $con =contactToDB();
    $data= $con->query("SELECT * FROM Products ORDER BY ID ASC");
    return $data->fetchAll();
}
?>