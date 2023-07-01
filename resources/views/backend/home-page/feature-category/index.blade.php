@extends('backend.layouts')
@section('title')
Home Page Setup
@endsection

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> Home Page Feature Category</h1>
      <p>Frontend Home Page  Feature Category Setup</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page  Feature Category Setup</a></li>
    </ul>
  </div>
@endsection

@section('content')
  <a href="{{ route('admin.home-page.feature-category.create')}}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Add New</a>

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                  <tr>
                    <td>
                      <img src="{{ asset($category->image) }}" height="48px" width="48px" alt="">
                    </td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->type }}</td>
                    <td>{{ $category->link }}</td>
                    <td>
                      <a href="{{ route('admin.home-page.feature-category.show', [$category->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                      <button onclick="deleteFeatureCategory({{ $category->id }})" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
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




@push('js')
    <script>
      function deleteFeatureCategory(id){
        cuteAlert({
            type: "question",
            title: "Are you sure? You want to delete this feature category?",
            message: "",
            confirmText: "Yes",
            cancelText: "Cancel"
          }).then((e)=>{        
            if ( e == ("confirm")){
                let token = $('meta[name="csrf-token"]').attr('content');
                loaderStart();
                $.ajax({
                    url: '/admin/home-page/feature-category/' + id,
                    method: 'DELETE',
                    data:{
                        _token: token
                    },
                    success: function(result){
                        loaderEnd();
                        if(result.success === true){
                            cuteSuccess("Feature Category delete successfully", "{{ route('admin.home-page.feature-category.index') }}" )
                        }
                    }
                });
            }
        })        
      }
    </script>
@endpush