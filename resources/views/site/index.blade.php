@extends('layouts.app')

@section('content')

  <div class="wrapper-spread clearfix" style="height:100%;">
    <div class="clearfix" style="">
      <div class="grid-6">
        <h1>พบกับประสบการณ์ใหม่</h1>
        <h3>ในการลงอ่าง</h3>
        <p>ที่คุณจะได้ฟาดฟันกับสาวๆในดวงใจหมายของคุณ</p>
      </div>
      <div class="grid-6">
        <product-component></product-component>
      </div>
    </div>
  </div>
@endsection
