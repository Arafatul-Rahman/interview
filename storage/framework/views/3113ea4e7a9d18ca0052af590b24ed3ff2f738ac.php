<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body settings-page">
	<h3> item list</h3>
	<div class="feedback_from">
		
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Group name</th>
					<th scope="col">Group Type</th>
					<th scope="col">Account name</th>
					<th scope="col">Post test</th>
					<th scope="col">Time</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<th><?php echo e($item->group_name); ?></th>
					<th><?php echo e($item->group_type); ?></th>
					<th><?php echo e($item->account_name); ?></th>
					<th><?php echo e($item->post_text); ?></th>
					<th><?php echo e($item->sent_at); ?></th>
					
				</tr>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php echo e($item->appends($_GET)->links()); ?>




			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>