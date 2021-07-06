<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col"><h5>Naziv proizvoda: <?php echo e($proizvod->naziv_proizvoda); ?></h5></div>    
            <div class="col"><h5>Cena proizvoda: <?php echo e($proizvod->cena); ?></h5></div> 
            <div class="col"><h5>Zalihe proizvoda: <?php echo e($proizvod->zalihe); ?></h5></div>   
        </div>
        
    
        </div>    
        <hr>
<h6>Da biste izvršili kupovinu, pritisnite dugme u donjem desnom uglu. </h6>
<h6>U nastavku možete videti sve izvršene kupovine za dati proizvod: </h6>
<div class="row">
             <div class="col-2">Ime i prezime kupca</div>
             <div class="col-2">Količina</div>
             <div class="col-2">Ukupna cena</div>
             <div class="col-2">Vreme kupovine</div>
             <div class="col-2">Kategorija proizvoda</div>
             
</div>
<div class="row">
         <?php $__currentLoopData = $kupovine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-2"><?php echo e($k->ime_prezime_kupca); ?></div>
             <div class="col-2"><?php echo e($k->kolicina); ?></div>
             <div class="col-2"><?php echo e($k->ukupno); ?></div>
             <div class="col-2"><?php echo e($k->kupljeno); ?></div>
             <div class="col-2"><?php echo e($kategorija->naziv_kategorije); ?></div>
             <div class="col-2"></div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
</div>


<a type="button" style="position: absolute; bottom:10px; right:2px;"  class="btn btn-success " data-toggle="modal"
data-target="#kupiProizvod">
Kupite proizvod
</a>

<!-- Modal HTML Markup -->
<div id="kupiProizvod" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-12">
                    <h3 class="modal-title">Kupite proizvod</h3>
                    <h5>Kupite proizvod popunjavanjem sledeće forme:</h5>
                </div>
            </div>
            <div class="modal-body">
                <form id="kupiProizvodForma">
                    <div class="row">
                        <div class="col">
                            <label for="ime_prezime_kupca">Ime i prezime:</label>
                            <input id="ime_prezime_kupca" class="form-control" type="text" >
                        </div>
                        <input id="proizvod_id" value="<?php echo e($proizvod->id); ?>" class="form-control" hidden type="text" >
                        <div class="col">
                            <label for="kolicina">Količina proizvoda:</label>
                            <input id="kolicina" class="form-control" type="number" >
                        </div>
                        <input id="cena" value="<?php echo e($proizvod->cena); ?>" class="form-control" hidden type="number" >
                        <input class="form-control" type="submit">
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jana\drugi-domaci\resources\views/proizvod.blade.php ENDPATH**/ ?>