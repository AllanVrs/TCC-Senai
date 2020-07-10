<?php
    session_start();
    include("conecta.php");
    $nomevend = $_POST['nomevend'];
    $estabelecimentovend = $_POST['estabelecimentovend'];
    $cnpjvend = $_POST['cnpjvend'];
    $enderecovend = $_POST['enderecovend'];
    $celularvend = $_POST['celularvend'];
    $telefonevend = $_POST['telefonevend'];
    $complementovend = $_POST['complementovend'];
    $numerovend = $_POST['numerovend'];
    $infovend = $_POST['infovend'];
    $emailvend = $_POST['emailvend'];
    $senhavend = $_POST['senhavend'];

    $novo = mysqli_query($conn, "SELECT * FROM vendedor WHERE emailvend = '$emailvend' AND cnpjvend = '$cnpjvend'") or die (mysqli_error($conn));
    if (mysqli_num_rows($novo) > 0){
        $vendedor = mysqli_query($conn, "SELECT * FROM vendedor WHERE emailvend = '$emailvend'AND cnpjvend = '$cnpjvend'")or die (mysqli_error($conn));
        if(mysqli_num_rows($vendedor)>0){
            echo ("<script>alert('Cliente já cadastrado em nossa base de dados!')</script>");
            echo ("<script>location.href='novovend.html';</script>");
            mysqli_close($conn);

        }
    }

    $sql = "INSERT INTO vendedor(nomevend,estabelecimentovend,cnpjvend,enderecovend,celularvend,telefonevend,complementovend,numerovend,infovend,emailvend,senhavend) VALUES ('$nomevend','$estabelecimentovend','$cnpjvend','$enderecovend','$celularvend','$telefonevend','$complementovend','$numerovend','$infovend','$emailvend','$senhavend')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'>
        alert('Cliente cadastrado com sucesso!');
        window.location.href='index.html';
        </script>";
    }else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Cliente não foi cadastrado!');
        window.location.href='cad_vend.php';
        </script>";
    }
    mysqli_close($conn);
?>

