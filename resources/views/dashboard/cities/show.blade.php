@extends('dashboard.layouts.master')

@section('page_title')
بيانات المدينه
@endsection

@section('page_header')
<a href="{{ route('dashboard.cities.index') }}" class="breadcrumb-item"><i class="icon-home7 mr-2"></i> المدن </a>
<span class="breadcrumb-item active"> بيانات المدينه </span>

@endsection
@section('page_content')

<div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-primary text-white header-elements-sm-inline" >
					<h5 class="card-title"> تفاصيل المدينه </h5>
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
								<th> تاريخ الاضافه </th>
								<td> {{ $city->created_at->diffForHumans() }} </td>
							</tr>

							<tr>
								<th> تم الاضافه بواسطه </th>
								<td> {{ $city->user?->name }} </td>
							</tr>

							<tr>
								<th> الاسم بالعربيه </th>
								<td> {{ $city->getTranslation('name' , 'ar') }} </td>
							</tr>
							<tr>
								<th> الاسم بالانجليزيه </th>
								<td> {{ $city->getTranslation('name' , 'en') }} </td>
							</tr>
							<tr>
								<th> المحافظه </th>
								<td> {{ $city->governorate?->name }} </td>
							</tr>

							<tr>
								<th> سعر الشحن </th>
								<td> 
									@if ($city->shipping_cost)
									{{ $city->shipping_cost }} جنيه
									@else
									{{ $city->governorate?->shipping_cost }} جنيه
									@endif
								</td>
							</tr>


							<tr>
								<th> الحاله </th>
								<td> 
									@switch($city->active)
									@case(0)
									<span class='badge badge-danger' > غير فعال </span>
									@break
									@case(1)
									<span class='badge badge-success' > فعال </span>
									@break
									@endswitch
								</td>
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


