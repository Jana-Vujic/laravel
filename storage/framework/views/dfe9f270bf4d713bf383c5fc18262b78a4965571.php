<?php $__env->startSection('content'); ?>
<div class="container">
    <h4>Proizvodi koji pripadaju kategoriji <?php echo e($kategorija->naziv_kategorije); ?></h4>
    <div>
        <table id="proizvodi" class="table table-info table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Naziv</th>
                    <th>Cena</th>
                    <th>Zalihe</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $proizvodi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proizvod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($proizvod->naziv_proizvoda); ?></td>
                        <td><?php echo e($proizvod->cena); ?></td>
                        <td><?php echo e($proizvod->zalihe); ?></td>
                        
                        <td>
                        <a href=<?php echo e("http://127.0.0.1:8000/proizvod/" .$proizvod->id); ?> class="btn btn-info btn-block">Detalji</a>
                       
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jana\drugi-domaci\resources\views/kategorija.blade.php ENDPATH**/ ?>