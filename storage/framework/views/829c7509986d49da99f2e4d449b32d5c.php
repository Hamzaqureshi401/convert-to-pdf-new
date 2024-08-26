<form action="<?php echo e(route('convert-pdf-to-word')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="file" name="pdf" required>
    <button type="submit">Convert to Word</button>
</form>
<?php /**PATH C:\xampp\htdocs\editevolv\resources\views/frontend/pdftool/pdftoword.blade.php ENDPATH**/ ?>