<?php $__env->startSection('cabecalho'); ?>
Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<a href="<?php echo e(route('criar-serie')); ?>" class="btn btn-dark mb-2">Adicionar</a>

<?php if(!empty($mensagem)): ?>
    <div class="alert alert-success">
        <?php echo e($mensagem); ?>

    </div>
<?php endif; ?>

<ul class="list-group">
    <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <?php echo e($serie->nome); ?>


        <span class="d-flex">
            <a href="/series/<?php echo e($serie->id); ?>/temporadas" class="btn btn-info btn-sm mr-1">
                <i class="fas fa-external-link-alt"></i>
            </a>
        <form method="post" action="/series/remover/<?php echo e($serie->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir <?php echo e(addslashes($serie->nome)); ?> ? ')">
            <?php echo csrf_field(); ?>
            <button class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
            </button>
        </form>
     </span>
</li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dahmer/Documentos/controle-series/resources/views/series/index.blade.php ENDPATH**/ ?>