@extends('layouts.layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Sản phẩm</span>
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
							<img src="assets/dest/images/products/top1.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">Laptop Apple</p>
								<p class="single-item-price">
									<span>25.000.000₫</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>Là sản phẩm được yêu thích nhất hiện nay.</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Tùy chọn:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Kích thước</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<select class="wc-select" name="color">
									<option>Màu</option>
									<option value="Red">Đỏ</option>
									<option value="Green">Lục</option>
									<option value="Yellow">Vàng</option>
									<option value="Black">Đen</option>
									<option value="White">Trắng</option>
								</select>
								<select class="wc-select" name="color">
									<option>Số lượng</option>
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
							<li><a href="#tab-description">Miêu tả</a></li>
							<li><a href="#tab-reviews">Nhận xét (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>Là sản phẩm được yêu thích nhất hiện nay.</p>
							<p>Giá trẻ </p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>Chưa có nhận xét nào</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm liên quan</h4>

						<div class="row">
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets/dest/images/products/top4.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Laptop Dell</p>
										<p class="single-item-price">
											<span>25.000.000₫</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="assets/dest/images/products/top3.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Laptop HP</p>
										<p class="single-item-price">
											<span>10.000.000₫</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="ribbon-wrapper"><div class="ribbon sale">Giảm giá</div></div>

									<div class="single-item-header">
										<a href="#"><img src="assets/dest/images/products/top2.jpg" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">Laptop HP Pro</p>
										<p class="single-item-price">
											<span class="flash-del">25.000.000₫</span>
											<span class="flash-sale">24.000.000₫</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="#">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Bán chạy nhất</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top1.jpg" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top2.jpg" alt=""></a>
									<div class="media-body">
										Laptop HP
										<span class="beta-sales-price">25.000.000₫</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top3.jpg" alt=""></a>
									<div class="media-body">
										Laptop Dell
										<span class="beta-sales-price">5.000.000₫</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top4.jpg" alt=""></a>
									<div class="media-body">
										Laptop Apple
										<span class="beta-sales-price">30.000.000₫</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới nhất</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top5.jpg" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">25.000.000₫</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top6.jpg" alt=""></a>
									<div class="media-body">
										Laptop HP Pro
										<span class="beta-sales-price">52.000.000₫</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top7.jpg" alt=""></a>
									<div class="media-body">
										Laptop Apple Pro
										<span class="beta-sales-price">14.000.000₫</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/top8.jpg" alt=""></a>
									<div class="media-body">
										Laptop HP Pro
										<span class="beta-sales-price">19.000.000₫</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection