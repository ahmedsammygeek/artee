@extends('site.layouts.master')

@section('page_content')

<div class="row">
  <div class="col-md-8">

    <!-- Order list Container -->
    <div class="category-container my-orders">

      <div class="alert alert-primary" role="alert">
       @lang('site.No orders yet for you to display')
      </div>


     {{--  <!-- Order list item -->
      <div class="card card-primary">
        <div class="card-header">
          <div>
            <p class="card-title">Order Placed</p>
            <p class="font-weight-normal">20 April 2023</p>
          </div>

          <div>
            <p class="card-title">Total</p>
            <p class="font-weight-normal">900 SAR</p>
          </div>


          <div class="ml-auto">
            <p class="font-weight-normal">Order #231235</p>
          </div>
        </div>
        <div class="card-body">

          <div class="d-flex flex-fill">

            <div class="category-left">
              <div class="category-title">
                <h4 class="card-title">Polo shirt Cotton 100%</h4>
              </div>

              <div class="square-img d-table-cell">
                <img src="img/tisirt-6.png">
              </div>

              <div class="order-info">
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional content
                </p>
              </div>

            </div>

            <div class="buttons-container">
              <a href="#" data-toggle="modal" data-target="#invoice-popup"
              class=" btn btn-primary">Invoice</a>
              <a href="track-order.html" class=" btn btn-primary">Track Order</a>
              <a href="#" class=" btn btn-primary">Buy Again</a>
            </div>

          </div>
        </div>
      </div>


      <!-- Order list item -->
      <div class="card card-primary">
        <div class="card-header">
          <div>
            <p class="card-title">Order Placed</p>
            <p class="font-weight-normal">20 April 2023</p>
          </div>

          <div>
            <p class="card-title">Total</p>
            <p class="font-weight-normal">900 SAR</p>
          </div>


          <div class="ml-auto">
            <p class="font-weight-normal">Order #231235</p>
          </div>
        </div>
        <div class="card-body">

          <div class="d-flex flex-fill">

            <div class="category-left">
              <div class="category-title">
                <h4 class="card-title">Polo shirt Cotton 100%</h4>
              </div>

              <div class="square-img d-table-cell">
                <img src="img/tisirt-6.png">
              </div>

              <div class="order-info">
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional content
                </p>
              </div>

            </div>

            <div class="buttons-container">
              <a href="#" data-toggle="modal" data-target="#invoice-popup"
              class=" btn btn-primary">Invoice</a>
              <a href="track-order.html" class=" btn btn-primary">Track Order</a>
              <a href="#" class=" btn btn-primary">Buy Again</a>
            </div>

          </div>
        </div>
      </div> --}}


    </div>
    <!-- /.card-body -->
  </div>


  <!-- Right side -->
  <div class="col-md-4 p-0 card shadow-none">
    <div class="card-body">

      <!-- Most Bought Products -->
      <div class="section Products-list most-bought">
        <div class="title d-flex justify-content-between col-md-12">
          <h5 class="card-title font-weight-bold">Most Bought Products</h5>
        </div>

        <ul class="users-list clearfix">
          <li>
            <a href="Product-details.html" class="image-container">
              <img src="img/tshirt-1.jpg" alt="User Image">
            </a>
            <a class="users-list-name" href="#">Sarah</a>
            <div class="users-list-date">200 <span>SAR</span></div>
          </li>
          <li>
            <a href="Product-details.html" class="image-container">
              <img src="img/tshirt-1.jpg" alt="User Image">
            </a>
            <a class="users-list-name" href="#">Alexander Pierce</a>
            <div class="users-list-date">200 <span>SAR</span></div>
          </li>
          <li>
            <a href="Product-details.html" class="image-container">
              <img src="img/tshirt-2.jpg" alt="User Image">
            </a>
            <a class="users-list-name" href="#">Norman</a>
            <div class="users-list-date">185 <span>SAR</span></div>
          </li>
          <li>
            <div class="image-container">
              <img src="img/tshirt-3.jpg" alt="User Image">
            </div>
            <a class="users-list-name" href="#">Jane</a>
            <div class="users-list-date">220 <span>SAR</span></div>
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
                <img src="img/design-1.jpg" alt="User Image">
              </div>
            </a>
            <a class="users-list-name" href="#" title="Alexander Pierce Alexander">Alexander Pierce Alexander
            </a>
          </li>
          <li>
            <a href="#">
              <div class="image-container">
                <img src="img/design-2.png" alt="User Image">
              </div>
            </a>
            <a class="users-list-name" href="#">Norman</a>
          </li>
          <li>
            <a href="#">
              <div class="image-container">
                <img src="img/design-1.jpg" alt="User Image">
              </div>
            </a>
            <a class="users-list-name" href="#">Jane</a>
          </li>
        </ul>

      </div>

      <!-------------------------------------  --------------------------->
      <div class="section category-container latest-order mt-4">

        <div class="title d-flex justify-content-between col-md-12">
          <h5 class="card-title font-weight-bold">Most bought Designes</h5>
        </div>

        <!-- Wish list item -->
        <div class="card">
          <div class="card-body">
            <div class="square-img">
              <img src="img/tisirt-6.png">
            </div>
            <div class="d-inline-flex flex-column flex-fill">
              <div class="category-bottom h-100">
                <div>
                  <p>With supporting text below</p>
                  <p>Polo shirt Cotton 100%</p>
                  <p>400 SAR</p>
                </div>
                <div class="buttons-container">
                  <a href="#" class=" btn btn-primary bg-primary-gridant">Buy Again</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Wish list item -->
        <div class="card">
          <div class="card-body">
            <div class="square-img">
              <img src="img/tisirt-6.png">
            </div>
            <div class="d-inline-flex flex-column flex-fill">
              <div class="category-bottom h-100">
                <div>
                  <p>With supporting text below</p>
                  <p>Polo shirt Cotton 100%</p>
                  <p>400 SAR</p>
                </div>
                <div class="buttons-container">
                  <a href="#" class=" btn btn-primary bg-primary-gridant">Buy Again</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>



  </div>

</div>

@endsection


