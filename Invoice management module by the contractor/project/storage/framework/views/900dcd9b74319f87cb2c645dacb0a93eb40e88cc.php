<?php $__env->startSection('content'); ?>

<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src=" <?php echo e(asset ('assets/img/avataaars.svg')); ?>" alt="">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">System fakturowania</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="pre-wrap masthead-subheading font-weight-light mb-0">Kontrahent i jego faktury</p>
            </div>
        </header>
        <section class=" page-section portfolio" id="portfolio">
            <div class="container">

<?php if(session()->has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session()->get('message')); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<!-- Portfolio Section Heading-->
<div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Dane kontrahenta</h2>
                </div>
                <p><?php echo e($contractor->name); ?></p>
                <p><?php echo e($contractor->surname); ?></p>
                <p><?php echo e($contractor->address); ?></p>
                <p><?php echo e($contractor->nip); ?></p>



                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Lista aktualnych faktur</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                

                <table class="table table-hover">
   <thead>
    <tr>
      <th scope="col">Lp</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Data</th>
      <th scope="col">Kwota</th>
      <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody .table-hover>
        <?php $__currentLoopData = $contractor->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
      <th scope="row"><?php echo e($invoice->id); ?></th>
      <td><?php echo e($invoice->company); ?></td>
      <td><?php echo e($invoice->date); ?></td>
      <td><?php echo e($invoice->total); ?></td>
      <td><a href="<?php echo e(route('invoices.edit_invoices' , ['id' => $invoice->id])); ?>" class="btn btn-primary">Edytuj </a></td>
      <td><form method="POST" action="<?php echo e(route('invoices.delete' , ['id' => $invoice->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-danger"> Usun</button>
        </form></td>
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
  </tbody>
</table>
            </div>
        </section>
        
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="Submarine"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


<?php $__env->stopSection(); ?>        
        
        
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Blog\blog\resources\views/contractors/contractor.blade.php ENDPATH**/ ?>