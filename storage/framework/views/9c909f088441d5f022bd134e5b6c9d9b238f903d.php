<?php $__env->startSection('content'); ?>
<div class="container">
<h4 align="center">Pregled proizvoda</h4>
    <div>
        <table id="proizvodi" class="table table-info table-hover table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Naziv</th>
                    <th>Cena</th>
                    <th>Zalihe</th>
                    <th>Kategorija</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>

<script src="/js/proizvodi.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jana\drugi-domaci\resources\views/proizvodi.blade.php ENDPATH**/ ?>