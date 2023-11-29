<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #form{
            padding: auto;
            margin-top: 20px;
           
        }
    </style>
</head>
<body>
   
            <div id="form">
            <form action="app/cadastrar.php" method="post">

                <label for="">Nome</label>
                <input type="text" name="nome" id="">
                <label for="">Digita o email</label>
                <input type="email" name="email">
                <label for="">Digita a senha</label>
                <input type="password" name="senha">
                <select name="tipo" id="">
                    <option value="pessoal">Pessoal</option>
                    <option value="empresa">Empresa</option>
                </select>
                <button type="submite">Cadastar</button>
                </form>
                </div>
    
</body>
</html>