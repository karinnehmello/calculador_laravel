<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="/store" method="post">
        <?php echo csrf_field(); ?>
        <p>
            <label for="num1">Número 1</label>
            <input type="number" id="num1" name="num1" value="">
        </p>
        <p>
            <label for="num2">Número 2</label>
            <input type="number" id="num2" name="num2" value="">
        </p>
        <p>
            <label for="operacao">Operação</label>
            <select id="operacao" name="operacao">
                <option value="+">+</option>    
                <option value="-">-</option>
            </select>
        </p>
        <button type="submit">Calcular e Salvar</button>
    </form>
</body>
</html><?php /**PATH C:\Users\usuario\Documents\calculadora-laravel-3a2\resources\views/formulario.blade.php ENDPATH**/ ?>