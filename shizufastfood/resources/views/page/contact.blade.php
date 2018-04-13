@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a  href="{{url('/')}}">Trang chủ</a> / <span>Liên hệ</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
	@if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            	{{$err}} <br>
            @endforeach
        </div>
    @endif

	@if(session('thongbao'))
		<div class="alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif

		<div class="space50">&nbsp;</div>
		<div class="row">
			<div class="col-sm-8">
				<h2>Liên hệ</h2>
				<div class="space20">&nbsp;</div>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani m id est laborum.</p>
				<div class="space20">&nbsp;</div>
				<form action="{{route('lienhe')}}" method="post" class="contact-form">	
				<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-block">
						<input name="name" type="text" placeholder="Họ tên(*)">
					</div>
					<div class="form-block">
						<input name="email" type="email" placeholder="Email(*)">
					</div>
					<div class="form-block">
						<input name="subject" type="text" placeholder="Tiêu đề(*)">
					</div>
					<div class="form-block">
						<textarea name="content" placeholder="Nội dung(*)"></textarea>
					</div>
					<div class="form-block">
						<button type="submit" class="beta-btn primary">Gửi<i class="fa fa-chevron-right"></i></button>
						<button type="reset" class="beta-btn primary">Nhập lại<i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection