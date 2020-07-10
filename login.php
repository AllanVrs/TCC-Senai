<?php
    session_start();
    include("conecta.php");
    $emailusu = $_POST['emailusu'];
    $senhausu = /*base64_encode*/($_POST["senhausu"]);
    if($emailusu == "" || $senhausu == ""){
        echo ("<script>alert('Login ou senhausu em branco!');</script>");
        echo ("<script>location.href='login.html';</script>");
    }
    $logar = mysqli_query($conn, "SELECT * FROM usuario WHERE emailusu = '$emailusu' AND senhausu = '$senhausu") or die("Erro ao selecionar");
    if (mysqli_num_rows($logar) > 0){
        $_SESSION["user"] = $_POST['emailusu'];
        echo ("<script>alert('Logado com sucesso.');</script>");
        echo ("<script>location.href='index-logado.php';</script>");
    } else {
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');</script>");
        echo ("<script>location.href='login.html';</script>");
    }
    mysqli_close($conn);
?>