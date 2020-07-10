<?php
    session_start();
    include("conecta.php");
    $emailvend = $_POST['emailvend'];
    $senhavend = /*base64_encode*/($_POST["senhavend"]);
    if($emailvend == "" || $senhavend == ""){
        echo ("<script>alert('Login ou senha em branco!');</script>");
        echo ("<script>location.href='loginvend.html';</script>");
    }
    $logar = mysqli_query($conn, "SELECT * FROM vendedor WHERE emailvend = '$emailvend' AND senhavend = '$senhavend'") or die("Erro ao selecionar");
    if (mysqli_num_rows($logar) > 0){
        $_SESSION["user"] = $_POST['emailvend'];
        echo ("<script>alert('Logado com sucesso.');</script>");
        echo ("<script>location.href='index-vend-log.php';</script>");
    } else {
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');</script>");
        echo ("<script>location.href='loginvend.html';</script>");
    }
    mysqli_close($conn);
?>