@extends('site.layouts.master')
@section('page_content')
<section class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-5">
				<div class="card card-primary card-outline">
					<div class="card-body box-profile widget-user-2">
						<div class="widget-user-header">
							<div class="widget-user-image">
								<img class="img-circle elevation-1" src="{{ Storage::url('users/'.$user->image) }}" alt="{{ $user->first_name }}">
							</div>
							<h3 class="widget-user-username"> {{ $user->first_name }} {{ $user->last_name }} </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="card">
					<div class="card-header p-2">
						<ul class="nav flex-column nav-pills border-bottom">
							<li class="nav-item"><a class="nav-link active" href="#Profile" data-toggle="tab"> @lang('site.My Account') </a></li>
							<li class="nav-item"><a class="nav-link" href="#Address" data-toggle="tab"> @lang('site.My Address') </a></li>
							<li class="nav-item"><a class="nav-link" href="#Password" data-toggle="tab"> @lang('site.Change Password') </a></li>
						</ul>
						<a href="#" class="btn text-danger btn-block font-weight-light text-left"><b> @lang('site.Delete Account') </b></a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="tab-content">
					<div class="active tab-pane" id="Profile">

						@livewire('site.edit-profile' , ['user' => $user ] )

					</div>
					<!-- /.tab-pane -->

					<div class="tab-pane" id="Address">

						<!-- Address Box -->
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title my-2">Your Address</h3>
							</div>
							<div class="card-body d-flex flex-wrap p-3 my-Addresses">
								<div class="row">

									<div class="col-md-3">
										<div class="card addAddress" data-toggle="modal" data-target="#addAdressPopup">
											<div class="card-body">
												<i class="fa fa-plus"></i>
												<div class="addAddressText">Add new Address</div>
											</div>
										</div>
									</div>


									<!--Add Adress Modal -->
									<div class="modal fade" id="addAdressPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body">
													<form class="form-horizontal">
														<div class="form-group ">
															<label for="inputCountry" class="col-md-12 form-label">Country</label>
															<div class="col-md-12">
																<input type="email" class="form-control" id="inputCountry" placeholder="Country">
															</div>
														</div>
														<div class="form-group row">
															<label for="Address" class="col-md-12 form-label">Address</label>
															<div class="col-md-12">
																<input type="email" class="form-control" id="Address" placeholder="Address">
															</div>
														</div>
														<div class="form-group row">
															<label for="ApartmentNumber" class="col-md-12 form-label">Apartment Number</label>
															<div class="col-md-12">
																<input type="text" class="form-control" id="ApartmentNumber" placeholder="Apartment Number">
															</div>
														</div>
														<div class="form-group row">
															<label for="Region" class="col-md-12 form-label">Region</label>
															<div class="col-md-12">
																<input type="text" class="form-control" id="Region" placeholder="Region">
															</div>
														</div>
														<div class="form-group row">
															<label for="City" class="col-md-12 form-label">City</label>
															<div class="col-md-12">
																<input type="text" class="form-control" id="City" placeholder="City">
															</div>
														</div>
														<div class="form-group row">
															<label for="ZIPNum" class="col-md-12 form-label">ZIP Num</label>
															<div class="col-md-12">
																<input type="text" class="form-control" id="ZIPNum" placeholder="ZIP Num">
															</div>
														</div>
														<div class="form-group mt-2 mb-0">
															<div class="text-center col-md-12">
																<button type="submit" class="btn btn-primary">Add</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<h6 class="card-subtitle mb-2 text-muted">6th Street Name</h6>
												<h6 class="card-subtitle mb-2 text-muted">Cairo</h6>
												<h6 class="card-subtitle mb-2 text-muted">Egypt</h6>
												<h6 class="card-subtitle mb-2 text-muted">Phone Number: +01343434332</h6>
												<button href="#" type="button" class="btn card-link text-primary p-0">Remove</button>
												<button href="#" type="button" class="btn card-link text-primary p-0">Set as defaulte</button>
											</div>
										</div>
									</div>


									<div class="col-md-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<h6 class="card-subtitle mb-2 text-muted">6th Street Name</h6>
												<h6 class="card-subtitle mb-2 text-muted">Cairo</h6>
												<h6 class="card-subtitle mb-2 text-muted">Egypt</h6>
												<h6 class="card-subtitle mb-2 text-muted">Phone Number: +01343434332</h6>
												<button href="#" type="button" class="btn card-link text-primary p-0">Remove</button>
												<button href="#" type="button" class="btn card-link text-primary p-0">Set as defaulte</button>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<h6 class="card-subtitle mb-2 text-muted">6th Street Name</h6>
												<h6 class="card-subtitle mb-2 text-muted">Cairo</h6>
												<h6 class="card-subtitle mb-2 text-muted">Egypt</h6>
												<h6 class="card-subtitle mb-2 text-muted">Phone Number: +01343434332</h6>
												<button href="#" type="button" class="btn card-link text-primary p-0">Remove</button>
												<button href="#" type="button" class="btn card-link text-primary p-0">Set as defaulte</button>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<h6 class="card-subtitle mb-2 text-muted">6th Street Name</h6>
												<h6 class="card-subtitle mb-2 text-muted">Cairo</h6>
												<h6 class="card-subtitle mb-2 text-muted">Egypt</h6>
												<h6 class="card-subtitle mb-2 text-muted">Phone Number: +01343434332</h6>
												<button href="#" type="button" class="btn card-link text-primary p-0">Remove</button>
												<button href="#" type="button" class="btn card-link text-primary p-0">Set as defaulte</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- /.tab-pane -->

					<div class="tab-pane" id="Password">

						@livewire('site.edit-password' , ['user' => $user] )
						
					</div>
					<!-- /.tab-pane -->


				</div>
				<!-- /.tab-content -->


			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
@endsection




@section('styles')
@endsection
@section('scripts')
@endsection