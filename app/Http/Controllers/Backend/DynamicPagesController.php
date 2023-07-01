<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DynamicPages;

class DynamicPagesController extends Controller
{
    public function index(){
        $dynamic_pages = DynamicPages::get();
        $data = [
            "dynamic_pages" => $dynamic_pages
        ];
        return view('backend.dynamic-pages.index', $data);
    }

    public function create(){
        return view('backend.dynamic-pages.create');
    }

    public function store(Request $request){
        if($request->has('about_us')){
            $dynamicPage = new DynamicPages();
            $dynamicPage->page_name = "about_us";
            $dynamicPage->page_content = $request->input('about_us');
            $dynamicPage->save();
        }

        if($request->has('privacy_policy')){
            $dynamicPage = new DynamicPages();
            $dynamicPage->page_name = "privacy_policy";
            $dynamicPage->page_content = $request->input('privacy_policy');
            $dynamicPage->save();
        }

        if($request->has('terms_and_condition')){
            $dynamicPage = new DynamicPages();
            $dynamicPage->page_name = "terms_and_condition";
            $dynamicPage->page_content = $request->input('terms_and_condition');
            $dynamicPage->save();
        }

        if($request->has('delivery_option')){
            $dynamicPage = new DynamicPages();
            $dynamicPage->page_name = "delivery_option";
            $dynamicPage->page_content = $request->input('delivery_option');
            $dynamicPage->save();
        }
        
        return redirect()->route('admin.dynamic-page.index')->with('message','Dynamic Page Created Successfully');
    }

    public function edit(){
        $dynamic_pages = DynamicPages::get();

        $dynamicPages = [];
        foreach($dynamic_pages as $dynamic_page){
            $dynamicPages[$dynamic_page->page_name] = $dynamic_page->page_content;
        }

        $data = [
            "dynamicPages" => $dynamicPages
        ];
        return view('backend.dynamic-pages.edit', $data);
    }


    public function update(Request $request){
        if($request->has('about_us')){
            $dynamicPage = DynamicPages::where('page_name', 'about_us')->first();
            if(!$dynamicPage){
                $dynamicPage = new DynamicPages();
            }
            $dynamicPage->page_name = "about_us";
            $dynamicPage->page_content = $request->input('about_us');
            $dynamicPage->save();
        }

        if($request->has('privacy_policy')){
            $dynamicPage = DynamicPages::where('page_name', 'privacy_policy')->first();
            if(!$dynamicPage){
                $dynamicPage = new DynamicPages();
            }
            $dynamicPage->page_name = "privacy_policy";
            $dynamicPage->page_content = $request->input('privacy_policy');
            $dynamicPage->save();
        }

        if($request->has('terms_and_condition')){
            $dynamicPage = DynamicPages::where('page_name', 'terms_and_condition')->first();
            if(!$dynamicPage){
                $dynamicPage = new DynamicPages();
            }
            $dynamicPage->page_name = "terms_and_condition";
            $dynamicPage->page_content = $request->input('terms_and_condition');
            $dynamicPage->save();
        }

        if($request->has('delivery_option')){
            $dynamicPage = DynamicPages::where('page_name', 'delivery_option')->first();
            if(!$dynamicPage){
                $dynamicPage = new DynamicPages();
            }
            $dynamicPage->page_name = "delivery_option";
            $dynamicPage->page_content = $request->input('delivery_option');
            $dynamicPage->save();
        }

        return redirect()->route('admin.dynamic-page.index')->with('message','Dynamic Page Updated Successfully');
    }


}
