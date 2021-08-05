@extends('layouts.frontLayout.front_design')

@section('content')

<section class="pt-10">
    <div class="container">
      <div class="row">
                <div class="col-12 col-md-6">
          <div class="card card-lg">
            <div class="card-circle card-circle-lg card-circle-right">
                            <span class="font-size-h6 font-weight-bold">erp</span>
            </div>
            <img class="card-img-top" src="{{asset('/images/feature.png')}}" alt=""/>
            <div class="card-body position-relative mx-6 mx-lg-11 mt-n11 bg-white text-center">
              <h4 class="mb-0">eManager</h4>
              <a class="btn btn-link stretched-link px-0 text-reset" href="https://e-manager.org">
                check demo <i class="fe fe-arrow-right ml-2"></i>
              </a>
            </div>
          </div>
        </div>
                <div class="col-12 col-md-6">
          <div class="card card-lg">
            <div class="card-circle card-circle-lg card-circle-right">
                            <span class="font-size-h6 font-weight-bold">crm</span>
            </div>
            <img class="card-img-top" src="https://www.flexibleit.net/storage/products/medium/728273.jpg" alt="...">
            <div class="card-body position-relative mx-6 mx-lg-11 mt-n11 bg-white text-center">
              <h4 class="mb-0">Kazz</h4>
              <a class="btn btn-link stretched-link px-0 text-reset" href="https://kaaz.flexibleit.net">
              check now for Free
 <i class="fe fe-arrow-right ml-2"></i>
              </a>
            </div>
          </div>
        </div>
                
      </div>
    </div>
  </section>
    
@endsection
