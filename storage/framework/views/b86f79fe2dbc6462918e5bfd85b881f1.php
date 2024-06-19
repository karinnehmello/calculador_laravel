

<?php $__env->startSection('conteudo'); ?>
    <div class="cabecalho">
        <h2>Calculadora</h2>
        <a href="/create">Criar Novo</a>
    </div>
    <div class="container">
        <table class="grid">
            <tr>
                <td>Número 1</td>
                <td>Operação</td>
                <td>Número 2</td>
                <td>Resultado</td>
            </tr>
            <?php $__currentLoopData = $resultados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resultado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($resultado->num1); ?></td>
                <td><?php echo e($resultado->operacao); ?></td>
                <td><?php echo e($resultado->num2); ?></td>
                <td><?php echo e($resultado->resultado); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fernandoluiz\Documents\calculadora-laravel-3a2\resources\views/index.blade.php ENDPATH**/ ?>