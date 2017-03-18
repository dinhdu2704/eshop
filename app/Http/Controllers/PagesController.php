<?php

namespace App\Http\Controllers;

//use Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\SubCategory;
use App\Slide;
use App\SlideAds;
use App\Product;
use App\Footer;
use App\User;
use App\Blog;
use App\CommentBlog;
use App\CommentProduct;
use Mail;
use Cart;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
	function __construct(){
		$category= Category::all();
    	$brand=Brand::all();
    	$slide=Slide::orderBy('id','desc')->take(3)->get();
    	$slideads= SlideAds::orderBy('id','asc')->first();
    	$slideads2=SlideAds::orderBy('id','desc')->first();
    	$product= Product::orderBy('id','desc')->take(6)->get();
    	$footer= Footer::all();
    	view()->share('category',$category);
    	view()->share('brand',$brand);
    	view()->share('slide',$slide);
    	view()->share('slideads',$slideads);
    	view()->share('footer',$footer);
    	view()->share('slideads2',$slideads2);
    	view()->share('product',$product);
	}
    function home(){
    	return view('layouts.container');
    }
    // product
    function product(){
    	$product=Product::orderBy('id','desc')->paginate(12);
    	return view('pages.products',['product'=>$product]);
    }
    function product_detail($tenkodau,$id)
    {
    	$procheck=Product::where('id',$id)->where('tenkodau',$tenkodau)->first();
        
    	if(count($procheck)!=0)
    	{
            //lấy cùng tag 
            $brand2=Brand::where('id',$procheck->idBrand)->select('id')->first();
            $proBrand=Product::where('idBrand',$brand2->id)->where('id','!=',$id)->take(4)->get();
            //lấy cùng price
            $proPrice= Product::where('gia',$procheck->gia)->where('id','!=',$id)->take(4)->get();
            //lấy cùng category
            $subcate2=SubCategory::where('id',$procheck->idSubCate)->select('id')->first();
            $proSub=Product::where('idSubCate',$subcate2->id)->where('id','!=',$id)->take(4)->get();
            $comment= CommentProduct::where('idPro',$id)->orderBy('id','desc')->take(20)->get();
    		return view('pages.product-detail',['procheck'=>$procheck,'proBrand'=>$proBrand,'proPrice'=>$proPrice,'proSub'=>$proSub,'comment'=>$comment]);
    	}
    	else{
    		return redirect('product');
    	}
    }

    //category
    function category($tenkodau,$id){
    	$subcheck= SubCategory::where('id','=',$id)->where('tenkodau','=',$tenkodau)->get();
    	if(count($subcheck)!=0)
    	{
	    	$product3=Product::where('idSubCate',$id)->orderBy('id','desc')->paginate(12);
	    	return view('pages.category',['product3'=>$product3]);
    	}
    	else
    	{
    		return redirect('product');
    	}
    }

    // brand
    function brand($tenkodau,$id)
    {
    	$bracheck= Brand::where('id',$id)->where('tenkodau',$tenkodau)->get();
    	if(count($bracheck)!=0)
    	{
    		$product4=Product::where('idBrand',$id)->orderBy('id','desc')->paginate(12);
    		return view('pages.brand',['product4'=>$product4]);
    	}
    	else
    	{
    		return redirect('product');
    	}
    }
    // login
    function getLogin()
    {
        return view('pages.login');
    }
    function postLogin(Request $request){
        //check validate
        $this->validate($request,
        [
            'email'=>'required|min:8|max:200',
            'password'=>'required|min:6|max:64|alpha_dash'
        ],
        [
            'email.required'=>'Bạn chưa nhập Email',
            'email.min'=>'Email phải trên 8 ký tự',
            'email.max'=>'Email quá dài',
            'password.required'=>'Đừng bỏ trống password',
            'password.min'=>'Password phải trên 6 ký tự',
            'password.alpha_dash'=>'Password chứa ký tự đặc biệt'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('home');
        }
        else{
            return redirect('login.html')->with('error','Sai Email hoặc Password!!');
        }
    }
    function postSignup(Request $request){
        $this->validate($request,
        [
            'Ten'=>'min:3|max:200',
            'Email'=>'min:8|max:300|unique:users,email',
            'Password'=>'min:6|max:200|alpha_dash',
            'PasswordAgain'=>'same:Password'
        ],
        [
            'Ten.min'=>'Tên của bạn phải dài trên 3 ký tự',
            'Ten.max'=>'Tên không được dài quá 200 ký tự',
            'Email.min'=>'Email phải dài trên 8 ký tự',
            'Email.max'=>'Email không quá 300 ký tự',
            'Email.unique'=>'Email này đã tồn tại, vui lòng chọn email khác',
            'Password.min'=>'Password không dưới 6 ký tự',
            'Password.max'=>'Password ngắn hơn 200 ký tự',
            'Password.alpha_dash'=>'Password không được chứa ký tự đặc biệt',
            'PasswordAgain.same'=>'Password nhập lại chưa chính xác'
        ]);

        $user= new User();
        $user->name= $request->Ten;
        $user->email=$request->Email;
        $user->password=bcrypt($request->Password);
        $user->quyen=0;
        $user->save();

        return redirect('login.html')->with('thongbao','Đăng ký thành công');
    }
    function getProfile(){
        return view('pages.profile');
    }
    function postProfile(Request $request){
        $this->validate($request,
        [
            'Ten'=>'min:3|max:200'
        ],
        [
            'Ten.min'=>'Tên của bạn phải dài trên 3 ký tự',
            'Ten.max'=>'Tên không được dài quá 200 ký tự'
        ]);

        $user= Auth::User();
        $user->name=$request->Ten;
        if($request->changePassword=="on")
        {
            $this->validate($request,
            [
                'Password'=>'min:6|max:200|alpha_dash',
                'PasswordAgain'=>'same:Password'
            ],
            [
                'Password.min'=>'Password không dưới 6 ký tự',
                'Password.max'=>'Password ngắn hơn 200 ký tự',
                'Password.alpha_dash'=>'Password không được chứa ký tự đặc biệt',
                'PasswordAgain.same'=>'Password nhập lại chưa chính xác'
            ]);
            $user->password=bcrypt($request->Password);
        }
        $user->save();
        return redirect('profile.html')->with('thongbao','Edit Your Profile Successfully');
    }
    function logout()
    {
        Auth::logout();
        return view('pages.logout');
    }

    //blog
    function blog()
    {
        $blog= Blog::orderBy('id','desc')->paginate(3);
        return view('pages.blog',['blog'=>$blog]);
    }

    // blod detail
    function blog_detail($tenkodau,$id){
        $blog=Blog::where('tieudekodau',$tenkodau)->where('id',$id)->first();
       
        $prev=Blog::where('id','>',$blog->id)->min('id');
        $next= Blog::where('id','<',$blog->id)->max('id');
        $blogprev= Blog::where('id',$prev)->first();
        $blognext= Blog::where('id',$next)->first();

        if(count($blog)!=0)
        {
            $comment=CommentBlog::where('idBlog',$id)->orderBy('id','desc')->take(20)->get();
            return view('pages.blog-detail',['blog'=>$blog,'blogprev'=>$blogprev,'blognext'=>$blognext,'comment'=>$comment])->with('prev',$prev)->with('next',$next);
        }
        else
        {
            return redirect('blog.html');
        }

    }
    // comment blog
    function commentBlog($tenkodau,$id,Request $request){
        $user=Auth::User();
        $comment = new CommentBlog();
        $comment->idUser= $user->id;
        $comment->idBlog= $request->idBlog;
        $comment->ten= $user->name;
        $comment->email= $user->email;
        $comment->noidung= $request->noidung;
        $comment->save();
        return redirect('blog-detail/'.$tenkodau.'-'.$id.'.html');
    } 
    function commentProduct($tenkodau,$id,Request $request)
    {
        $user=Auth::User();
        $comment = new CommentProduct();
        $comment->idUser= $user->id;
        $comment->idPro= $request->idPro;
        $comment->ten= $user->name;
        $comment->email= $user->email;
        $comment->noidung= $request->review;
        $comment->save();
        return redirect('product-detail/'.$tenkodau.'-'.$id.'.html');
    }

    //cart
    function buy($tenkodau,$id)
    {
        $product_buy=Product::where('id',$id)->first();
        Cart::add(['id'=>$id,'name'=>$product_buy->ten,'price'=>$product_buy->gia,'qty'=>1,'options'=>['img'=>$product_buy->hinh]]);
        $content= Cart::content();
        return redirect('cart.html');
    }
    function cart(){
        $content= Cart::content();
        $subtotal= Cart::subtotal();
        $vat= $subtotal*10/100;
        return view('pages.cart',['content'=>$content,'subtotal'=>$subtotal,'vat'=>$vat]);
    }
   
    //delete product in cart
    function delete($id)
    {
        Cart::remove($id);
        return redirect('cart.html');
    }
    //check out
    function checkout(){
        return view('pages.checkout');
    }

    function getContact(){
        return view('pages.contact');
    }

}
