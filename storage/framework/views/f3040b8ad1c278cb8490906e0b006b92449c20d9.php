<?php $__env->startSection('titulo'); ?>
    Home | Controle de Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="list-group">
    <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?= $serie->descricao; ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<a href="/series/cadastrar" class="btn btn-primary mt-3">Nova Serie</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dahmer/Documentos/controle-series/resources/views/series/index.blade.php ENDPATH**/ ?>