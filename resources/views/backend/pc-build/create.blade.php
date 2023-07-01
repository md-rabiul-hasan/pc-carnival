@extends('backend.layouts')
@push('css')
<style>
   .select2 {
      width: 100%!important;
   }
</style>
@endpush
@section('title')
PC Build Mapping
@endsection
@push('css')
   <style>
      .add-more-field {
         display: flex;
         justify-content: space-between;
      }
   </style>
@endpush
@section('breadcrumb')
<div class="app-title">
   <div>
      <h1><i class="fa fa-bell-o"></i> PC Build Mapping</h1>
      <p>PC Build Sub Category Mapping</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">PC Build Mapping</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.pc-build.store') }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Mapping PC Build Core Components</h3>
            <div class="tile-body">
                <div class="form-group">
                    <label class="control-label">Processor <span style="color:red;">**</span></label>
                    <select class="form-control select2" name="processor" id="processor" required>
                       <option value="">Select Processor</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div> 
                 <div class="form-group">
                    <label class="control-label">Motherboard <span style="color:red;">**</span></label>
                    <select class="form-control select2" name="motherboard" id="motherboard" required>
                       <option value="">Select Motherboard</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>    
                 <div class="form-group">
                    <label class="control-label">Graphics Card <span style="color:red;">**</span></label>
                    <select class="form-control select2" name="graphics_card" id="graphics_card" required>
                       <option value="">Select Graphics Card</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label class="control-label">CPU Cooler <span style="color:red;">**</span></label>
                    <select class="form-control select2" name="cpu_cooler" id="cpu_cooler" required>
                       <option value="">Select CPU Cooler</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label class="control-label">RAM-1<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="ram_1" id="ram_1" required>
                       <option value="">Select RAM-1</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>
                
                 <div class="form-group">
                    <label class="control-label">RAM-2<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="ram_2" id="ram_2" required>
                       <option value="">Select RAM-2</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>

                 <div class="form-group">
                    <label class="control-label">Storage<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="storage" id="storage" required>
                       <option value="">Select Storage</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>

                 <div class="form-group">
                    <label class="control-label">Power Supply<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="power_supply" id="power_supply" required>
                       <option value="">Select Power Supply</option>
                       @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>

                 <div class="form-group">
                    <label class="control-label">Casing<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="casing" id="casing" required>
                       <option value="">Select Casing</option>
                       @foreach($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                       @endforeach
                    </select>
                 </div>

            </div>
         </div>
      </div> 
      <div class="col-md-6">
        <div class="tile">
           <h3 class="tile-title">Peripherals & Others</h3>
           <div class="tile-body">
               <div class="form-group">
                   <label class="control-label">Monitor <span style="color:red;">**</span></label>
                   <select class="form-control select2" name="monitor" id="monitor" required>
                      <option value="">Select Monitor</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div> 
                <div class="form-group">
                   <label class="control-label">Case Fan <span style="color:red;">**</span></label>
                   <select class="form-control select2" name="case_fan" id="case_fan" required>
                      <option value="">Select Case Fan</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div>    
                <div class="form-group">
                   <label class="control-label">UPS<span style="color:red;">**</span></label>
                   <select class="form-control select2" name="ups" id="ups" required>
                      <option value="">Select UPS</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div>
                <div class="form-group">
                   <label class="control-label">Anti Virus <span style="color:red;">**</span></label>
                   <select class="form-control select2" name="anti_virus" id="anti_virus" required>
                      <option value="">Select Anti Virus</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div>
                <div class="form-group">
                   <label class="control-label">Mouse<span style="color:red;">**</span></label>
                   <select class="form-control select2" name="mouse" id="mouse" required>
                      <option value="">Select Mouse</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div>
               
                <div class="form-group">
                   <label class="control-label">Keyboard<span style="color:red;">**</span></label>
                   <select class="form-control select2" name="keyboard" id="keyboard" required>
                      <option value="">Select Keyboard</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div>

                <div class="form-group">
                   <label class="control-label">Headphone<span style="color:red;">**</span></label>
                   <select class="form-control select2" name="headphone" id="headphone" required>
                      <option value="">Select Headphone</option>
                      @foreach($sub_categories as $sub_category)
                       <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                      @endforeach
                   </select>
                </div>

           </div>
        </div>
     </div>    
   </div>
   <div class="tile-footer">            
      <button class="btn btn-danger" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</button>
      &nbsp;&nbsp;&nbsp;
      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
   </div>
</form>
@endsection
@push('js')
<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/select2.min.js')}}"></script>
<script>
   // Initialize Select2 plugin
   $('.select2').select2();

</script>
@endpush