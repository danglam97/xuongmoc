<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use App\Contact;
use App\Material;
use App\Product;
use App\ProductImage;
use App\Setting;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    //

    public function index(){
        $banners = Banner::where('is_active', 1)->limit(3)->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();

        $hotProducts= Product::where(['is_active'=>1],['is_hot'=>1])
            ->limit(8)
//            ->orderBy('id','desc')
            ->get();
        $categories = Category::where([
            'is_active' => 1,
        ])->orderBy('position', 'ASC')->get();

        $vendor = Vendor::where(['is_active'=>1]);

        $hotArticle= Article::where(['is_active'=>1],['is_hot'=>1])
            ->limit(1)
            ->orderBy('id','desc')
            ->get();
        $article = Article::where (['is_active'=>1],['is_hot'=>0])
            ->limit(3)
            ->orderBy('id','desc')
            ->get();
//        $hotProducts = Product::where(['slug' => $slug], ['is_active' => 1])->get();
////      dd($product[0]->id);
//        $product_images = ProductImage::where(['is_active' => 1], ['product_id' => $product[0]->id])->get();
//        return view('frontend.product. product_detail', [
//            'product' => $product,
//            'product_images' => $product_images,
////        ]);

        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();
//        dd($menu);

        return view('frontend.index', [
            'banners' => $banners,
            'hotProducts' => $hotProducts,
            'categories' => $categories,
            'vendors' => $vendor,
            'hotArticle'=>$hotArticle,
            'articles'=>$article,
            'menu' => $menu,
        ]);
    }

//    public function category($slug){
//        $category = Category::where('slug', $slug)->first();
//        $products = Product::where(['is_active' => 1, 'category_id' => $category->id])
//        ->orderBy('position', 'ASC')
//        ->orderBy('id', 'DESC')->paginate(6);
//
//        return view('frontend.layouts.header',[
//            'products' => $products,
//
//        ]);
//    }
    public function contact(){
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.contact', [
            'menu' => $menu
        ]);
    }

    public function about()
    {
        $banners = Banner::where('is_active', 1)->limit(3)->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();
        $settings = Setting::where('id', 1)->get();
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.about', [
            'settings' => $settings,
            'banners'=>$banners,
            'menu' => $menu,
        ]);
    }

    public function vendor()
    {
        $banners = Banner::where('is_active', 1)->limit(3)->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();
        $vendor = Vendor::where(['is_active'=>1])
//            ->orderBy('id', 'ASC')
            ->get();
        $settings = Setting::where('id', 1)->get();
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.vendor', [
            'settings' => $settings,
            'vendor' =>$vendor,
            'banners'=>$banners,
            'menu' => $menu
        ]);
    }
    public function article()
    {
        $article = Article::where(['is_active'=>1])
//            ->orderBy('id', 'ASC')
            ->paginate(3);
        $settings = Setting::where('id', 1)->get();
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.article.article', [
            'settings' => $settings,
            'article' =>$article,
            'menu' => $menu
        ]);
    }
    public function product()

    {
        $banners = Banner::where('is_active', 1)->limit(1)->orderBy('position', '4')
            ->orderBy('id', 'DESC')->get();
        $settings = Setting::where('id', 1)->get();

        $categories = Category::where(['is_active' => 1])->orderBy('id', 'DESC')->get();

        $products = Product::where(['is_active' => 1])->get();
//        dd($products);

        $arr = [];

        $arr2 = [];

        foreach ($categories as $category) {
            $arr2[$category->name][] = $category->slug;
            foreach ($products as $key => $product)
                if($product->categories_id == $category->id) {
                    $arr[$category->name][] = $product;
                }
        }

        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.product.product', [
            'settings' => $settings,
            'arr' => $arr,
            'arr2' => $arr2,
            'banners'=>$banners,
            'categories'=>$categories,
            'menu' => $menu
        ]);
    }

    public function getListProduct($slug)
    {
        $banners = Banner::where('is_active', 1)->limit(1)->orderBy('position', '4')
            ->orderBy('id', 'DESC')->get();
        $categories = Category::where(['slug' => $slug])->get();
        $materials = Material::where(['slug' => $slug])->get();

//        dd($category);

        $products = Product::where(['categories_id' => $categories->first()->id])->get();
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.product.room', [
            'products' => $products,
            'banners'=>$banners,
            'categories'=>$categories,
            'materials' => $materials,
            'menu' => $menu
        ]);
    }
    public function getProductDetail($slug, $id)
    {

        $product = Product::where(['id' => $id], ['is_active' => 1])->get();


        $product_images = ProductImage::where([['is_active', '=', 1], ['products_id', '=', 30]])->get();

//        dd($product);
        $sameProducts = Product::where([['is_active', '=', 1],
            ['categories_id', '=', $product->first()->categories_id],
            ['id', '<>' , $product->first()->id]])
            ->latest()->take(4)->get();
        $category = Category::where(['id' => $product->first()->categories_id]);
        $material = Material::where(['id' => $product->first()->materials_id]);
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

//        dd($product);
        return view('frontend.product.product_detail', [
            'product' => $product,
            'product_images' => $product_images,
            'sameProducts' => $sameProducts,
            'category' => $category,
            'material' => $material,
            'menu' => $menu
        ]);
    }

    public function search (Request $request)
    {
        $keyword = $request->input('q');

        $slug = Str::slug($keyword);

//        $test = Product::find(1);
//        dd($test->test->name);
        $materials =  Material::where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1]])->get();
//        dd($materials);
        $categories = Category::where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1]])->get();

        $materials_id = [];
        foreach ($materials as $item) {
            $materials_id [] = $item->id;
        }

        $products = Product::where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1] ])
            ->get();

        $products2 = Product::whereIn('materials_id', $materials_id)->get();

//        dd( $products2->push($products));

        $banners = Banner::where('is_active', 1)->limit(1)->orderBy('position', '4')
            ->orderBy('id', 'DESC')->get();
        $categories = Category::where(['slug' => $slug])->get();

        foreach ($products2 as $item) {
            $products->push($item);
        }

//        dd($products2, $products);
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.search', [
            'products' => $products,
//            'products2' => $products2,
//            'categories' => $products2,
            'banners' => $banners,
            'keyword' => $keyword,
            'menu' => $menu
        ]);



    }

    public function getDetailArticle($slug)
    {
        $article = Article::where(['slug' => $slug],['is_hot' => 1], ['is_active' => 1])->get();
        //        $relatedProducts = Product::where([
//            ['is_active' , '=', 1],
//            ['categories_id', '=' , $product->categories_id ],
//            ['id', '<>' ]
//        ])->orderBy('id', 'desc')
//            ->take(10)
//            ->get();

        $sameArticles = Article::where([['is_active', '=',  1],
            ['categories_id', '=' , $article->first()->categories_id ],
            ['id', '<>', $article->first()->id]])->limit(3)
            ->get();
//        dd($article->first()->categories_id);
        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();

        return view('frontend.article.article_detail', [
            'article' => $article,
            'sameArticles' => $sameArticles,
            'menu' => $menu
        ]);
    }

    public function postContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'content' => 'required',
            'address' => 'nullable',
            'product_id' => 'nullable|exists:products,id',
        ], [

            'name.required'=>'Bạn chưa nhập Họ và Tên',
            'email.required'=>'Bạn chưa nhập Email',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'content.required'=>'Bạn chưa nhập nội dung',

        ]);

        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->content = $request->input('content');
        $contact->address = $request->input('address');
        $contact->products_id = $request->input('products_id');
//        dd($contact);
        $contact->save();
        return redirect()->back()->with('msg', 'Gửi yêu cầu thành công, chúng tôi sẽ liên hệ tới bạn sớm nhất.');
    }
//    public function search (Request $request)
//    {
//        $keyword = $request->input('q');
//
//        $slug = Str::slug($keyword);
//
//        $categories = DB::table('categories')->where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1]])->get();
//
//        $cates_id = [];
//        foreach ($categories as $item) {
//            $cates_id [] = $item->id;
//        }
//
//        $materials = DB::table('materials')->where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1]])->get();
//
//
//        $products = DB::table('products')->where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1] ])
//            ->get();
//
//        $products2 = DB::table('products')->whereIn('categories_id', $cates_id)->get();
//
////        dd( $products2->push($products));
//
//        $banners = Banner::where('is_active', 1)->limit(1)->orderBy('position', '4')
//            ->orderBy('id', 'DESC')->get();
//        $categories = Category::where(['slug' => $slug])->get();
//
//        $data = Product::searchByQuery(['match' => ['name' => $keyword]]);
//        $products = $data->toArray();
//
//        //dd();
//
//
//        $totalResult = $data->count(); //số lượng kết quả tìm kiếm
//
//        foreach ($products2 as $item) {
//            //$products->push($item);
//        }
//
////        dd($products2, $products);
//        $menu = Category::where([['is_active', '=', 1]])->orderBy('position', 'asc')->get();
//
//        $pro_materials = Material::where('is_active', 1)->get();
//
////        dd($products);
//
//        return view('frontend.search', [
//            'products' => $products,
//            'products2' => $products2,
////            'categories' => $products2,
//            'totalResult' => $totalResult,
//            'banners' => $banners,
//            'keyword' => $keyword,
//            'menu' => $menu,
//           'materials' => $materials,
//            'pro_materials' => $pro_materials,
//        ]);
//
//    }


}
