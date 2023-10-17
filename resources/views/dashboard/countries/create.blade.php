@extends('dashboard.layouts.master')

@section('page_title')
إضافه دوله جديده
@endsection

@section('page_header')
<a href="{{ route('dashboard.countries.index') }}" class="breadcrumb-item"><i class="icon-home7 mr-2"></i> الدول </a>
<span class="breadcrumb-item active"> إضافه دوله جديده </span>
@endsection

@section('page_content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-primary text-white header-elements-sm-inline" >
				<h5 class="card-title"> إضافه دوله جديده </h5>
				<div class="header-elements">
					<div class="d-flex justify-content-between">
						<div class="list-icons ml-3">
							<a class="list-icons-item" data-action="collapse"></a>
							<a class="list-icons-item" data-action="reload"></a>
							<a class="list-icons-item" data-action="remove"></a>
						</div>
					</div>
				</div>
			</div>
			<form action="{{ route('dashboard.countries.store') }}" method='POST' enctype="multipart/form-data" > 
				@csrf
				<div class="card-body">
					<fieldset class="mb-3">
						<legend class="text-uppercase font-size-sm font-weight-bold"> بيانات المحافظه </legend>
						<div class="form-group row">

							<div class="col-md-4">
								<div  class='mb-2' >
									<label class="col-form-label"> علم الدوله 56 * 40 </label>
									<input type="file" class="form-control @error('image') is-invalid @enderror" name="image"  >
									@error('image')
									<p  class='text-danger' >  {{ $message }} </p>
									@enderror
								</div>
							</div>

							<div class="col-md-4">
								<div  class='mb-2' >
									<label class="col-form-label"> الاسم بالعربيه </label>
									<input type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ old('name_ar') }}" >
									@error('name_ar')
									<p  class='text-danger' >  {{ $message }} </p>
									@enderror
								</div>
							</div>
							<div class="col-md-4">
								<div  class='mb-2' >
									<label class="col-form-label"> الاسم بالانجليزيه </label>
									<input type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ old('name_en') }}" >
									@error('name_en')
									<p  class='text-danger' >  {{ $message }} </p>
									@enderror
								</div>
							</div>

							
							<div class="col-md-12">
								<div  class='mb-2' >
									<label class="col-form-label"> تفعيل </label>
									<div class="custom-control custom-switch mb-2">
										<input type="checkbox" class="custom-control-input" name="active" id="sc_ls_c5" checked>
										<label class="custom-control-label" for="sc_ls_c5"> نعم </label>
									</div>
								</div>
							</div>


							



						</div>						
					</fieldset>
				</div>

				<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
					<a href="{{ route('dashboard.branches.index') }}" class="btn btn-outline-primary w-100 w-sm-auto"> @lang('dashboard.cancel') </a>
					<button type="submit" class="btn btn-primary mt-3 mt-sm-0 w-100 w-sm-auto"> @lang('dashboard.add') </button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection