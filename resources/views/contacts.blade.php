@extends('layouts.layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.810268221806!2d104.96500301410532!3d9.081042390673721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a6b312173b5081%3A0xe3f09082cabaaa24!2zQ-G7rWEgSMOgbmcgVmkgVMOtbmggTmd1eeG7hW4gUXXDom4!5e0!3m2!1svi!2s!4v1617790821926!5m2!1svi!2s" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Mẫu liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p>Vui lòng điền đầy đủ thông tin.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Việt Nam">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Tin nhắn của bạn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						Khóm 4, Phường 8<br>
						Thành Phố Cà Mau<br>
						Tỉnh Cà Mau
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Yêu cầu kinh doanh</h6>
					<p>
						Trên 18 tuổi<br>
						Tốt nghiệp cấp 3.<br>
						<a href="mailto:it@gmail.com">it@gmail.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Việc làm</h6>
					<p>
						Được làm việc với team chăm chỉ nhất <br>
						Tham gia vào nhóm chúng tôi ngay. <br>
						<a href="mailto:it@gmail.com">it@gmail.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection