<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            padding: .25rem 1rem;
        }

        .cabecalho {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        .grid {
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;            
        }

        .grid td {
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php echo $__env->yieldContent('conteudo'); ?>
</body>
</html><?php /**PATH C:\Users\fernandoluiz\Documents\calculadora-laravel-3a2\resources\views/layouts/app.blade.php ENDPATH**/ ?>