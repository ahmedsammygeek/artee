@php
$lang = LaravelLocalization::getCurrentLocale();
if ($lang == 'ar') {
  $dir = 'rtl';
} else {
  $dir = 'ltr';
}
@endphp


@extends('site.layouts.master')


@section('page_content')

<!-- Main content -->
<section class="content">
  <div class="card-body">

    <div class="row">


      <!-- Wishlist Container container -->
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title my-1"> @lang('site.Your Wishlist') </h4>
          </div>
          <div class="card-body category-container">

            @livewire('site.wishlist')
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>


      <!-- Right side -->
      <div class="col-md-4 p-0 card shadow-none">
        <div class="card-body">

          <!-- Most Bought Products -->
          <div class="section Products-list most-bought">
            <div class="title d-flex justify-content-between col-md-12">
              <h5 class="card-title font-weight-bold"> @lang('site.Best Selling Products') </h5>
            </div>

            <ul class="users-list clearfix">
              <li>
                <a href="" class="image-container">
                  <img src="{{ asset('site_assets/'.$dir.'/img/tshirt-1.jpg') }}" alt="User Image">
                </a>
                <a class="users-list-name" href="#">Sarah</a>
                <div class="users-list-date">200 <span> @lang('site.SAR') </span></div>
              </li>
              <li>
                <a href="" class="image-container">
                  <img src="{{ asset('site_assets/'.$dir.'/img/tshirt-1.jpg') }}" alt="User Image">
                </a>
                <a class="users-list-name" href="#">Alexander Pierce</a>
                <div class="users-list-date">200 <span> @lang('site.SAR') </span></div>
              </li>
              <li>
                <a href="" class="image-container">
                  <img src="{{ asset('site_assets/'.$dir.'/img/tshirt-2.jpg') }}" alt="User Image">
                </a>
                <a class="users-list-name" href="#">Norman</a>
                <div class="users-list-date">185 <span> @lang('site.SAR') </span></div>
              </li>
              <li>
                <div class="image-container">
                  <img src="{{ asset('site_assets/'.$dir.'/img/tshirt-3.jpg') }}" alt="User Image">
                </div>
                <a class="users-list-name" href="#">Jane</a>
                <div class="users-list-date">220 <span> @lang('site.SAR') </span></div>
              </li>
            </ul>
          </div>

          <!---------- Used Design ------------>
          <div class="section used-design most-bought-designes mt-4">
            <div class="title d-flex justify-content-between col-md-12">
              <h5 class="card-title font-weight-bold">Most bought Designes</h5>
            </div>

            <ul class="users-list clearfix">
              <li>
                <a href="#">
                  <div class="image-container">
                    <img src="{{ asset('site_assets/'.$dir.'/img/design-1.jpg') }}" alt="User Image">
                  </div>
                </a>
                <a class="users-list-name" href="#" title="Alexander Pierce Alexander">Alexander Pierce Alexander </a>
              </li>
              <li>
                <a href="#">
                  <div class="image-container">
                    <img src="{{ asset('site_assets/'.$dir.'/img/design-2.png') }}" alt="User Image">
                  </div>
                </a>
                <a class="users-list-name" href="#">Norman</a>
              </li>
              <li>
                <a href="#">
                  <div class="image-container">
                    <img src="{{ asset('site_assets/'.$dir.'/img/design-1.jpg') }}" alt="User Image">
                  </div>
                </a>
                <a class="users-list-name" href="#">Jane</a>
              </li>                  
            </ul>

          </div>

          <!-------------------------------------  --------------------------->
          <div class="section category-container latest-order mt-4">

            <div class="title d-flex justify-content-between col-md-12">
              <h5 class="card-title font-weight-bold"> @lang('site.Most bought Designes') </h5>
            </div>

            <!-- Wish list item -->
            <div class="card">
              <div class="card-body">
                <div class="square-img">
                  <img src="{{ asset('site_assets/'.$dir.'/img/tisirt-6.png') }}">
                </div>
                <div class="d-inline-flex flex-column flex-fill">
                  <div class="category-bottom h-100">
                    <div>
                      <p>With supporting text below</p>
                      <p>Polo shirt Cotton 100%</p>
                      <p>400 SAR</p>
                    </div>
                    <div class="buttons-container">
                      <a href="#" class=" btn btn-primary">Buy Again</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wish list item -->
            <div class="card">
              <div class="card-body">
                <div class="square-img">
                  <img src="{{ asset('site_assets/'.$dir.'/img/tisirt-6.png') }}">
                </div>
                <div class="d-inline-flex flex-column flex-fill">
                  <div class="category-bottom h-100">
                    <div>
                      <p>With supporting text below</p>
                      <p>Polo shirt Cotton 100%</p>
                      <p>400 SAR</p>
                    </div>
                    <div class="buttons-container">
                      <a href="#" class=" btn btn-primary">Buy Again</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>



      </div>

    </div>

  </div>

</section>
<!-- /.content -->

@endsection