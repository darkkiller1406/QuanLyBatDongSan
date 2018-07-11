@section('title','Quản lý thông tin cá nhân')
@extends('layout.master_ban')
@section('content')
<div class="inside-banner">
  <div class="container"> 
    <h2>Quản lý thông tin tài khoản</h2>
  </div>
</div>
<div class="container">
  <div class="properties-listing spacer">
    <div class="row">
      <div class="col-lg-12">
        <table id="dtable" class="table table-responsive">
         <thead>
          <tr>
           <th style="text-align: center;">STT</th>
           <th style="text-align: center;">Giao dịch</th>
           <th style="text-align: center;">Số tiền</th>
           <th style="text-align: center;">Ngày lập</th>
         </tr>
       </thead>
       <tbody>
        <?php $i=0;$tong =0; ?>
        @foreach($lichsugiaodich as $hd)
        <tr>
         <td>{{++$i}}</td>
         <td>{{$hd->GiaoDich}}</td>
         <td>{{number_format($hd->TienGiaoDich)}} VNĐ</td>
         <td><?php $date=date_create($hd->created_at);
         echo date_format($date,"d/m/Y H:i:s") ?></td>
       </tr>
       @endforeach
     </tbody>

   </table>
 </div>

</div>
</div>
</div>
@endsection
@section('script')

@endsection