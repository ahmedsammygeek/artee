@extends('site.layouts.master')

@section('page_content')
  <div class="content-wrapper pt-3">
    <!-- Main content -->
    <section class="content">
      
      

      <!-- Default box -->
      <div class="card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="row">
                <div class="col-3 product-image-thumbs flex-column">
                   <div class="product-image-thumb "><img src="{{ Storage::url('products/'.$product->front_image) }}" alt="Product Image"></div>
                  @foreach ($product->images as $product_image)
                    <div class="product-image-thumb "><img src="{{ Storage::url('products/'.$product_image->image) }}" alt="Product Image"></div>
                  @endforeach
                </div>

                <div class="col-9 product-image-container">
                  <div class="flip-shirt" data-back="{{ Storage::url('products/'.$product->back_image) }}" data-front="{{ Storage::url('products/'.$product->back_image) }}"><i class="fa fa-rotate-right"></i></div>
                  <img src="{{ Storage::url('products/'.$product->front_image) }}" class="product-image" alt="Product Image">
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6  pl-3">
              @livewire('site.add-product-to-wishlist' , ['product' => $product ] )
              <h3 class="mb-3"> {{ $product->name }} </h3>
              <div class="starrating risingstar d-inline-flex flex-row-reverse">
                <input type="radio" id="star5" name="rating" value="5" /><label class="fa fa-star" for="star5" title="5 star"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class="fa fa-star" for="star4" title="4 star"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class="fa fa-star" for="star3" title="3 star"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class="fa fa-star" for="star2" title="2 star"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class="fa fa-star" for="star1" title="1 star"></label>
              </div>
              <span class="px-2">(2 Review)</span>
            
              <p class="product-page-info">
                {!! $product->description !!}
              </p>

              <div class="ProductPrice mb-3">
                <span class="price mr-3"> 400 @lang('site.SAR') </span>
                <div class="diamondPriceContainer bg-primary-gridant d-inline-block" style="cursor:default">
                  <i class="far fa-gem mr-1"></i>
                  400 Diamond
                </div>
              </div>
              <!-- <hr> -->

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn text-center p-2 active">
                  <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                  <i class="fas fa-circle fa-1x" style="color: gray;"></i>
                </label>
                <label class="btn text-center p-2">
                  <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                  <i class="fas fa-circle fa-1x" style="color: blue;"></i>
                </label>
                <label class="btn text-center p-2">
                  <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                  <i class="fas fa-circle fa-1x" style="color: Purple;"></i>
                </label>
                <label class="btn text-center p-2">
                  <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                  <i class="fas fa-circle fa-1x" style="color: red;"></i>
                </label>
                <label class="btn text-center p-2">
                  <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                  <i class="fas fa-circle fa-1x" style="color: #000;"></i>
                </label>
                <label class="btn text-center p-2">
                  <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                  <i class="fas fa-circle fa-1x" style="color: darkred;"></i>
                </label>
              </div>

              <div class="select">
                <select> 
                  <option>Select Size</option>
                  <option>Small</option>
                  <option>Large</option>
                  <option>X-Large</option>
                  <option>2X-Large</option>
                </select>
              </div>

              <a href="custom-designs.html" class="btn btn-primary p-3 ml-3 bg-primary-gridant">
                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                custom-design
              </a>

            </div>
          </div>
          
          
          <!-------------------------- Products List --------------------------->
          <div class="mt-4">
              <div class="section relatedProducts Products-list">
                <div class="title d-flex justify-content-between">
                  <h3 class="mb-2">Related Products</h5>
                </div>                

                
                <ul class="users-list clearfix">

                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/front-1.JPG">

                        <div class="card-front"><img src="img/front-1.JPG" /></div>
                        <div class="card-back"><img src="img/back-1.JPG" /></div>
                      </a>

                      <ul class="color-list">
                        <li class="color-item" style="background:darkred" data-image="img/color-1.jpg"></li>
                        <li class="color-item" style="background:darkblue" data-image="img/color-3.jpg"></li>
                        <li class="color-item" style="background:#fcdb86" data-image="img/color-2.jpg"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M5665_560_5.JPG">

                        <div class="card-front"><img src="img/M5665_560_5.JPG" /></div>
                        <div class="card-back"><img src="img/M5665_560_6.JPG" /></div>
                      </a>

                      <ul class="color-list">
                        <li class="color-item" style="background:white" data-image="img/M5665_560_5.JPG"></li>
                        <li class="color-item" style="background:darkgreen" data-image="img/M5665_Q55_5.JPG"></li>
                        <li class="color-item" style="background:pink" data-image="img/M5632_J10_1.JPG"></li>
                        <li class="color-item" style="background:darkblue" data-image="img/M5632_R31_6.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M5632_608_5.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M4650_R60_5.JPG">

                        <div class="card-front"><img src="img/M4650_R60_5.JPG" /></div>
                        <div class="card-back"><img src="img/M4650_R60_6.JPG" /></div>
                      </a>

                      <ul class="color-list">
                        <li class="color-item" style="background:brown" data-image="img/M4650_R60_5.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M4650_102_5.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M5620_100_5.JPG">

                        <div class="card-front"><img src="img/M5620_100_5.JPG" /></div>
                        <div class="card-back"><img src="img/M5620_100_6.JPG" /></div>
                      </a>

                      <ul class="color-list">
                        <li class="color-item" style="background:grey" data-image="img/M5620_100_5.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M5620_102_6.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M4622_Q22_7.JPG">

                        <div class="card-front"><img src="img/M4622_Q22_7.JPG" /></div>
                        <div class="card-back"><img src="img/M4622_Q22_6.JPG" /></div>
                      </a>

                      <ul class="color-list">
                        <li class="color-item" style="background:orangered" data-image="img/M4622_Q22_7.JPG"></li>
                        <li class="color-item" style="background:white" data-image="img/M4622_129_1.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M4622_102_1.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>

                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/front.png">

                        <div class="card-front"><img src="img/front.png" /></div>
                        <div class="card-back"><img src="img/back.png" /></div>
                      </a>

                      <ul class="color-list">
                        <li class="color-item" style="background:darkred" data-image="img/tshirt-2.jpg"></li>
                        <li class="color-item" style="background:darkblue" data-image="img/tshirt-3.jpg"></li>
                        <li class="color-item" style="background:darkmagenta" data-image="img/tshirt-4.jpg"></li>
                        <li class="color-item" style="background:darkgreen" data-image="img/tshirt-5.jpg"></li>
                        <li class="color-item" style="background:black" data-image="img/tshirt-1.jpg"></li>
                        <li class="color-item" style="background:gray" data-image="img/tshirt-2.jpg"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>

                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/front-1.JPG">
  
                        <div class="card-front"><img src="img/front-1.JPG" /></div>
                        <div class="card-back"><img src="img/back-1.JPG" /></div>
                      </a>
  
                      <ul class="color-list">
                        <li class="color-item" style="background:darkred" data-image="img/color-1.jpg"></li>
                        <li class="color-item" style="background:darkblue" data-image="img/color-3.jpg"></li>
                        <li class="color-item" style="background:#fcdb86" data-image="img/color-2.jpg"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M5665_560_5.JPG">
  
                        <div class="card-front"><img src="img/M5665_560_5.JPG" /></div>
                        <div class="card-back"><img src="img/M5665_560_6.JPG" /></div>
                      </a>
  
                      <ul class="color-list">
                        <li class="color-item" style="background:white" data-image="img/M5665_560_5.JPG"></li>
                        <li class="color-item" style="background:darkgreen" data-image="img/M5665_Q55_5.JPG"></li>
                        <li class="color-item" style="background:pink" data-image="img/M5632_J10_1.JPG"></li>
                        <li class="color-item" style="background:darkblue" data-image="img/M5632_R31_6.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M5632_608_5.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M4650_R60_5.JPG">
  
                        <div class="card-front"><img src="img/M4650_R60_5.JPG" /></div>
                        <div class="card-back"><img src="img/M4650_R60_6.JPG" /></div>
                      </a>
  
                      <ul class="color-list">
                        <li class="color-item" style="background:brown" data-image="img/M4650_R60_5.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M4650_102_5.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M5620_100_5.JPG">
  
                        <div class="card-front"><img src="img/M5620_100_5.JPG" /></div>
                        <div class="card-back"><img src="img/M5620_100_6.JPG" /></div>
                      </a>
  
                      <ul class="color-list">
                        <li class="color-item" style="background:grey" data-image="img/M5620_100_5.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M5620_102_6.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>
                  <li>
                    <div class="product-container">
                      <a href="Product-details.html" class="image-container" data-image="img/M4622_Q22_7.JPG">
  
                        <div class="card-front"><img src="img/M4622_Q22_7.JPG" /></div>
                        <div class="card-back"><img src="img/M4622_Q22_6.JPG" /></div>
                      </a>
  
                      <ul class="color-list">
                        <li class="color-item" style="background:orangered" data-image="img/M4622_Q22_7.JPG"></li>
                        <li class="color-item" style="background:white" data-image="img/M4622_129_1.JPG"></li>
                        <li class="color-item" style="background:black" data-image="img/M4622_102_1.JPG"></li>
                      </ul>
                    </div>
                    <a class="users-list-name" href="Product-details.html">T-shirt</a>
                    <div class="users-list-date">200 <span>SAR</span></div>
                  </li>

                  

                </ul>

              </div>

          </div>
        <!-- /.col-md-12 -->


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('scripts')
<script type="text/javascript">
  $(function() {
    $(".center").slick({
      dots: true,
      infinite: true,
      centerMode: true,
      slidesToShow: 5,
      slidesToScroll: 3
    });
  });
</script>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ Storage::url('site_assets/css/slick-theme.css') }}">
@endsection