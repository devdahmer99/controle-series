<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <div class="jumbotron">
        <div class="display-4">
            <h1 class="mb-3 mt-3">Bem vindo ao seu software de séries!</h1>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH /home/dahmer/Documentos/controle-series/resources/views/layout/template.blade.php ENDPATH**/ ?>