@extends('backend.layouts')
@section('title')
Home Page Setup
@endsection

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> Home Page Adds</h1>
      <p>Frontend Home Page Product Setup</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page Adds Setup</a></li>
    </ul>
  </div>
@endsection

@section('content')

  <a href="{{ route('admin.home-page.adds.create')}}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Add New</a>
 

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Banner</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($adds as $add)
                    <tr>
                        <td>{{ $add->title }}</td>
                        <td> <img src="{{ asset($add->banner) }}" alt=""></td>
                        <td>{{ $add->link }}</td>
                        <td>
                          <a href="{{ route('admin.home-page.adds.edit', $add->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                          <button onclick="deleteAdds({{ $add->id }})" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
      function deleteAdds(id){
        cuteAlert({
            type: "question",
            title: "Are you sure? You want to delete this adds?",
            message: "",
            confirmText: "Yes",
            cancelText: "Cancel"
          }).then((e)=>{        
            if ( e == ("confirm")){
                let token = $('meta[name="csrf-token"]').attr('content');
                loaderStart();
                $.ajax({
                    url: '/admin/home-page-adds/delete/' + id,
                    method: 'DELETE',
                    data:{
                        _token: token
                    },
                    success: function(result){
                        loaderEnd();
                        if(result.success === true){
                            cuteSuccess("Home Page Adds  delete successfully", "{{ route('admin.home-page.adds.index') }}" )
                        }
                    }
                });
            }
        })        
      }
    </script>
@endpush