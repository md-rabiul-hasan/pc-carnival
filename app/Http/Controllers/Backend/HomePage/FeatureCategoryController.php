<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\FeatureCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Traits\ImageOperationTrait;
use Exception;

class FeatureCategoryController extends Controller
{
    use ImageOperationTrait;

    public function list(){
        $categories = FeatureCategory::get();
        $data = [
            "categories" => $categories
        ];
        return view('backend.home-page.feature-category.index', $data);
    }

    public function create(){
        return view('backend.home-page.feature-category.create');
    }

    public function findList(Request $request){
        $type =  $request->input('type');
        if($type == "brand"){
            $data = Brand::select('slug', 'title')->get();
        }else if($type == "category"){
            $data = Category::select('slug', 'title')->get();
        }else if($type == "sub-category"){
            $data = SubCategory::select('slug', 'title')->get();
        }   
        return response()->json(['data' => $data]);
    }


    public function store(Request $request){
        $featureCategory = new FeatureCategory();
        $featureCategory->title = $request->input('title');
        $featureCategory->type = $request->input('type');
        $featureCategory->link = $request->input('link');
        $featureCategory->image = $this->imageUpload($request->file('image'), "storage/feature-category/");
        $featureCategory->save();

        return redirect()->route('admin.home-page.feature-category.index')->with('message','Feature Category create Successfully');;
    }


    public function show(FeatureCategory $featureCategory){
        $data = [
            "featureCategory" => $featureCategory
        ];
        return view('backend.home-page.feature-category.edit', $data);
    }

    public function update(Request $request, FeatureCategory $featureCategory){
        $featureCategory->title = $request->input('title');
        $featureCategory->type  = $request->input('type');
        $featureCategory->link  = $request->input('link');
        $featureCategory->image = $this->imageRemoveAndUpload($featureCategory->image, $request->file('image'), "storage/feature-category/");
        $featureCategory->save();

        return redirect()->route('admin.home-page.feature-category.index')->with('message','Feature Category updated Successfully');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureCategory $featureCategory)
    {
        try{
            $this->imageRemove($featureCategory->image);
            $featureCategory->delete();
            $data = [
                "success" => true,
                "message" => "Feature Category delete successfully"
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


}
