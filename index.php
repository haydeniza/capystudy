<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
   

</head>
<body>
<div class="center-div">

        <img src="capy.png" alt="capy" width="80" height="80" class="center-image">
        <h3 class="center-title">Cadastro</h3>

        <form method="POST" container="center" align="center" action="cadastro.php" class="center-form">

        <table>
    
            <tr>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nome" required >
                <label for="floatingInput">Nome</label>
                </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email </label>
                </div>

                <div class="form-floating mb-3" >
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" >
                    <label for="floatingInput">Data</label>
           <br><br>
            <div class="btn-wrapper">
                <button type="submit"  name= "enviar" class="btn-enviar">Enviar</button>
            </div>
        </table>
    </form>
</div>

<?php   
include("conexao.php");

$sql = "SELECT * FROM teste";
$res = mysqli_query($conect, $sql);

if ($res) {
    while ($r = mysqli_fetch_array($res)) {
       
        echo '<tr>
            <td>'.$r['nome'].'</td>
            <td>'.$r['email'].'</td>
            <td>'.$r['senha'].'</td>
            <td>'.$r['data'].'</td>

            <td>
                <a href="capy.php?id='.$r['id'].'"><img src="capy.png" width="16" height="16"></a>
            </td>
           ';
    }
} 
?>

            </tbody>
        </table>
    </div>
</body>
</html>
