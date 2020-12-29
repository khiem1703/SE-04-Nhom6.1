
<?php $__env->startSection('content'); ?>


<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm <?php echo e($sanpham->name); ?> </h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-4">
						<img src="source/image/product/<?php echo e($sanpham->image); ?>" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title">
								<h3><?php echo e($sanpham->name); ?></h3>
							</p>
							<p class="single-item-price">
								<?php if($sanpham->promotion_price == 0): ?>

								<span>$<?php echo e($sanpham->unit_price); ?></span>
								<?php else: ?>
								<span class="flash-del">$<?php echo e($sanpham->unit_price); ?></span>
								<span class="flash-sale">$<?php echo e($sanpham->promotion_price); ?></span>
								<?php endif; ?>
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p><?php echo e($sanpham->description); ?></p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Options:</p>
						<div class="single-item-options">
							<select class="wc-select" name="size">
								<option>kích cỡ</option>
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
							<select class="wc-select" name="color">
								<option>màu sắc</option>
								<option value="Red">Red</option>
								<option value="Green">Green</option>
								<option value="Yellow">Yellow</option>
								<option value="Black">Black</option>
								<option value="White">White</option>
							</select>
							<select class="wc-select" name="color">
								<option>số lượng</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô tả</a></li>
						<li><a href="#tab-reviews">Reviews (0)</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p><?php echo e($sanpham->description); ?></p>
					</div>
					<div class="panel" id="tab-reviews">
						<p>No Reviews</p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản phẩm tương tự</h4>

					<div class="row">
						<?php $__currentLoopData = $sp_tuongtu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="<?php echo e(URL::route('chitietsanpham',$sp->id)); ?>"><img height="250px" src="source/image/product/<?php echo e($sp->image); ?>" alt=""></a>
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
									<a class="add-to-cart pull-left" href="<?php echo e(URL::route('chitietsanpham',$sp->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="<?php echo e(URL::route('chitietsanpham',$sp->id)); ?>">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<div class='row'><?php echo e($sp_tuongtu->links()); ?></div>
				</div> <!-- .beta-products-list -->
			</div>
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Sản phẩm bán chạy (<?php echo e(count($sanpham_khuyenmai)); ?>)</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">

							<?php $__currentLoopData = $sanpham_khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spkms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="media beta-sales-item">
								<a class="pull-left" href="<?php echo e(URL::route('chitietsanpham',$spkms->id)); ?>"><img src="source/image/product/<?php echo e($spkms->image); ?>" alt=""></a>
								<div class="media-body">
									<?php echo e($spkms->name); ?>

									<span class="beta-sales-price">$<?php echo e($spkms->unit_price); ?></span>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					</div>


				</div> <!-- best sellers widget -->
				<div class="widget">
					<h3 class="widget-title">Sản phẩm mới</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<?php $__currentLoopData = $sp_new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spnew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="media beta-sales-item">
								<a class="pull-left" href="<?php echo e(URL::route('chitietsanpham',$spnew->id)); ?>"><img src="source/image/product/<?php echo e($spnew->image); ?>" alt=""></a>
								<div class="media-body">
									<?php echo e($spnew->name); ?>

									<span class="beta-sales-price">$<?php echo e($spnew->unit_price); ?></span>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div> <!-- best sellers widget -->
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SE-04-Nhom6.1\resources\views/page/chitet_sanpham.blade.php ENDPATH**/ ?>