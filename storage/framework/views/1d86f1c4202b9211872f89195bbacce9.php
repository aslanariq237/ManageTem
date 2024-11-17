

<?php $__env->startSection('content'); ?>
    <div class="car">                                
        <div class="table">
            <h3>Table Teknisi</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Teknisi</th>
                        <th>Status</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $teknisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->nama_teknisi); ?></td>
                        <td><?php echo e($data->status); ?></td>                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\laravel\management\ManagementSystem\resources\views/container/pages/teknisi.blade.php ENDPATH**/ ?>