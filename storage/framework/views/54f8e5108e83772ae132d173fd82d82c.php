

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('frontend.content'); ?>

<style>
  input[type="file"] {
    opacity: 0;
  }
  /* Add styles to isolate the htmlContent */
  .html-content {
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
  }
  .html-content h1 {
    color: #333;
  }
  .html-content p {
    color: #666;
  }
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<section class="section" style="padding: 150px 0;">
    <div class="container">
        <!-- Include the Login Component -->
        <?php echo $__env->make('components.LoginComponent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="wrap-content">
                    <div class="hero-title">
                        <div class="tool-favorite-btn">
                            <button aria-label="Add to Favorite" class="btn btn-outline-primary rounded-circle add-fav">
                                <i class=" an an-heart"></i>
                            </button>
                        </div>
                        <h1><?php echo e($data['title']); ?></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, recusandae ex laudantium nobis</p>
                    </div>
                    <form id="convertForm" action="<?php echo e(route($data['route'])); ?>" method="POST" enctype="multipart/form-data">
                       <?php echo e(csrf_field()); ?>

                       <?php if(count($errors) > 0): ?>
                           <div class="error text-danger">
                               <ul>
                                   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <li><?php echo e($error); ?></li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </ul>
                           </div>
                       <?php endif; ?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="8000000"/>
                        <input type="file" name="file"/>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="artisan-uploader bg-light rounded uploader-file-uploader">
                                    <input id="file-uploader" type="file" name="file" accept="<?php echo e($data['file_type']); ?>">
                                    <label for="file-uploader" class="file-drag">
                                        <div class="uploader-wrapper">
                                            <i class="an an-upload-image"></i>
                                            <h3>Drop <?php echo e($data['type']); ?> File Here</h3>
                                            <div class="uploader-extensions mb-3">
                                                <span class="badge text-uppercase" style="color:#333">.<?php echo e($data['type']); ?></span>
                                            </div>
                                            <p>Make "All" files easy to write by converting them to <?php echo e($data['conversion']); ?>.</p>
                                            <span class="btn btn-dark file-upload-btn">Select a File</span>
                                        </div>
                                        <div class="files-grid"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-end">
                                    <button type="button" id="convertButton" class="btn btn-outline-primary rounded-pill">Convert Now</button>
                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loadingModalLabel">Processing</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="loadingIndicator">
          <!-- Timer or loading bar can be added here -->
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p>Generating PDF, please wait...</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="htmlContent" class="html-content"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\convert to pdf\convert-to-pdf\resources\views/frontend/common_converter_file.blade.php ENDPATH**/ ?>