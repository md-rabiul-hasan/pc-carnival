@extends('backend.layouts')
@section('title')
Home Page Setup
@endsection

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> PC Build Mapping</h1>
      <p>Frontend Home Page Product Setup</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#"> PC Build Mapping</a></li>
    </ul>
  </div>
@endsection

@section('content')
@if(count($pc_build_components) > 0)
<a href="{{ route('admin.pc-build.edit')}}" class="btn btn-primary mb-3"> <i class="fa fa-pencil"></i> Edit</a>
@else 
  <a href="{{ route('admin.pc-build.create')}}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Add New</a>
@endif
  

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Component</th>
                  <th>Sub-Category</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pc_build_components as $pc_build_component)
                  <tr>
                    <td>{{ Str::upper($pc_build_component->component_name) }}</td>
                    <td>{{ $pc_build_component->subCategory->title }}</td>
                    <td>{{ $pc_build_component->status }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

