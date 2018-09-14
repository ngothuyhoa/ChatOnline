@extends('admin.layout.layout')
@section('content_admin')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h2 class="panel-title">List Product</h2>
								</div>
								<a href=""><span class="badge badge-primary"><i class="fa fa-plus"></i></span></a>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>User Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Gender</th>
												<th colspan="2">custom</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Ngo Thuy Hoa</td>
												<td>ngothuyhoa</td>
												<td>0961931696</td>
												<td>ngothuyhoa@gmail.com</td>
												<td>nu</td>
												<td> 
													<a href="#"><i class="fa fa-pencil" style="font-size: 24px;color: teal"></i></a>
												</td>
												<td>
													<a href="/home"><i class="fa fa-trash" style="font-size: 24px; color: orange"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							
							<!-- END BASIC TABLE -->
						</div>
					
						
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection