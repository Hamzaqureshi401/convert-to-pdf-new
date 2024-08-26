








<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('frontend.content'); ?>

<div class="container" style="margin-top: 150px;
    margin-bottom: 150px;">
    <h1>Your Wallet</h1>

    <?php if($wallet): ?>
        <p>Current Balance: ₹<?php echo e(number_format($wallet->balance, 2)); ?></p>
    <?php else: ?>
        <p>You do not have a wallet yet.</p>
    <?php endif; ?>


    
        <!-- Add Funds Form -->
        <h2>Add Funds</h2>
        <form action="<?php echo e(route('wallet.addFunds')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="amount">Amount to Add:</label>
                <input type="number" name="amount" id="amount" class="form-control" min="0.01" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Funds</button>
        </form>

        <!-- Withdraw Funds Form -->
        <h2>Withdraw Funds</h2>
        <form action="<?php echo e(route('wallet.withdrawFunds')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="withdraw_amount">Amount to Withdraw:</label>
                <input type="number" name="amount" id="withdraw_amount" class="form-control" min="0.01" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-warning">Withdraw Funds</button>
        </form>
    
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u876012718/domains/editevolv.com/public_html/editepdf/resources/views/wallet/index.blade.php ENDPATH**/ ?>