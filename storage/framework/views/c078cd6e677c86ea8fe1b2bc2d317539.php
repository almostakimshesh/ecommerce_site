<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>All Posts</h2>
				</div>
		
			</div>
			<div class="pull-left mb-2">
				<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">Create New Post</a>
			</div>
		</div>
		
		<br>
		<?php if($message=Session::get('success')): ?>
		<div class="alert alert-success">
			<p><?php echo e($message); ?></p>
		</div>
		<?php endif; ?>
		
		<div class="card-group">
			<div class="container py-5">
				<div class="row mt-4">
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-3">
							<div class="card">
							
								<img src="<?php echo e(asset('/storage/blog/'.$post->image)); ?>" class="card-img-top" height="75" width="75" alt="">
								<div class="card-body">
									<h5 class="card-title"><?php echo e($post->title); ?></h5>
									<p class="card-text"><?php echo e($post->description); ?></p>
								</div>
								<div class="card-footer">
									<form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="post">
									<a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="btn btn-primary">Edit</a>
									<?php echo csrf_field(); ?>
									<?php echo method_field('DELETE'); ?>
									<button type="submit" class="btn btn-danger">Delete</button>	
									</form>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					
				</div>
			</div>
		</div>
    </div>
  </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce_site\resources\views/posts/index.blade.php ENDPATH**/ ?>