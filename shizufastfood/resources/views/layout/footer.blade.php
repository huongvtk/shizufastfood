<div id="footer" class="color-div">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4">
			<div class="col-sm-6">
				<div class="widget">
					<h4 class="widget-title">Contact Us</h4>
					<div>
						<ul class="address">
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a>Hoa Khanh Nam ward,<span>Lien Chieu district,</span> <span>Da Nang City.</span></a></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">vtkhuong9396@gmail.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a>0989869031</a></li>
						</ul>
					</div>
				</div>
			  </div>
			</div>
			<div class="col-sm-6">
				<div class="widget">
					<h4 class="widget-title">Menu</h4>
					<div>
						<ul>
							@foreach($menu as $row)
							<li><a href="category/{{$row->id}}"><i class="fa fa-chevron-right"></i>{{$row->name}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
	<div class="container">
		<p>&copy;Shizu Fast Food</p>
	</div> <!-- .container -->
</div> <!-- .copyright -->