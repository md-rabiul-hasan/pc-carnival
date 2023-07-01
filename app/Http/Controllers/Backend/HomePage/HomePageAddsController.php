<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageAdd;
use App\Traits\ImageOperationTrait;
use Exception;
use Illuminate\Http\Request;

class HomePageAddsController extends Controller
{
    use ImageOperationTrait;

    public function index(){
        $adds = HomePageAdd::get();
        $data = [
            "adds" => $adds
        ];
        return view('backend.home-page.adds.index', $data);
    }

    public function create(){
        return view('backend.home-page.adds.create');
    }

    public function store(Request $request){
        
        $homePageAdd         = new HomePageAdd();
        $homePageAdd->title  = $request->input('adds_title');
        $homePageAdd->link   = $request->input('adds_link');
        $homePageAdd->banner = $this->imageUpload($request->file('adds_image'), "storage/home-page/adds/");
        $homePageAdd->save();
        return redirect()->route('admin.home-page.adds.index')->with('message','Home Page Adds created Successfully');
    }


    public function edit(HomePageAdd $add){
        $data = [
            "add" => $add
        ];
        return view('backend.home-page.adds.edit', $data);
    }

    public function update(Request $request, HomePageAdd $add){

        $add->title  = $request->input('adds_title');
        $add->link   = $request->input('adds_link');
        $add->banner = $this->imageRemoveAndUpload($add->banner, $request->file('adds_image'), "storage/home-page/adds/");
        $add->save();

        return redirect()->route('admin.home-page.adds.index')->with('message','Home Page Adds updated Successfully');

    }

            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePageAdd $add)
    {
        try{
            $this->imageRemove($add->banner);
            $add->delete();
            $data = [
                "success" => true,
                "message" => "Adds delete successfully"
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
