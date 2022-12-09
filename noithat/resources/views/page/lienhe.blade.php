	@extends('master')
	@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <!--<span>Contacts</span>-->
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div class="beta-map">

		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.667103672482!2d105.7787094147636!3d21.046001985989005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454cd20be7925%3A0x2789dce0482bdf99!2zMTcwIFBo4bqhbSBWxINuIMSQ4buTbmcsIE1haSBE4buLY2gsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1670373233080!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		</div>
</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Liên hệ qua mẫu</h2>
					<div class="space20">&nbsp;</div>
					<p>Liên hê với chúng tôi để được giáp đáp thắc mắc một cách nhanh nhất.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-group form-block">
							<input class="input" input name="your-name" type="text" placeholder="Tên của bạn (bắt buộc)">
						</div>
						<div class="form-group form-block">
								<input class="input" type="email" name="email" placeholder="vidu@gmail.com" required="required" width="20px;">
							</div>
						<div class="form-group form-block">
							<input class="input" input name="your-subject" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-group form-block">
							<textarea name="your-message" cols="70" rows="5" placeholder="Lời nhắn của bạn"></textarea>
						</div>
						<div class="form-group form-block">
							<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Contact Information</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Address</h6>
					<p>
						170 Phạm Văn Đồng, Hà Nội
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Business Enquiries</h6>
					<p>
						 <br>
						<a href="mailto:eshop@business.com">eshop@business.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Employment</h6>
					<p>
						 <br>
						<a href="mailto:hr@employment.com">hr@employment.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection