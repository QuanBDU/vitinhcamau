@extends('layouts.layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Địa chỉ Email*</label>
							<input type="email" id="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Họ Tên*</label>
							<input type="text" id="your_last_name" required>
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" value="vd: 47đ Trương Phùng Xuân, K4, P8, TP Cà Mau" required>
						</div>


						<div class="form-block">
							<label for="phone">Số điện thoại*</label>
							<input type="text" id="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu*</label>
							<input type="text" id="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại*</label>
							<input type="text" id="phone" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection