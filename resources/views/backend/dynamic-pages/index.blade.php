@extends('backend.layouts')
@section('title')
Home Page Setup
@endsection

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> About Us Page</h1>
      <p>About Us Page Setup</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">About Us Page Setup</a></li>
    </ul>
  </div>
@endsection

@section('content')
  @if(count($dynamic_pages) > 0)
    <a href="{{ route('admin.dynamic-page.edit')}}" class="btn btn-primary mb-3"> <i class="fa fa-pencil"></i> Edit</a>
  @else 
    <a href="{{ route('admin.dynamic-page.create')}}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Add New</a>
  @endif
  

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Page-Name</th>
                  <th>Page-Content</th>
                </tr>
                @foreach($dynamic_pages as $dynamic_page)
                    <tr>
                        <td>{{ $dynamic_page->page_name }}</td>
                        <td>{!! $dynamic_page->page_content !!}</td>
                    </tr>
                @endforeach
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

