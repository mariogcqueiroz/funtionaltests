<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de feedback</title>
    <!-- Adiciona o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Formulário Fedback</h1>
    <form action="/feedback" method="post" >
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name"  placeholder="Digite seu nome" value="<?=$feedback['name']?>" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Digite seu email" value="<?=$feedback['email']?>" >
            <p class="text-danger"><?=$error['email']?></p>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <input type="text"  class="form-control" name="feedback"  placeholder="Digite seu feedback" value="<?=$feedback['feedback']?>">
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary" >
    </form>
</div>

<!-- Adiciona o JavaScript do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>