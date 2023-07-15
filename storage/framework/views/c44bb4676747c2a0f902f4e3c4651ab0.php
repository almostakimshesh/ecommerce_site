<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left mb-2">
				<h2>Add New Post</h2>
			</div>
			<div class="pull-right">
				<a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Back</a>
			</div>
		</div>
	</div>

	<?php if(session('status')): ?>
	<div class="alert alert-success mb-1 mt-1">
		<?php echo e(session('status')); ?>

	</div>
	<?php endif; ?>

	<form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Post Title:</b>

				<input type="text" name="title" class="form-control" placeholder="Enter Title">
				<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Post Description:</b>

				<textarea class="form-control" style="height:150px;" name="description" placeholder="Enter Post Description"></textarea>
				<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Post Image:</b>

				<input type="file" name="image" class="form-control" placeholder="Enter Image">
				<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ml-3">Add Post</button>
	</div> 
		

	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce_site\resources\views/posts/create.blade.php ENDPATH**/ ?>