@extends('layouts.app')

@section('content')

  <div class="wrapper-spread clearfix" style="height:100%;">
    <div class="row" style="">
      <div class="grid-7" style="padding:100px 30px;">
        <div class="logo-container">
          <img src="/images/logo-text.png" alt="">
        </div>
        <h3>จำหน่ายไม้เบสบอลคุณภาพ</h3>
        <h3>ตั้งแต่ปี 2011</h3>
      </div>
      <div class="grid-4">
        <product-component></product-component>
        <a href="#" class="button transparent rounded" style="margin:20px 0;">ดูสินค้าทั้งหมด</a>
      </div>
    </div>
  </div>
@endsection
