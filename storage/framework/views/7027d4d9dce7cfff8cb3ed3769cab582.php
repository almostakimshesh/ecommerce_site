
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>Edit Post</h2>
				</div>
				<!-- <div class="pull-right">
					<a href="<?php echo e(route('category.index')); ?>" class="btn btn-primary" enctype="multipart/form-data">Back</a>
				</div> -->
			</div>
		</div>
	
		<?php if(session('status')): ?>
		<div class="alert alert-success mb-1 mt-1">
			<?php echo e(session('status')); ?>

		</div>
		<?php endif; ?>
	
		<form action="<?php echo e(route('category.update',$category->id)); ?>" method="post" enctype="multipart/form-data">
	
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Post Title:</b>
						<input type="text" name="categoryname" value="<?php echo e($category->categoryname); ?>" class="form-control" placeholder="Post Title">
						<?php $__errorArgs = ['categoryname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger mt-1 mb-1">
							<?php echo e($message); ?>

						</div>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
	
				<button type="submit" class="btn btn-primary" ml-3>Update</button>
	
			</div>
			
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce_site\resources\views/category/edit.blade.php ENDPATH**/ ?>