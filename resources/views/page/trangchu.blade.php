@extends('master')
@section('content')

<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer">
			<div class="banner">
				<ul>
					<!-- THE FIRST SLIDE -->
					@foreach($slide as $sl)
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" source="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							</div>
						</div>

					</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>New Products</h4>
						<div class="beta-products-details">
							<p class="pull-left">{{count($new_product)}} styles found</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($new_product as $new)
							<div class="col-sm-3">

								<div class="single-item" style="  margin: 20px">
									@if($new->promotion_price != 0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									@endif
									<div class="single-item-header">
										<a href="product.html"><img height="250px" src="source/image/product/{{$new->image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$new->name}}</p>
										<p class="single-item-price">
											@if($new->promotion_price == 0)
											<!-- <span class="flash-del">${{$new->unit_price}}</span> -->
											<span>${{$new->unit_price}}</span>
											@else
											<span class="flash-del">${{$new->unit_price}}</span>
											<span class="flash-sale">${{$new->promotion_price}}</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Top Products</h4>
						<div class="beta-products-details">
							<p class="pull-left">438 styles found</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>

									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span class="flash-del">$34.55</span>
											<span class="flash-sale">$33.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="space40">&nbsp;</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>

									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span class="flash-del">$34.55</span>
											<span class="flash-sale">$33.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Sample Woman Top</p>
										<p class="single-item-price">
											<span>$34.55</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="beta-products-list">
					<h4>New Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">438 styles found</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>

								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span class="flash-del">$34.55</span>
										<span class="flash-sale">$33.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>

				<div class="beta-products-list">
					<h4>Top Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">438 styles found</p>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>

								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span class="flash-del">$34.55</span>
										<span class="flash-sale">$33.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="space40">&nbsp;</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>

								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span class="flash-del">$34.55</span>
										<span class="flash-sale">$33.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .beta-products-list -->
			</div>
		</div> <!-- end section with sidebar and main content -->


	</div> <!-- .main-content -->
</div> <!-- #content -->
<div id="content" class="space-top-none">
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="beta-products-list">
					<h4>New Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">438 styles found</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>

								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span class="flash-del">$34.55</span>
										<span class="flash-sale">$33.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>

				<div class="beta-products-list">
					<h4>Top Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">438 styles found</p>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>

								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span class="flash-del">$34.55</span>
										<span class="flash-sale">$33.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="space40">&nbsp;</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>

								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/2.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span class="flash-del">$34.55</span>
										<span class="flash-sale">$33.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="source/assets/dest/images/products/3.jpg" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">Sample Woman Top</p>
									<p class="single-item-price">
										<span>$34.55</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .beta-products-list -->
			</div>
		</div> <!-- end section with sidebar and main content -->


	</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection