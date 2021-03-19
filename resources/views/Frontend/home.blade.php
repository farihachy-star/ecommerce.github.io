@extends ('Frontend.master')




@section('footer')

<footer id="footer" class="bg-light text-dark py-5 mt-5">

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4 class="font-rubik font-size-20"><img src="img/Go Fresh Logo.png" style="height: 180px;" alt="imgg"></h4>
          <p font-size-14 font-raleway text-dark-50>Everyday affordable items delivered to your door
            from our shop.We try to give our customer best services.
            Happy Shopping.
          </p>
        </div>
        <div class="col-lg-4 col-12 mt-5">
          <h4 class="font-rubik font-size-20">Newslatter</h4>
          <form class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-size-20">Extra</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="" class="font-rubik font-size-12 text-dark-50 pb-3">About Us</a>
            <a href="" class="font-rubik font-size-12 text-dark-50 pb-3">Delivery Information</a>
            <a href="" class="font-rubik font-size-12 text-dark-50 pb-3">Privacy Policy</a>
            <a href="" class="font-rubik font-size-12 text-dark-50 pb-3">Contact Us</a>
          </div>
          
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-size-20">Store Information</h4>
          <div class="d-flex flex-column flex-wrap">
            <p class="font-size-12 font-rubik" style="opacity: .5;"><i class="fas fa-map-marker-alt"></i> <br> East Shubidbazar,Sylhet</p>
            <span style="opacity: .5;"><i class="fas fa-phone-alt" ></i><br> +880176675554</span>
            <span style="opacity: .5;"><i class="far fa-envelope"></i><br> sales@gofresh.com.bd</span>
          </div>
        </div>

      </div>
    </div>
    
  </footer>

@endsection