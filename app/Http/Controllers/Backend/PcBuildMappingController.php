<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PcBuildComponent;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class PcBuildMappingController extends Controller
{
    public function index(){
        $pc_build_components = PcBuildComponent::with('subCategory')->get();
        $data = [
            "pc_build_components" => $pc_build_components
        ];

        return view('backend.pc-build.index', $data);
    }

    public function create(){
        $sub_categories = SubCategory::get();
        $data = [
            "sub_categories" => $sub_categories
        ];
        return view('backend.pc-build.create', $data);
    }

    public function store(Request $request){
        $pcBuildComponents = [
            [
                'component_name' => 'processor',
                'sub_category_id' => $request->input('processor')
            ],
            [
                'component_name' => 'motherboard',
                'sub_category_id' => $request->input('motherboard')
            ],
            [
                'component_name' => 'graphics_card',
                'sub_category_id' => $request->input('graphics_card')
            ],
            [
                'component_name' => 'cpu_cooler',
                'sub_category_id' => $request->input('cpu_cooler')
            ],
            [
                'component_name' => 'ram_1',
                'sub_category_id' => $request->input('ram_1')
            ],
            [
                'component_name' => 'ram_2',
                'sub_category_id' => $request->input('ram_2')
            ],
            [
                'component_name' => 'storage',
                'sub_category_id' => $request->input('storage')
            ],
            [
                'component_name' => 'power_supply',
                'sub_category_id' => $request->input('power_supply')
            ],
            [
                'component_name' => 'casing',
                'sub_category_id' => $request->input('casing')
            ],
            [
                'component_name' => 'monitor',
                'sub_category_id' => $request->input('monitor')
            ],
            [
                'component_name' => 'case_fan',
                'sub_category_id' => $request->input('case_fan')
            ],
            [
                'component_name' => 'ups',
                'sub_category_id' => $request->input('ups')
            ],
            [
                'component_name' => 'anti_virus',
                'sub_category_id' => $request->input('anti_virus')
            ],
            [
                'component_name' => 'mouse',
                'sub_category_id' => $request->input('mouse')
            ],
            [
                'component_name' => 'keyboard',
                'sub_category_id' => $request->input('keyboard')
            ],
            [
                'component_name' => 'headphone',
                'sub_category_id' => $request->input('headphone')
            ]
        ];
        
        foreach ($pcBuildComponents as $componentData) {
            PcBuildComponent::create($componentData);
        }

        return redirect()->route('admin.pc-build.index')->with('message','PC Build Category Setup  Successfully');;

    }

    public function edit(){
        $pcBuildMapping = PcBuildComponent::get();
        $sub_categories = SubCategory::get();
        $pc_builds  = [];
        foreach($pcBuildMapping as $pc_build){
            $pc_builds[$pc_build->component_name] = $pc_build['sub_category_id'];
        }

        $data = [
            "pc_builds" => $pc_builds,
            "sub_categories" => $sub_categories
        ];
        return view('backend.pc-build.edit', $data);

    }


    public function update(Request $request){
        $pcBuildComponents = [
            [
                'component_name' => 'processor',
                'sub_category_id' => $request->input('processor')
            ],
            [
                'component_name' => 'motherboard',
                'sub_category_id' => $request->input('motherboard')
            ],
            [
                'component_name' => 'graphics_card',
                'sub_category_id' => $request->input('graphics_card')
            ],
            [
                'component_name' => 'cpu_cooler',
                'sub_category_id' => $request->input('cpu_cooler')
            ],
            [
                'component_name' => 'ram_1',
                'sub_category_id' => $request->input('ram_1')
            ],
            [
                'component_name' => 'ram_2',
                'sub_category_id' => $request->input('ram_2')
            ],
            [
                'component_name' => 'storage',
                'sub_category_id' => $request->input('storage')
            ],
            [
                'component_name' => 'power_supply',
                'sub_category_id' => $request->input('power_supply')
            ],
            [
                'component_name' => 'casing',
                'sub_category_id' => $request->input('casing')
            ],
            [
                'component_name' => 'monitor',
                'sub_category_id' => $request->input('monitor')
            ],
            [
                'component_name' => 'case_fan',
                'sub_category_id' => $request->input('case_fan')
            ],
            [
                'component_name' => 'ups',
                'sub_category_id' => $request->input('ups')
            ],
            [
                'component_name' => 'anti_virus',
                'sub_category_id' => $request->input('anti_virus')
            ],
            [
                'component_name' => 'mouse',
                'sub_category_id' => $request->input('mouse')
            ],
            [
                'component_name' => 'keyboard',
                'sub_category_id' => $request->input('keyboard')
            ],
            [
                'component_name' => 'headphone',
                'sub_category_id' => $request->input('headphone')
            ]
        ];
        
        foreach ($pcBuildComponents as $componentData) {
            $componentName = $componentData['component_name'];
            $subCategoryId = $componentData['sub_category_id'];
        
            PcBuildComponent::updateOrCreate(
                ['component_name' => $componentName],
                ['sub_category_id' => $subCategoryId]
            );
        }

        return redirect()->route('admin.pc-build.index')->with('message','PC Build Mapping Updated  Successfully');

    }


}
