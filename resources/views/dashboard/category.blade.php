@extends('layoutdashboard.master')
@section('content')
<div id="main_content"> 
@include('layoutdashboard.navigationleft')

    <div class="page">
       
    @include('layoutdashboard.navigationtop')
        
                        <div class="card">
	                        <div class="card-header">
	                            <h3 class="card-title">Category</h3>
	                            <div class="card-options">
	                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
	                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
	                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
	                            </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('category.store')}}">
                                    <div class="row">
                                    	@csrf
                                        <div class="col-md-6 col-md-6 ">
                                                <label>category Name <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Save</button>
                                        </div>
                                </form>
                                
                            </div>
                        </div> 
                        <div class="section-body mt-6">
            <div class="container-fluid">
                <div class="row clearfix">
                	<div class="col-lg-12">
                		<div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead> 
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Created_at</th> 
                                        </tr>
                                   </thead>
                                    <tbody>
                                    	@foreach($categories as $category)
                                        <tr>
                                           
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at     }}</td> 
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                	</div>
                    <div class="col-lg-12">                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

        @endsection