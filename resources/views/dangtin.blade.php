@section('title','Đăng ký')
@extends('layout.master_ban')
@section('content')
<div class="inside-banner">
  <div class="container"> 
    <h2>Đăng tin</h2>
</div>
</div>
<!-- banner -->

<meta name="csrf-token" content="{{ csrf_token() }}">
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
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <?php if(isset($kq)) { 
            $Phuong = $kq->Phuong;
            foreach ($quan as $q)
            {
              if ($q->id == $kq->phuong->ThuocQuan){
                $Quan = $q->id;
                $tam = $q->ThuocThanhPho;
              }
            }
            foreach ($thanhpho as $tp)
            {
              if($tp->id == $tam){
                $ThanhPho =  $tp->id;
              }
            }
                
          ?>
          <div class="col-lg-12 col-sm-12 col-xs-12 ">
            <input type="hidden" name="idnguoitao" id="nguoidang" value="{{ Auth::user()->id }}">
              <div class="panel panel-default">
                  <div class="panel-heading" style="font-size: 20px;font-weight: bold;">THÔNG TIN CƠ BẢN</div>
                  <input type="hidden" name="idtin" value="{{$kq->id}}" id="idtin" required>
                  <div class="panel-body">
                     <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Tiêu đề</label>
                   <input type="text" name="tieude" class="lease-input form-control" value="{{$kq->TieuDe}}" id="tieude" required>
                   <div class="class="col-lg-2"></div>
                   <div id="kttieude" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Loại cho thuê</label>
                   <select class="form-control lease-select" name="loaichothue" id="loaichothue">
                  @foreach ($loaichothue as $l)
                  <?php if($l->id == $kq->LoaiChoThue) { ?>
                  <option value="{{$l->id}}" selected>{{$l->LoaiChoThue}}</option>
                  <?php }else { ?>
                  <option value="{{$l->id}}">{{$l->LoaiChoThue}}</option>
                  <?php } ?>
                  @endforeach
                </select>
                </div>
                <div class="col-lg-6">
                  <label class="col-lg-4 lease-label">Thành phố</label>
                  <select class="form-control lease-select" name="tp" id="tp">
                  <option value="0">Chọn Thành phố</option>
                  @foreach ($thanhpho as $tp)
                  <?php if($tp->id == $ThanhPho) { ?>
                  <option value="{{$tp->id}}" selected>{{$tp->TenThanhPho}}</option>
                  <?php }else { ?>
                  <option value="{{$tp->id}}">{{$tp->TenThanhPho}}</option>
                  <?php } ?>
                  @endforeach 
                  </select>
                  <div id="kttp" class="sub"></div>
                </div>
                <div class="col-lg-6">
                  <label class="col-lg-4 lease-label">Quận/Huyện</label>
                <select class="form-control lease-select" name="quan" id="quan">
                   @foreach ($quan as $q)
                  <?php if($q->id == $Quan) { ?>
                  <option value="{{$q->id}}">{{$q->TenQuan}}</option>
                  <?php } ?>
                  @endforeach 
                </select>
                <div id="ktquan" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Phường</label>
                   <select class="form-control lease-select" name="phuong" id="phuong">
                  @foreach ($phuong as $p)
                  <?php if($p->id == $Phuong) { ?>
                  <option value="{{$p->id}}">{{$p->TenPhuong}}</option>
                  <?php } ?>
                  @endforeach 
                </select>
                <div id="ktphuong" class="sub"></div>
                </div>
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Địa chỉ</label>
                   <input type="text" name="tieude" class="lease-input form-control" value="{{$kq->DiaChi}}" id="diachi" required>
                   <div class="class="col-lg-2"></div>
                   <div id="ktdiachi" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Diện tích</label>
                   <input type="number" min="0" class="form-control lease-select" value="{{$kq->DienTich}}" name="dientich" id="dientich">
                   <div id="ktdt" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Giá tiền</label>
                   <input type="number" min="0" class="lease-select form-control" value="{{$kq->Gia}}" name="gia" id="gia">
                   <div id="ktgia" class="sub"></div>
                </div>
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Hình ảnh</label>
                   <input type="file" id='file' class="lease-input form-control" name="image[]" accept="image/*" multiple>
                </div>
                
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable" >Mô tả</label>
                   <textarea class="lease-input form-control" name="mota" id="mota">{{$kq->MoTa}}</textarea>
                </div>
              </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;font-weight: bold;">LIÊN HỆ</div>
                <div class="panel-body">
                  <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Tên liên hệ</label>
                   <input type="text" class="lease-input form-control" value="{{$kq->TenLienHe}}" name="lienhe" id="tenlienhe" >
                   <div class="class="col-lg-2"></div>
                   <div id="ktlienhe" class="sub"></div>
                 </div>
                 <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Địa chỉ liên lạc</label>
                   <input type="text" class="lease-input form-control" value="{{$kq->DiaChiLienLac}}" name="diachill" id="diachill" >
                   <div class="class="col-lg-2"></div>
                   <div id="ktdiachill" class="sub"></div>
                 </div>
                 <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Điện thoại</label>
                   <input type="text" class="lease-input form-control" value="{{$kq->DienThoaiLienLac}}" name="dtdd" id="dienthoai">
                   <div class="class="col-lg-2"></div>
                   <div id="ktdtdd" class="sub"></div>
                </div>
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Email</label>
                   <input type="email" class="lease-input form-control" value="{{$kq->Email}}" name="email" id="email">
                   <div class="class="col-lg-2"></div>
                   <div id="ktemail" class="sub"></div>
                 </div>
               </div>
             </div>
             <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;font-weight: bold;">LOẠI TIN</div>
                <div class="panel-body">
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                   <label class=" lease-label">Loại tin</label>
                   <select class="form-control " style="height: 50px;" name="loaitin" id="loaitin">
                    <option value="0">Loại tin</option>
                    @foreach ($loaitin as $l)
                    <?php if($kq->LoaiTin == $l->id){ $gia = $l->Gia; $songaydang = ($kq->TongTien)/$gia ?>
                    <option value="{{$l->id}};{{$l->Gia}}" selected>{{$l->LoaiTin}}</option>
                  <?php }else{ ?>
                  <option value="{{$l->id}};{{$l->Gia}}">{{$l->LoaiTin}}</option>
                  <?php } ?>
                    @endforeach
                  </select>
                  <div id="ktloaitin" class="sub"></div>
                </div>
                 <div class="col-lg-4">
                   <label class="lease-label">Ngày bắt đầu</label>
                   <input type="date" class=" form-control" name="ngaybatdau" id="ngaybatdau" value="<?php echo date('Y-m-d',strtotime($kq->NgayBatDau)) ?>">
                 </div>
                   <div class="col-lg-4">
                   <label class="lease-label">Ngày kết thúc</label>
                   <input type="date" class=" form-control" name="ngayketthuc" id="ngayketthuc" value="<?php echo date('Y-m-d',strtotime($kq->NgayKetThuc)) ?>">
                   <div id="ktngayketthuc" class="sub"></div>
                 </div>
                  </div>
                 <div class="col-lg-12">
                   <label class="col-lg-4 lease-label" id="dongia">Đơn giá: {{$gia}} VNĐ</label>
                   <label class="col-lg-4 lease-label" id="songaydang">Số ngày đăng: {{$songaydang}}</label>
                   <label class="col-lg-4 lease-label" id="tongtien">Tổng tiền: {{$kq->TongTien}}</label>
                 </div>
                 </div>
             </div>
                <div class="col-lg-12">
                   <div class="col-lg-5"></div>
                   <button class="btn btn-detail" name="Submit" onClick="SuaTin()" style="width: 20%;font-size: 18px">Đăng ký</button>
                </div>
        </div>
          <?php  } else { ?>
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="col-lg-12 col-sm-12 col-xs-12 ">
            <input type="hidden" name="idnguoitao" id="nguoidang" value="{{ Auth::user()->id }}">
              <div class="panel panel-default">
                  <div class="panel-heading" style="font-size: 20px;font-weight: bold;">THÔNG TIN CƠ BẢN</div>
                  <div class="panel-body">
                     <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Tiêu đề</label>
                   <input type="text" name="tieude" class="lease-input form-control" placeholder="Tên đầy đủ" id="tieude" required>
                   <div class="class="col-lg-2"></div>
                   <div id="kttieude" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Loại cho thuê</label>
                   <select class="form-control lease-select" name="loaichothue" id="loaichothue">
                  @foreach ($loaichothue as $l)
                  <option value="{{$l->id}}">{{$l->LoaiChoThue}}</option>
                  @endforeach
                </select>
                </div>
                <div class="col-lg-6">
                  <label class="col-lg-4 lease-label">Thành phố</label>
                  <select class="form-control lease-select" name="tp" id="tp">
                  <option value="0">Chọn Thành phố</option>
                  @foreach ($thanhpho as $tp)
                  <option value="{{$tp->id}}">{{$tp->TenThanhPho}}</option>
                  @endforeach 
                  </select>
                  <div id="kttp" class="sub"></div>
                </div>
                <div class="col-lg-6">
                  <label class="col-lg-4 lease-label">Quận/Huyện</label>
                <select class="form-control lease-select" name="quan" id="quan">
                  <option value="0">Chọn Quận/Huyện</option>
                </select>
                <div id="ktquan" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Phường</label>
                   <select class="form-control lease-select" name="phuong" id="phuong">
                  <option value="0">Chọn Phường</option>
                </select>
                <div id="ktphuong" class="sub"></div>
                </div>
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Địa chỉ</label>
                   <input type="text" name="tieude" class="lease-input form-control" placeholder="Địa chỉ" id="diachi" required>
                   <div class="class="col-lg-2"></div>
                   <div id="ktdiachi" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Diện tích</label>
                   <input type="number" min="0" class="form-control lease-select" placeholder="Diện tích (m2)" name="dientich" id="dientich">
                   <div id="ktdt" class="sub"></div>
                </div>
                <div class="col-lg-6">
                   <label class="col-lg-4 lease-label">Giá tiền</label>
                   <input type="number" min="0" class="lease-select form-control" placeholder="Giá tiền (triệu/tháng)" name="gia" id="gia">
                   <div id="ktgia" class="sub"></div>
                </div>
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Hình ảnh</label>
                   <input type="file" id='file' class="lease-input form-control" name="image[]" accept="image/*" multiple>
                </div>
                
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable" >Mô tả</label>
                   <textarea class="lease-input form-control" name="mota" id="mota"></textarea>
                </div>
              </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;font-weight: bold;">LIÊN HỆ</div>
                <div class="panel-body">
                  <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Tên liên hệ</label>
                   <input type="text" class="lease-input form-control" placeholder="Liên hệ" name="lienhe" id="tenlienhe" >
                   <div class="class="col-lg-2"></div>
                   <div id="ktlienhe" class="sub"></div>
                 </div>
                 <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Địa chỉ liên lạc</label>
                   <input type="text" class="lease-input form-control" placeholder="Địa chỉ" name="diachill" id="diachill" >
                   <div class="class="col-lg-2"></div>
                   <div id="ktdiachill" class="sub"></div>
                 </div>
                 <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Điện thoại</label>
                   <input type="text" class="lease-input form-control" placeholder="Điện thoại di động" name="dtdd" id="dienthoai">
                   <div class="class="col-lg-2"></div>
                   <div id="ktdtdd" class="sub"></div>
                </div>
                <div class="col-lg-12">
                   <label class="col-lg-2 lease-label margin-lable">Email</label>
                   <input type="email" class="lease-input form-control" placeholder="Email" name="email" id="email">
                   <div class="class="col-lg-2"></div>
                   <div id="ktemail" class="sub"></div>
                 </div>
               </div>
             </div>
             <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;font-weight: bold;">LOẠI TIN</div>
                <div class="panel-body">
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                   <label class=" lease-label">Loại tin</label>
                   <select class="form-control " style="height: 50px;" name="loaitin" id="loaitin">
                    <option value="0">Loại tin</option>
                    @foreach ($loaitin as $l)
                    <option value="{{$l->id}};{{$l->Gia}}">{{$l->LoaiTin}}</option>
                    @endforeach
                  </select>
                  <div id="ktloaitin" class="sub"></div>
                </div>
                 <div class="col-lg-4">
                   <label class="lease-label">Ngày bắt đầu</label>
                   <input type="date" class=" form-control" name="ngaybatdau" id="ngaybatdau">
                 </div>
                   <div class="col-lg-4">
                   <label class="lease-label">Ngày kết thúc</label>
                   <input type="date" class=" form-control" name="ngayketthuc" id="ngayketthuc">
                   <div id="ktngayketthuc" class="sub"></div>
                 </div>
                  </div>
                 <div class="col-lg-12">
                   <label class="col-lg-4 lease-label" id="dongia">Đơn giá</label>
                   <label class="col-lg-4 lease-label" id="songaydang">Số ngày đăng</label>
                   <label class="col-lg-4 lease-label" id="tongtien">Tổng tiền</label>
                 </div>
                 </div>
             </div>
                <div class="col-lg-12">
                   <div class="col-lg-5"></div>
                   <button class="btn btn-detail" name="Submit" onClick="DangTin()" style="width: 20%;font-size: 18px">Đăng ký</button>
                </div>
        </div>
        <?php  } ?>
          <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</div>
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
         $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });
          function DangTin()
          {
            var data = new FormData();
            var check = 0;
            var dem = 0;
            jQuery.each(jQuery('#file')[0].files, function(i, file) {
              data.append('file'+i, file);
              dem++;
            });
            data.append('dem', dem);
            if($('#tieude').val() == '')
            {
              document.getElementById("tieude").style.marginBottom = "0";
              $('#kttieude').html('*Vui lòng nhập tiêu đề');
              check++;
            }
            if($('#dientich').val() == '')
            {
              document.getElementById("dientich").style.marginBottom = "0";
              $('#ktdt').html('*Vui lòng nhập diện tích');
              check++;
            }
            if($('#gia').val() == '')
            {
              document.getElementById("gia").style.marginBottom = "0";
              $('#ktgia').html('*Vui lòng nhập giá cho thuê');
              check++;
            }
            if($('#tenlienhe').val() == '')
            {
              document.getElementById("tenlienhe").style.marginBottom = "0";
              $('#ktlienhe').html('*Vui lòng nhập tên liên hệ');
              check++;
            }
            if($('#diachi').val() == '')
            {
              document.getElementById("diachi").style.marginBottom = "0";
              $('#ktdiachi').html('*Vui lòng nhập địa chỉ liên lạc');
              check++;
            }
            if($('#diachill').val() == '')
            {
              document.getElementById("diachill").style.marginBottom = "0";
              $('#ktdiachill').html('*Vui lòng nhập địa chỉ liên lạc');
              check++;
            }
            if($('#dienthoai').val() == '')
            {
              document.getElementById("dienthoai").style.marginBottom = "0";
              $('#ktdtdd').html('*Vui lòng nhập điện thoại liên lạc');
              check++;
            }
            else
            {
              var sdt = document.getElementById('dienthoai').value;
              var filter = /^[0-9-+]+$/;
              if (!filter.test(sdt)) {
                document.getElementById("dienthoai").style.marginBottom = "0";
                $('#ktdtdd').html('*Vui lòng nhập đúng định dạng điện thoại');
              }
              else
              {
                document.getElementById("dienthoai").style.marginBottom = "20px";
                $('#ktdtdd').html('');
              }
            }
            if($('#email').val() == '')
            {
              document.getElementById("email").style.marginBottom = "0";
              $('#ktemail').html('*Vui lòng nhập email');
              check++;
            }
            else
            {
              var email = document.getElementById('email'); 
              var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
              if (!filter.test(email.value)) { 
                document.getElementById("email").style.marginBottom = "0";
               $('#ktemail').html('*Hãy nhập địa chỉ email hợp lệ.Example@gmail.com');
               check++;
              }
              else
              {
                $('#ktemail').html('');
              }
            }
            if($('#loaitin').val() == 0)
            { 
                 document.getElementById("loaitin").style.marginBottom = "0";
                 $('#ktloaitin').html('*Vui lòng chọn loại tin');
                 check++;
            }
            if($('#ngayketthuc').val() == 0)
            { 
                 document.getElementById("ngayketthuc").style.marginBottom = "0";
                 $('#ktngayketthuc').html('*Vui lòng chọn ngày kết thúc');
                 check++;
            }
            if($('#tp').val() == 0)
            { 
                 document.getElementById("tp").style.marginBottom = "0";
                 $('#kttp').html('*Vui lòng chọn thành phố');
                 check++;
            }
            if($('#quan').val() == 0)
            { 
                 document.getElementById("quan").style.marginBottom = "0";
                 $('#ktquan').html('*Vui lòng chọn quận');
                 check++;
            }
            if($('#phuong').val() == 0)
            { 
                 document.getElementById("phuong").style.marginBottom = "0";
                 $('#ktphuong').html('*Vui lòng chọn phường');
                 check++;
            }
            if(check == 0)
            {
                var tongtien;
                var gia = $('#loaitin').val().substring(2);
                var d2 = new Date($('#ngayketthuc').val());
                var d1 = new Date($('#ngaybatdau').val());
                var offset = d2.getTime() - d1.getTime();
                var totalDays = Math.round(offset / 1000 / 60 / 60 / 24);
                if($('#loaitin').val() != 0)
                {
                  tongtien = gia*totalDays;
                }
                loaitin =  $('#loaitin').val().substring(0,1);
                 data.append('tieude', $('#tieude').val());
                 data.append('loaichothue', $('#loaichothue').val());
                 data.append('tp', $('#tp').val());
                 data.append('tieude', $('#tieude').val());
                 data.append('loaichothue', $('#loaichothue').val());
                 data.append('quan', $('#quan').val());
                 data.append('phuong', $('#phuong').val());
                 data.append('dientich', $('#dientich').val());
                 data.append('gia', $('#gia').val());
                 data.append('mota', $('#mota').val());
                 data.append('tenlienhe', $('#tenlienhe').val());
                 data.append('diachi', $('#diachi').val());
                 data.append('diachill', $('#diachill').val());
                 data.append('dienthoai', $('#dienthoai').val());
                 data.append('ngaybatdau', $('#ngaybatdau').val());
                 data.append('ngayketthuc', $('#ngayketthuc').val());
                 data.append('tongtien', tongtien);
                 data.append('loaitin', loaitin);
                 data.append('email', $('#email').val());
                 data.append('nguoidang', $('#nguoidang').val());

             //  $.ajax({
             //    type:'post',
             //    url:'{{url("postdangtin")}}',
             //    data:{
             //    tieude:$('#tieude').val(),
             //    loaichothue:$('#loaichothue').val(),
             //    tp:$('#tp').val(),
             //    quan:$('#quan').val(),
             //    phuong:$('#phuong').val(),
             //    dientich:$('#dientich').val(),
             //    gia:$('#gia').val(),
             //    mota: $('#mota').val(),
             //    tenlienhe: $('#tenlienhe').val(),
             //    diachi: $('#diachi').val(),
             //    dienthoai: $('#dt').val(),
             //    email: $('#email').val(),
             //    ngaybatdau: $('#ngaybatdau').val(),
             //    ngayketthuc: $('#loaichothue').val(),
             //    tongtien: tongtien,
             //    loaitin: $('#loaitin').val()
             //    },
             //    async: true,
             //    success:function(html){
             //     alert(html);
             //   }
             // });
              $.ajax({
                type:'post',
                url:'{{url("postdangtin")}}',
                data: data,
                processData: false, contentType: false,
                async: true,
                success:function(html){
                 alert(JSON.stringify(html));
               }
             });
            }
          }
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function SuaTin()
          {
            var data = new FormData();
            var check = 0;
            var dem = 0;
            jQuery.each(jQuery('#file')[0].files, function(i, file) {
              data.append('file'+i, file);
              dem++;
            });
            data.append('dem', dem);
            if($('#tieude').val() == '')
            {
              document.getElementById("tieude").style.marginBottom = "0";
              $('#kttieude').html('*Vui lòng nhập tiêu đề');
              check++;
            }
            if($('#dientich').val() == '')
            {
              document.getElementById("dientich").style.marginBottom = "0";
              $('#ktdt').html('*Vui lòng nhập diện tích');
              check++;
            }
            if($('#gia').val() == '')
            {
              document.getElementById("gia").style.marginBottom = "0";
              $('#ktgia').html('*Vui lòng nhập giá cho thuê');
              check++;
            }
            if($('#tenlienhe').val() == '')
            {
              document.getElementById("tenlienhe").style.marginBottom = "0";
              $('#ktlienhe').html('*Vui lòng nhập tên liên hệ');
              check++;
            }
            if($('#diachi').val() == '')
            {
              document.getElementById("diachi").style.marginBottom = "0";
              $('#ktdiachi').html('*Vui lòng nhập địa chỉ liên lạc');
              check++;
            }
            if($('#diachill').val() == '')
            {
              document.getElementById("diachill").style.marginBottom = "0";
              $('#ktdiachill').html('*Vui lòng nhập địa chỉ liên lạc');
              check++;
            }
            if($('#dienthoai').val() == '')
            {
              document.getElementById("dienthoai").style.marginBottom = "0";
              $('#ktdtdd').html('*Vui lòng nhập điện thoại liên lạc');
              check++;
            }
            else
            {
              var sdt = document.getElementById('dienthoai').value;
              var filter = /^[0-9-+]+$/;
              if (!filter.test(sdt)) {
                document.getElementById("dienthoai").style.marginBottom = "0";
                $('#ktdtdd').html('*Vui lòng nhập đúng định dạng điện thoại');
              }
              else
              {
                document.getElementById("dienthoai").style.marginBottom = "20px";
                $('#ktdtdd').html('');
              }
            }
            if($('#email').val() == '')
            {
              document.getElementById("email").style.marginBottom = "0";
              $('#ktemail').html('*Vui lòng nhập email');
              check++;
            }
            else
            {
              var email = document.getElementById('email'); 
              var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
              if (!filter.test(email.value)) { 
                document.getElementById("email").style.marginBottom = "0";
               $('#ktemail').html('*Hãy nhập địa chỉ email hợp lệ.Example@gmail.com');
               check++;
              }
              else
              {
                $('#ktemail').html('');
              }
            }
            if($('#loaitin').val() == 0)
            { 
                 document.getElementById("loaitin").style.marginBottom = "0";
                 $('#ktloaitin').html('*Vui lòng chọn loại tin');
                 check++;
            }
            if($('#ngayketthuc').val() == 0)
            { 
                 document.getElementById("ngayketthuc").style.marginBottom = "0";
                 $('#ktngayketthuc').html('*Vui lòng chọn ngày kết thúc');
                 check++;
            }
            if($('#tp').val() == 0)
            { 
                 document.getElementById("tp").style.marginBottom = "0";
                 $('#kttp').html('*Vui lòng chọn thành phố');
                 check++;
            }
            if($('#quan').val() == 0)
            { 
                 document.getElementById("quan").style.marginBottom = "0";
                 $('#ktquan').html('*Vui lòng chọn quận');
                 check++;
            }
            if($('#phuong').val() == 0)
            { 
                 document.getElementById("phuong").style.marginBottom = "0";
                 $('#ktphuong').html('*Vui lòng chọn phường');
                 check++;
            }
            if(check == 0)
            {
                var tongtien;
                var gia = $('#loaitin').val().substring(2);
                var d2 = new Date($('#ngayketthuc').val());
                var d1 = new Date($('#ngaybatdau').val());
                var offset = d2.getTime() - d1.getTime();
                var totalDays = Math.round(offset / 1000 / 60 / 60 / 24);
                if($('#loaitin').val() != 0)
                {
                  tongtien = gia*totalDays;
                }
                loaitin =  $('#loaitin').val().substring(0,1);
                 data.append('tieude', $('#tieude').val());
                 data.append('loaichothue', $('#loaichothue').val());
                 data.append('tp', $('#tp').val());
                 data.append('tieude', $('#tieude').val());
                 data.append('loaichothue', $('#loaichothue').val());
                 data.append('quan', $('#quan').val());
                 data.append('phuong', $('#phuong').val());
                 data.append('dientich', $('#dientich').val());
                 data.append('gia', $('#gia').val());
                 data.append('mota', $('#mota').val());
                 data.append('tenlienhe', $('#tenlienhe').val());
                 data.append('diachi', $('#diachi').val());
                 data.append('diachill', $('#diachill').val());
                 data.append('dienthoai', $('#dienthoai').val());
                 data.append('ngaybatdau', $('#ngaybatdau').val());
                 data.append('ngayketthuc', $('#ngayketthuc').val());
                 data.append('tongtien', tongtien);
                 data.append('loaitin', loaitin);
                 data.append('email', $('#email').val());
                 data.append('nguoidang', $('#nguoidang').val());
                 data.append('idtin', $('#idtin').val())

             //  $.ajax({
             //    type:'post',
             //    url:'{{url("postdangtin")}}',
             //    data:{
             //    tieude:$('#tieude').val(),
             //    loaichothue:$('#loaichothue').val(),
             //    tp:$('#tp').val(),
             //    quan:$('#quan').val(),
             //    phuong:$('#phuong').val(),
             //    dientich:$('#dientich').val(),
             //    gia:$('#gia').val(),
             //    mota: $('#mota').val(),
             //    tenlienhe: $('#tenlienhe').val(),
             //    diachi: $('#diachi').val(),
             //    dienthoai: $('#dt').val(),
             //    email: $('#email').val(),
             //    ngaybatdau: $('#ngaybatdau').val(),
             //    ngayketthuc: $('#loaichothue').val(),
             //    tongtien: tongtien,
             //    loaitin: $('#loaitin').val()
             //    },
             //    async: true,
             //    success:function(html){
             //     alert(html);
             //   }
             // });
              $.ajax({
                type:'post',
                url:'{{url("postsuatin")}}',
                data: data,
                processData: false, contentType: false,
                async: true,
                success:function(html){
                 alert(JSON.stringify(html));
                 window.location='{{url("tindadang")}}';
               }
             });
            }
          }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
          var totalDays,gia;
          $('#tp').on('change',function(){
            if(tp){
              $.ajax({
                type:'get',
                url:'{{ url("timquan") }}',
                data:{tp:$(this).val()},
                async: true,
                success:function(html){
                  $('#quan').html(html);
                }
              }); 
            }else{
              $('#quan').html('<option value="0">Chọn thành phố</option>');
            }
          });
          $('#gia').on('change',function(){
            if($('#gia').val() < 0)
            {
              $('#gia').val('0');
            }
            if($('#gia').val() > 100)
            {
              $('#gia').val('100');
            }
          });
          $('#dientich').on('change',function(){
            if($('#dientich').val() < 0)
            {
              $('#dientich').val('0');
            }
          });
          $('#quan').on('change',function(){
            if(quan){
              $.ajax({
                type:'get',
                url:'{{ url("timphuong") }}',
                data:{quan:$(this).val()},
                async: true,
                success:function(html){
                  $('#phuong').html(html);
                }
              }); 
            }else{
              $('#phuong').html('<option value="0">Chọn quận/huyện</option>');
            }
          });
          $('#ngaybatdau').on('change',function(){
            var today = new Date();
            var tam = new Date($('#ngaybatdau').val());
            if(tam < today)
            {
              alert('Vui lòng chọn ngày bắt đầu từ hôm nay');
              document.getElementById("ngaybatdau").valueAsDate = new Date()
            }
            if ($('#ngaybatdau').val() > $('#ngayketthuc').val() && $('#ngayketthuc').val() != '')
              {
                alert('Vui lòng chọn ngày bắt đầu trước ngày kết thúc');
                $('#ngayketthuc').val('');
              }
          });
          $('#ngaybatdau-sua').on('change',function(){
            var today = new Date();
            var tam = new Date($('#ngaybatdau').val());
            if ($('#ngaybatdau').val() > $('#ngayketthuc').val() && $('#ngayketthuc').val() != '')
              {
                alert('Vui lòng chọn ngày bắt đầu trước ngày kết thúc');
                $('#ngayketthuc').val('');
              }
          });
          $('#ngayketthuc').on('change',function(){
            if($('#ngaybatdau').val() == '')
            {
              alert('Vui lòng chọn ngày bắt đầu trước');
              $('#ngayketthuc').val('');
            }
            else
            {
              if ($('#ngaybatdau').val() > $('#ngayketthuc').val())
              {
                alert('Vui lòng chọn ngày kết thúc sau ngày bắt đầu');
                $('#ngayketthuc').val('');
              }
              else
              {
                var d2 = new Date($('#ngayketthuc').val());
                var d1 = new Date($('#ngaybatdau').val());
                var offset = d2.getTime() - d1.getTime();
                totalDays = Math.round(offset / 1000 / 60 / 60 / 24);
                $('#songaydang').html("Số ngày đăng: " + totalDays + " ngày");
                if($('#loaitin').val() != 0)
                {
                  var tongtien = gia*totalDays;
                  tongtien = format_number(tongtien,0,'.','.');
                  $('#tongtien').html('Tổng tiền: ' +tongtien+' VND');
                } 
              }
            }
          });
          function format_number(number, decimals, dec_point, thousands_sep)
          {
            var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
            var d = dec_point == undefined ? "," : dec_point;
            var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
            var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
          }
          $('#loaitin').on('change',function(){
              gia = $(this).val().substring(2);
              gia_tam = format_number(gia,0,'.','.');
              $('#dongia').html('Đơn giá: '+gia_tam+' VND');
              if($('#ngayketthuc').val() != '' && $('#ngaybatdau').val() != '')
              {
                  var tongtien = gia*totalDays;
                  tongtien = format_number(tongtien,0,'.','.');
                  $('#tongtien').html('Tổng tiền: ' +tongtien+' VND');
              }
          });
          
        });
</script>
@endsection