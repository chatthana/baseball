@extends('layouts.app')

@section('content')

  <div class="wrapper-spread clearfix" style="height:100%;">
    <div class="row" style="">
      <div class="grid-desktop-7 grid-tablet-12 grid-mobile-12" style="padding:100px 30px;">
        <div class="logo-container">
          <img src="/images/logo-text.png" alt="">
        </div>
        <div class="introduction">
          <h3>จำหน่ายไม้เบสบอลคุณภาพ</h3>
          <h3>ตั้งแต่ปี 2011</h3>
        </div>
      </div>
      <div class="grid-desktop-4 grid-tablet-12 grid-mobile-12">
        <!-- Attach a single product component -->
        <product-component :item="{{ $product->toJson() }}"></product-component>
        <a href="{{URL::to('/showcase')}}" class="button transparent rounded" style="margin:20px 0;">ดูสินค้าทั้งหมด</a>
      </div>
    </div>
  </div>
@endsection
