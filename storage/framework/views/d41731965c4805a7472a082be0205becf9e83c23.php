
<?php $__env->startSection('content'); ?>
<div class="inner-header">

	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">danh mục sản phẩm</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="<?php echo e(URL::route('trangchu')); ?>">Home</a> / <span>Sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						<?php $__currentLoopData = $loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e(URL::route('loaisanpham',$loai->id)); ?>"><?php echo e($loai->name); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>Sản phẩm " <?php echo e($tenloaisp->name); ?> "</h4>
						<div class="beta-products-details">
							<p class="pull-left">đã tìm thấy <?php echo e(count($sp_theoloai)); ?> sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<?php $__currentLoopData = $sp_theoloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sptl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="single-item">
									<?php if($sptl->promotion_price != 0): ?>
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									<?php endif; ?>
									<div class="single-item-header">
										<a href="<?php echo e(URL::route('chitietsanpham',$sptl->id)); ?>"><img height="250px" src="source/image/product/<?php echo e($sptl-> image); ?>" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><?php echo e($sptl->name); ?></p>
										<p class="single-item-price">
											<?php if($sptl->promotion_price == 0): ?>

											<span>$<?php echo e($sptl->unit_price); ?></span>
											<?php else: ?>
											<span class="flash-del">$<?php echo e($sptl->unit_price); ?></span>
											<span class="flash-sale">$<?php echo e($sptl->promotion_price); ?></span>
											<?php endif; ?>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="<?php echo e(URL::route('chitietsanpham',$new->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản Phẩm Khác</h4>
						<div class="beta-products-details">
							<p class="pull-left">đã tìm thấy <?php echo e(count($sp_khac)); ?> sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<?php $__currentLoopData = $sp_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-4">
								<div class="single-item">
									<?php if($sp->promotion_price != 0): ?>
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									<?php endif; ?>
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/product/<?php echo e($sp-> image); ?>" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><?php echo e($sp->name); ?></p>
										<p class="single-item-price">
											<?php if($sp->promotion_price == 0): ?>

											<span>$<?php echo e($sp->unit_price); ?></span>
											<?php else: ?>
											<span class="flash-del">$<?php echo e($sp->unit_price); ?></span>
											<span class="flash-sale">$<?php echo e($sp->promotion_price); ?></span>
											<?php endif; ?>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class='row'><?php echo e($sp_khac->links()); ?></div>
						<div class="space40">&nbsp;</div>

					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SE-04-Nhom6.1\resources\views/page/loai_sanpham.blade.php ENDPATH**/ ?>