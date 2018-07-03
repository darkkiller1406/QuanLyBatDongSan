@section('title','Đăng ký')
@extends('layout.master_ban')
@section('content')
<div class="inside-banner">
  <div class="container"> 
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
         @if(count($errors) > 0)
          <div class="alert alert-danger" style="font-size: 1.2em;text-align: center;margin-top: 20px;">
            @foreach($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
          </div>
          @endif

          @if(session('thongbao'))
          <div class="alert alert-success" style="font-size: 1.2em;text-align: center;margin-top: 20px;">
            {{ session('thongbao') }}
          </div>
          @endif
          @if(session('canhbao'))
          <div class="alert alert-danger" style="font-size: 1.2em;text-align: center;margin-top: 20px;">
            {{ session('canhbao') }}
          </div>
          @endif
          <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
            <form method="post" action="{{route('postDangKy')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" class="form-control" placeholder="Tên đầy đủ" name="form_name">
                 <input type="text" class="form-control" placeholder="Tên đăng nhập" name="name">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="password" class="form-control" placeholder="Nhập lại password" name="passwordAgain">
                <div class="col-sm-3"></div>
                <button type="submit" class="btn btn-detail" name="Submit" style="width: 50%;font-size: 18px">Đăng ký</button>
            </form>  
        </div>
  
</div>
</div>
</div>
@endsection