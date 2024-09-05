<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Wallet</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Revenue </h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                        <h6>
                        <?php if($wallet): ?>
                            $<?php echo e(number_format($wallet->balance, 2)); ?></p>
                               <?php else: ?>
                            <p>You do not have a wallet yet.</p>
                            <?php endif; ?>
                        </h6>
                        
                        <span class="text-muted small pt-2 ps-1">Current Balance</span>
                                
                        <?php if(session('success')): ?>
                           <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                         <?php endif; ?>

                        <?php if(session('error')): ?>
                        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
              
                <!-- Revenue Card -->
            
              <div class="col-xxl-8 col-md-6">
                <?php if($wallet): ?>
                <div class="card info-card revenue-card" style="padding: 15px;">
                  <div class="card-body">
                   
                        <form action="<?php echo e(route('wallet.addFunds')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="d-flex align-items-center" style="
                            column-gap: 20px;
                        ">
                                <div class="col-md-8">
                                  <input type="number" name="amount" id="amount" class="form-control" min="0.01" step="0.01" required>
                                </div>
                                <div class="col-md-4">
                                  <button type="submit" class="btn btn-primary">Add Funds</button>
                                </div>
                        </div>
                        </form>
                    
                  </div>

                  <div class="card-body">
                   
                    <form action="<?php echo e(route('wallet.withdrawFunds')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="d-flex align-items-center" style="
                        column-gap: 20px;
                    ">
                            <div class="col-md-8">
                              <input type="number" name="amount" id="withdraw_amount" class="form-control" min="0.01" step="0.01" required>
                            </div>
                            <div class="col-md-4">
                              <button type="submit" class="btn btn-warning">Withdraw Funds</button>
                            </div>
                    </div>
                    </form>
                
                  </div>
                </div>
                <?php endif; ?>
              </div><!-- End Revenue Card -->
  
              <!-- Reports -->
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Reports </h5>
                  </div>
                </div>
              </div><!-- End Reports -->
  
            </div>
          </div><!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
  
            <!-- Recent Activity -->
            <div class="card">
  
              <div class="card-body">
                <h5 class="card-title">Recent Activity </h5>
  
                <div class="activity">
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Voluptatem blanditiis blanditiis eveniet
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Voluptates corrupti molestias voluptatem
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Est sit eum reiciendis exercitationem
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                  </div><!-- End activity item-->
  
                </div>
  
              </div>
            </div><!-- End Recent Activity -->
  
          </div><!-- End Right side columns -->
        </div>
      </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\convert to pdf\convert-to-pdf\resources\views/wallet/index.blade.php ENDPATH**/ ?>