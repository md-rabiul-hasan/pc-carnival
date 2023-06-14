<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\RelatedProduct;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageOperationTrait;
use Exception;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    use ImageOperationTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "sl" => 1,
            "products" => Product::all()
        ];
        return view('backend.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "brands"     => Brand::select(['id', 'title'])->get(),
            "categories" => Category::select(['id', 'title'])->get()
        ];
        return view('backend.product.create', $data);
    }

    public function findSubCategory($id){
        $sub_category = SubCategory::select(['id', 'title'])->where('category_id', $id)->get();
        $html = view('backend.product.sub-category', compact('sub_category'))->render();
        return $html;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product                      = new Product();
        $product->brand_id            = $request->input('brand_id');
        $product->category_id         = $request->input('category_id');
        $product->sub_category_id     = $request->input('sub_category_id');
        $product->title               = $request->input('title');
        $product->slug                = Str::slug($request->input('title'));
        $product->image               = $this->imageUpload($request->file('product_image'), "storage/product/");
        $product->product_code        = uniqid();
        $product->buying_price        = $request->input('buying_price');
        $product->selling_price       = $request->input('selling_price');
        $product->current_price       = ($request->input('selling_price') - ( ($request->input('selling_price') / 100 ) * $request->input('discount_percentage') ));
        $product->discount_percentage = $request->input('discount_percentage');
        $product->key_features        = $request->input('key_features');
        $product->specifications      = $request->input('specifications');
        $product->description         = $request->input('description');
        $product->availability        = $request->input('availability');
        $product->is_pc_build         = $request->input('is_pc_build') == 'on' ? 1 : 0;
        $product->save();

        
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $productImage = new ProductImage();
                $productImage->product_id = $product->id;
                $productImage->image_path = $this->imageUpload($file, "storage/product/");
                $productImage->save();
            }
        }

        if ($request->has('related_products')) {
            $related_products = $request->input('related_products');
            foreach ($related_products as $related_product) {
                $relatedProduct = new RelatedProduct();
                $relatedProduct->product_id = $product->id;
                $relatedProduct->related_product_id = $related_product;
                $relatedProduct->save();
            }
        }


        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $relatedProductIds = DB::table('related_products')->where('product_id', $product->id)->pluck('related_product_id');
    
        $relatedProducts = DB::table('products')
            ->select('id', 'title', 'image', 'slug')
            ->whereIn('id', $relatedProductIds)
            ->get();

        $data = [
            "product" => $product,
            "relatedProducts" => $relatedProducts
        ];
        return view('backend.product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = [
            "product"        => $product,
            "brands"         => Brand::select(['id', 'title'])->get(),
            "categories"     => Category::select(['id', 'title'])->get(),
            "sub_categories" => SubCategory::select(['id', 'title'])->where('category_id', $product->category_id)->get()

        ];
        return view('backend.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->brand_id            = $request->input('brand_id');
        $product->category_id         = $request->input('category_id');
        $product->sub_category_id     = $request->input('sub_category_id');
        $product->title               = $request->input('title');
        $product->slug                = Str::slug($request->input('title'));
        $product->image               = $this->imageRemoveAndUpload($product->image, $request->file('product_image'), "storage/product/");;
        $product->availability        = $request->input('availability');
        $product->buying_price        = $request->input('buying_price');
        $product->selling_price       = $request->input('selling_price');
        $product->current_price       = ($request->input('selling_price') - ( ($request->input('selling_price') / 100 ) * $request->input('discount_percentage') ));
        $product->discount_percentage = $request->input('discount_percentage');
        $product->key_features        = $request->input('key_features');
        $product->specifications      = $request->input('specifications');
        $product->description         = $request->input('description');
        $product->is_pc_build         = $request->input('is_pc_build') == 'on' ? 1 : 0;
        $product->save();

                
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $productImage = new ProductImage();
                $productImage->product_id = $product->id;
                $productImage->image_path = $this->imageUpload($file, "storage/product/");
                $productImage->save();
            }
        }

        
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try{
            $this->imageRemove($product->image);
            $product->delete();
            $data = [
                "success" => true,
                "message" => "Product delete successfully"
            ];
            return response()->json($data);
        }catch(Exception $e){
            $data = [
                "success" => false,
                "message" => $e->getMessage()
            ];
            return response()->json($data);
        }
    }



    public function searchRelatedProduct(Request $request){
        if(!empty($request->input("searchTerm"))){
            $products = DB::table('products')
            ->select('id', 'title as text')
            ->where('title', 'LIKE', '%' . $request->searchTerm . '%')
            ->get();    
            return response()->json($products);
        }else {
            return response()->json([]);
        }
        
    }
    
}
