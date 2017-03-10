<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Brand;
use App\CommentProduct;
class productController extends Controller
{
    public function listProduct(){
    	$product =Product::paginate(10);
    	return view('admin.product.list',['product'=>$product]);
    }
    public function getAdd(){
    	$category=Category::all();
    	$subcate=SubCategory::all();
    	$brand= Brand::all();
    	return view('admin.product.add',['category'=>$category,'subcate'=>$subcate,'brand'=>$brand]);
    }
    public function postAdd(Request $request){

        //kiểm tra các dl khác
        $this->validate($request,
        [
            'Category'=>'required',
            'Subcate'=>'required',
            'Brand'=>'required',
            'Ten'=>'required|min:3|max:150|unique:Product,ten',
            'TomTat' =>'required|min:10|max:300',
            'NoiDung'=>'required|min:10',
            'Price'=>'required|alpha_num',
            'Quantity'=>'required|alpha_num'
        ],
        [
            'Category.required'=>'Bạn chưa chọn Category',
            'Subcate.required'=>'Bạn chưa chọn Sub Category',
            'Brand.required'=>'Bạn chưa chọn Brand',
            'Ten.required'=>'Bạn chưa nhập tên sản phẩm',
            'Ten.min'=>'Tên Sản phẩm phải lớn hơn 3 và nhỏ hơn 150 ký tự',
            'Ten.max'=>'Tên Sản phẩm phải lớn hơn 3 và nhỏ hơn 150 ký tự',
            'Ten.unique'=>'Đã có sản phẩm này',
            'TomTat.required'=>'Bạn chưa nhập mô tả',
            'TomTat.min'=>'Bạn chưa nhập đủ 10 ký tự',
            'TomTat.max'=>'Bạn đã nhập quá 300 ký tự',
            'NoiDung.required'=>'Bạn chưa nhập Nội dung',
            'NoiDung.min'=>'Nội dung quá ngắn, phải trên 10 ký tự',
            'Price.alpha_num'=>'Giá bắt buộc phải là số',
            'Quantity.alpha_num'=>'Số lượng bắt buộc phải là số'
        ]);

        //kiểm tra ảnh
        if($request->hasFile('Image'))
        {   //lấy tên ảnh
            $file=$request->file('Image');
            // lấy đuôi file
            $duoi=$file->getClientOriginalExtension();
            if($duoi!='png' && $duoi!='jpg' && $duoi!='jpeg')
            {
                return redirect('admin/product/add')->with('error','Ảnh upload không hợp lệ');
            }
            //lấy tên ảnh
            $name=$file->getClientOriginalName();
            //đặt tên hình mới
            $hinh=str_random(4)."_".$name;
            //nếu đã tồn tại tên hình này thì đổi tên
            while(file_exists('upload/product/'.$hinh))
            {
                $hinh=str_random(4)."_".$name;
            }
            $file->move('upload/product',$hinh);

            //đưa vào csdl
            $product= new Product();

            $product->idSubCate= $request->Subcate;
            $product->idBrand=$request->Brand;
            $product->ten= $request->Ten;
            $product->tenkodau= str_slug($request->Ten);
            $product->tomtat=$request->TomTat;
            $product->noidung=$request->NoiDung;
            $product->gia=$request->Price;
            $product->soluong= $request->Quantity;
            $product->noibat= $request->NoiBat;
            $product->hinh= $hinh;

            // save
            $product->save();
            return redirect('admin/product/add')->with('thongbao','Đã thêm sản phẩm thành công');
        }
        else{
            return redirect('admin/product/add')->with('error','Bạn chưa upload ảnh sản phẩm');
        }

    }
    public function getEdit($id){
        $product=Product::find($id);
        $category=Category::all();
        $subcate=SubCategory::all();
        $brand= Brand::all();
        return view('admin.product.edit',['product'=>$product,'category'=>$category,'subcate'=>$subcate,'brand'=>$brand]);
    }

    public function postEdit(Request $request,$id){
        $product= Product::find($id);
        //kiểm tra các dl khác
        $this->validate($request,
        [
            'Category'=>'required',
            'Subcate'=>'required',
            'Brand'=>'required',
            'Ten'=>'required|min:3|max:150|unique:Product,ten',
            'TomTat' =>'required|min:10|max:300',
            'NoiDung'=>'required|min:10',
            'Price'=>'required|alpha_num',
            'Quantity'=>'required|alpha_num'
        ],
        [
            'Category.required'=>'Bạn chưa chọn Category',
            'Subcate.required'=>'Bạn chưa chọn Sub Category',
            'Brand.required'=>'Bạn chưa chọn Brand',
            'Ten.required'=>'Bạn chưa nhập tên sản phẩm',
            'Ten.min'=>'Tên Sản phẩm phải lớn hơn 3 và nhỏ hơn 150 ký tự',
            'Ten.max'=>'Tên Sản phẩm phải lớn hơn 3 và nhỏ hơn 150 ký tự',
            'Ten.unique'=>'Đã có sản phẩm này',
            'TomTat.required'=>'Bạn chưa nhập mô tả',
            'TomTat.min'=>'Bạn chưa nhập đủ 10 ký tự',
            'TomTat.max'=>'Bạn đã nhập quá 300 ký tự',
            'NoiDung.required'=>'Bạn chưa nhập Nội dung',
            'NoiDung.min'=>'Nội dung quá ngắn, phải trên 10 ký tự',
            'Price.alpha_num'=>'Giá bắt buộc phải là số',
            'Quantity.alpha_num'=>'Số lượng bắt buộc phải là số'
        ]);

        

        //kiểm tra ảnh
        if($request->hasFile('Image'))
        {   //lấy tên ảnh
            $file=$request->file('Image');
            // lấy đuôi file
            $duoi=$file->getClientOriginalExtension();
            if($duoi!='png' && $duoi!='jpg' && $duoi!='jpeg')
            {
                return redirect('admin/product/edit/'.$id)->with('error','Ảnh upload không hợp lệ');
            }
            //lấy tên ảnh
            $name=$file->getClientOriginalName();
            //đặt tên hình mới
            $hinh=str_random(4)."_".$name;
            //nếu đã tồn tại tên hình này thì đổi tên
            while(file_exists('upload/product/'.$hinh))
            {
                $hinh=str_random(4)."_".$name;
            }
            $file->move('upload/product',$hinh);
            //kiểm tra ảnh cũ
            if($product->hinh!='')
            {
                if(file_exists('upload/product/'.$product->hinh))
                    unlink('upload/product/'.$product->hinh);
            }

            //đưa vào csdl
            

            $product->idSubCate= $request->Subcate;
            $product->idBrand=$request->Brand;
            $product->ten= $request->Ten;
            $product->tenkodau= str_slug($request->Ten);
            $product->tomtat=$request->TomTat;
            $product->noidung=$request->NoiDung;
            $product->gia=$request->Price;
            $product->soluong= $request->Quantity;
            $product->noibat= $request->NoiBat;
            $product->hinh= $hinh;
            // save
            $product->save();
            return redirect('admin/product/edit/'.$id)->with('thongbao','Sửa sản phẩm thành công');
            
        }
        else{
            //đưa vào csdl
            $product= Product::find($id);

            $product->idSubCate= $request->Subcate;
            $product->idBrand=$request->Brand;
            $product->ten= $request->Ten;
            $product->tenkodau= str_slug($request->Ten);
            $product->tomtat=$request->TomTat;
            $product->noidung=$request->NoiDung;
            $product->gia=$request->Price;
            $product->soluong= $request->Quantity;
            $product->noibat= $request->NoiBat;
            // save
            $product->save();
            return redirect('admin/product/edit/'.$id)->with('thongbao','Sửa sản phẩm thành công');
        }

        
    }

    public function getDelete($id){
        $product = Product::find($id);
        $comPro= CommentProduct::where('idPro',$id)->get();
        if(count($comPro)==0)
        {
            if($product->hinh!='')
            {
                if(file_exists('upload/product/'.$product->hinh))
                {
                    unlink('upload/product/'.$product->hinh);
                }
            }
            $product->delete();
            return redirect('admin/product/list')->with('thongbao','Xóa sản phẩm thành công');
        }
        else{
            return redirect('admin/product/list')->with('error','Sản phẩm có chứa forgein key comment chưa thể xóa');
        }

    }

}
