<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;

use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

use App\Model\Category;
use App\Model\Contacts;
use App\Model\Products;
use App\Model\Subscribers;
use App\Model\ProductImage;

class AdministratorController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function dashboard() {
        return view('administrator.pages.dashboard');
    }

    public function products() {
        return view('administrator.pages.product.products');
    }

    public function add_products() {
        return view('administrator.pages.product.add_products', ['categories' => Category::select('*')->get()]);
    }

    public function get_products() {
        $query = Products::leftJoin('product_images', 'products.id', '=', 'product_images.product_id')
                         ->leftJoin('category', 'products.category_id', '=', 'category.id')
                         ->select('products.id','products.name','products.description','products.name_ar', 'products.description_ar','product_images.filename as filename','products.created_at','category.name as category_name')
                         ->get();
        return Datatables::of($query)->make(true); 
    }

    public function get_product_images($product_id) {
        $query = ProductImage::where('product_id', $product_id)->get();
        return Datatables::of($query)->make(true); 
    }

    public function delete_image() {
        $deleted = ProductImage::where('id', $this->request->id)
        ->delete();
        return Response()->json(['status' => $deleted]);
    }

    public function upload_product() {

        $status = false;
        $filename = 'pro-' . $_FILES['qqfile']['name'];
        if($_FILES['qqfile']['name']) {

            $product_image = new ProductImage;
            $product_image->product_id = $this->request->product_id;
            $product_image->filename = $filename;
           
            if ($product_image->save()) {
                if (move_uploaded_file($_FILES['qqfile']['tmp_name'], public_path('images/product/') . $filename)) {
                    $status = true;
                }
            }
        }
        return Response()->json(array('success' => $status, 'status' => $status, 'filename' => $filename));
    }

    public function store_products() {
        $status = false;
        $products = new Products;
        $products->sluq = Str::slug($this->request->name, '-');
        $products->unique_id = Uuid::generate()->string;
        $products->category_id = $this->request->category_id;
        $products->name = $this->request->name;
        $products->name_ar = $this->request->name_ar;
        $products->description = $this->request->description;
        $products->description_ar = $this->request->description_ar;
        if ($products->save()) {
            $status = true;
        }
        return Response()->json(['status' => $status, 'product_id' => $products->id]); 
    }

    public function edit_product_page($id) {
        $product = Products::where('id', $id)->first();
        return view('administrator.pages.product.edit_product_page', ['product' => $product, 'categories' => Category::select('*')->get()]);
    }

    public function edit_products() {
        $updated = Products::where('id', $this->request->id)
        ->update([
            'name' => $this->request->name,
            'name_ar' => $this->request->name_ar,
            'description' => $this->request->description,
            'description_ar' => $this->request->description_ar,
        ]);
        return Response()->json(['updated' => $updated]);
    }

    public function delete_product() {
        $deleted = Products::where('id', $this->request->id)
            ->delete();
        return Response()->json(['status' => $deleted]);
    }

    public function category() {
        return view('administrator.pages.category.category');
    }

    public function add_category() {
        return view('administrator.pages.category.add_category');
    }

    public function edit_category_page($id) {
        $category = Category::where('id', $id)->first();
        return view('administrator.pages.category.edit_category_page', ['category' => $category]);
    }

    public function get_categories() {
        $query = Category::select('*')->get();
        return Datatables::of($query)->make(true); 
    }

    public function upload_category() {
        $status = false;
        $filename = 'cat-' . $_FILES['qqfile']['name'];
        if($_FILES['qqfile']['name']) {
            if (move_uploaded_file($_FILES['qqfile']['tmp_name'], public_path('images/category/') . $filename)) {
                $status = true;
            }
        }
        return Response()->json(array('success' => $status, 'status' => $status, 'filename' => $filename));
    }

    public function store_category() {
        $status = false;
        $category = new Category;
        $category->sluq = Str::slug($this->request->name, '-');
        $category->unique_id = Uuid::generate()->string;
        $category->name = $this->request->name;
        $category->name_ar = $this->request->name_ar;
        $category->description = $this->request->description;
        $category->description_ar = $this->request->description_ar;
        $category->featured_image = $this->request->featured_image;

        if ($category->save()) {
            $status = true;
        }
        return Response()->json(['status' => $status]); 
    }

    public function edit_category() {

        $updated = Category::where('id', $this->request->id)
        ->update([
            'sluq' => Str::slug($this->request->name, '-'),
            'name' => $this->request->name,
            'name_ar' => $this->request->name_ar,
            'description' => $this->request->description,
            'description_ar' => $this->request->description_ar,
            'featured_image' => $this->request->featured_image,

        ]);

        return Response()->json(['updated' => $updated]);

    }

    public function delete_category() {
        $deleted = Category::where('id', $this->request->id)
        ->delete();
        return Response()->json(['status' => $deleted]);
    }

    public function contacts() {
        return view('administrator.pages.contacts');
    }

    public function get_contacts() {
        $query = Contacts::select('*')->get();
        return Datatables::of($query)->make(true); 
    }

    public function delete_contact() {
        $deleted = Contacts::where('id', $request->id)  ->delete();
        return Response()->json(['deleted' => $deleted]);
    }

    public function subscribe() {
        return view('administrator.pages.subscribe');
    }

    public function get_subscribers() {
        $query = Subscribers::select('*')->get();
        return Datatables::of($query)->make(true); 
    }
 
    public function delete_subscribe() {
        $deleted = Subscribers::where('id', $request->id)  ->delete();
        return Response()->json(['deleted' => $deleted]);
    }

    public function logout() {

    }


    public function register() {

        $status = User::create([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'password' => Hash::make($this->request->password),
        ]);

        return redirect(route('admin.auth.login'));

    }

    public function login () {

        $credentials = $this->request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

    }

  
}
