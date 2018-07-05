<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PhongChoThue;
use App\LienHe;
class QL_ChoThueController extends Controller
{
    //
    public function getView()
    {
    	return view('chothuephong');
    }
    public function getViewDangTin()
    {
    	return view('dangtin');
    }
    public function postDangTin(Request $r)
    {
    	$p = new PhongChoThue;
    	$max = $p->timmax();
        foreach ($max as $t)
        {
            $max = $t->Ma;
            $max = $max + 1;
        } 
    	$i=0;
        $tam = '';
        //
        // xử lý ảnh
        $dem = $r->dem;
        if($dem != 0)
        {
        	for($n=0;$n<$dem;$n++)
        	{
        		$file = 'file'.$n;
        		$image =  $r->$file;
        		$input['imagename'] = 'IMG_'.$max.'_'.++$i.'.'.$image->getClientOriginalExtension();
        		$destinationPath = public_path('/img/ThuePhong');
        		$image->move($destinationPath, $input['imagename']);
        		$tam =$input['imagename'].';'.$tam;
        	}
        }
        $p->TieuDe = $r->tieude;
        $p->LoaiChoThue = $r->loaichothue;
        $p->Phuong = $r->phuong;
        $p->DienTich = $r->dientich;
        $p->Gia = $r->gia;
        $p->MoTa = $r->mota;
        $p->NgayBatDau = $r->ngaybatdau;
        $p->NgayKetThuc = $r->ngayketthuc;
        $p->TongTien = $r->tongtien;
        $p->Loaitin = $r->loaitin;
        $p->HinhAnh = $tam;
        $p->TrangThai = '2';
        $p->NguoiDang = $r->nguoidang;
        $p->DiaChi = $r->diachi;
        $p->TenLienHe = $r->tenlienhe;
        $p->DiaChiLienLac = $r->diachill;
        $p->DienThoaiLienLac = $r->dienthoai;
        $p->Email = $r->email;
        $p->save();
        return ('Đã thêm tin vào danh sách duyệt.');
        
    }
    public function timPhong(Request $r)
    {
    	$dt = $r->dt;
        $gia = $r->gia;
        $phuong = $r->phuong;
        $tp = $r->tp;
        $quan = $r->quan;
        $loaichothue = $r->loaichothue;
        $a = new PhongChoThue();
        $kq =  $a->timphong($quan,$tp,$gia,$dt,$phuong,$loaichothue);
        return view('chothuephong_kqtim')->with('kq',$kq);
    }
    public function getViewTinDaDang()
    {
        if(isset(Auth::user()->id))
        {
            $name = Auth::user()->id;
            $tim = new PhongChoThue();
            $tindadang = $tim->TimTin($name);
            return view('tindadang',['tindadang'=>$tindadang]);
        }
        else
        {
            return redirect()->route('view_trangchu');
        }
    }
}
