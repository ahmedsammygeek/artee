@extends('dashboard.layouts.master')

@section('page_title')
عرض بيانات اللون
@endsection

@section('page_header')
<a href="{{ route('dashboard.colors.index') }}" class="breadcrumb-item"><i class="icon-equalizer   mr-2"></i> 
الالوان
</a>
<span class="breadcrumb-item active"> عرض بيانات اللون </span>

@endsection
@section('page_content')

<div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-primary text-white header-elements-sm-inline" >
					<h5 class="card-title"> بيانات اللون </h5>
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

				<div class="card-body">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th> @lang('categories.created_at') </th>
						<td> {{ $color->created_at->diffForHumans() }} </td>
							</tr>
							<tr>
								<th> @lang('categories.status') </th>
								<td>
									@switch($color->is_active)
									@case(1)
									<span  class='badge badge-success'> @lang('categories.active') </span>
									@break
									@case(0)
									<span  class='badge badge-danger'> @lang('categories.inactive') </span>
									@break
									@endswitch
								</td>
							</tr>
							

							<tr>
								<th> @lang('categories.name_ar') </th>
								<td> {{ $color->getTranslation('name' , 'ar') }} </td>
							</tr>
							<tr>
								<th> @lang('categories.name_en') </th>
								<td> {{ $color->getTranslation('name' , 'en') }} </td>
							</tr>
							<tr>
								<th> كود اللون </th>
								<td> <span class='badge' style="background-color:{{ $color->code }}"> {{ $color->code }} </span></td>
							</tr>
							<tr>
								<th> @lang('categories.added_by') </th>
								<td> <a href="{{ route('dashboard.sizes.show' ,  $color->user_id ) }}"> {{ optional($color->user)->name }} </a> </td>
							</tr>
	
						</tbody>
					</table>

				</div>



			</div>
		</div>
	</div>
</div>
@endsection


@section('scripts')
@endsection


