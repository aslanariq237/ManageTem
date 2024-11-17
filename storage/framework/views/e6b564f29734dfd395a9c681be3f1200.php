

<?php $__env->startSection('content'); ?>
    <div class="car">                
        <div class="card">
            <div class="new">
                <button>New</button>
            </div>
            <div class="card1">
                <div class="cust">
                    <button>New Customer</button>
                </div>
                <div class="tek">
                    <button>New Teknisi</button>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="table">
            <h3>Table Manner</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Nomor Telepon</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->nama_pelanggan); ?></td>
                        <td><?php echo e($data->number_phone); ?></td>
                        <td><?php echo e($data->contact); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\laravel\management\ManagementSystem\resources\views/container/pages/home.blade.php ENDPATH**/ ?>