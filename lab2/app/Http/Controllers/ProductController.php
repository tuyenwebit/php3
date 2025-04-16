<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    // public function index(){
    //     $category = 'Dien thoai';
    //     $products = [
    //         [
    //           'name' => 'Iphone',
    //         'price' => 12000000,
    //         'quantity' => 'hang new'
    //         ],
    //         [
    //           'name' => 'Samsung',
    //         'price' => 8000000,
    //         'quantity' => 'pin trau'
    //         ]
 
    //      ];

    //     return view('products', compact('category', 'products'));
    // }

    public function index(){
      $products = 
      // DB::table('products')->first();//Lấy 1 dòng
      // DB::table('products')->where('id','=', 2)->get();//Lấy 1 dòng
      Product::orderBy('id', 'DESC')->get();
        return view('products', compact('products'));
    }

    public function addProduct(){
        return view('product-add');
    }

    public function storeProduct(Request $request){
      // DB::table('products')->insert([
      //   'name' => 'xiaomi',
      //   'price' => 200,
      //   'quantity' => 'Đẹp đắt đỏ'
      // ])
      $product = new Product();
      // $product = Product::find($productId); //Dùng cho update
      $product->name = $request->input('name');
      $product->price = $request->input('price');
      $product->quantity = $request->input('quantity');
      $product->price = $request->input('price');
      $product->save(); 
      return redirect()->route('product.index')->with('success', 'Bạn đã thêm sản phẩm thành công');
    }

    public function editProduct($productId){
      $product = Product::find($productId);
      return view('product-edit', compact('product'));
    }
    public function updateProduct(Request $request, $productId){
      $product = Product::find($productId);
      $product->name = $request->input('name');
      $product->price = $request->input('price');
      $product->quantity = $request->input('quantity');
      $product->description = $request->input('description');

      $product->save();
      return redirect()->route('product.index')->with('success', 'Bạn đã sửa sản phẩm thành công');
}

    public function deleteProduct($productId){
      $product = Product::find($productId);
      $product->delete();
      return redirect()->route('product.index')->with('success', 'Bạn đã xóa sản phẩm thành công');
    }
}