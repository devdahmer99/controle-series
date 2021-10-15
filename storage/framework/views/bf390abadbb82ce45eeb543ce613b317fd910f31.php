<?php $__env->startSection('titulo'); ?>
    Adicionar Nova Série
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post" action="/series/create">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="descricao" class="form-label">Descricao:</label>
      <input type="text" name="descricao" class="form-control" id="descricao">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dahmer/Documentos/controle-series/resources/views/series/cadastrar.blade.php ENDPATH**/ ?>