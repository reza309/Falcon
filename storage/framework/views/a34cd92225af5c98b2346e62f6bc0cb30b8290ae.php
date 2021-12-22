<div class="container mt-5">
    <?php if(Cart::count()>0): ?>
    <?php if(Session::has('success_message')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success_message')); ?>

        </div>
    <?php endif; ?>
    <b>Product Name</b>
    <hr>
    <ul class="list-group list-group-flush mb-5">
        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item justify-middle">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-lg-3">
                            <a href="" class="text-decoration-none">
                            <img src="<?php echo e(asset('images/products')); ?>/<?php echo e($item->model->image); ?>" alt="Product Image" class="img img-fluid" style="width:100px">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <a href="#" class="text-decoration-none"><b><?php echo e($item->model->name); ?></b></a>
                        </div>
                    </div>
                </div>
                <!-- ending col -->
                <div class="col-lg-2">
                    <span class="text-secondary">
                        <i class="fas fa-dollar-sign"></i> <?php echo e($item->model->regular_price); ?>

                    </span>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex">
                        <div class="border pe-lg-3 ps-lg-3" role="button" tabindex="0">
                            <i class="fas fa-minus"></i>
                        </div>
                        <div class="border pe-lg-3 ps-lg-3">1</div>
                        <div class="border pe-lg-3 ps-lg-3" role="button" tabindex="0">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <span class="text-secondary">
                        <i class="fas fa-dollar-sign"></i> <?php echo e($item->subtotal); ?>

                    </span>
                </div>
                <div class="col-lg-1">
                    <span role="button" tabindex="0">
                        <i class="fas fa-times"></i>
                    </span>
                </div>
            </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <li class="list-group-item justify-middle">
            <div class="row">
                <div class="col-lg-4">
                    
                </div>
                <!-- ending col -->
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-3">
                    <b>Total Payable Ammount</b>
                </div>
                <div class="col-lg-2">
                    <span class="text-dark">
                        <i class="fas fa-dollar-sign"></i> <?php echo e(Cart::total()); ?>

                    </span>
                </div>
                <div class="col-lg-1">
                    <button type="submit" class="btn btn-primary btn-custom border-0">Checkout</button>
                </div>
            </div>
        </li>
    </ul>
    <?php else: ?>
        <div class="empty-container-cart text-center" style="min-height:300px">
        <h3>Your Cart is empty</h3>
        <a href="#" class="text-decoration-none">
            Please add atleast one product to your cart!
        </a>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\falcon\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>