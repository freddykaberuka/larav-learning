@extends('layoutdashboard.master')
@section('content')
<div id="main_content"> 
@include('layoutdashboard.navigationleft')

    <div class="page">
       
    @include('layoutdashboard.navigationtop')
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                	<div class="col-lg-8">
                		<div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead> 
                                        <tr>
                                            <th class="w30">&nbsp;</th>
                                            <th>title</th>
                                            <th>contents</th> 
                                            <th>image</th>
                                            <th>views</th>
                                            <th>description</th>
                                        </tr>
                                   </thead>
                                    <tbody>
                                    	@foreach($blogs as $blog)
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->contents}}</td> 
                                            <td>{{$blog->image}}</td>
                                            <td>{{$blog->views}}</td>
                                            <td>{{$blog->description}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                	</div>
                    <div class="col-lg-12">
                        <div class="card">
	                        <div class="card-header">
	                            <h3 class="card-title">Blog</h3>
	                            <div class="card-options">
	                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
	                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
	                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
	                            </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('blog.store')}}">
                                    <div class="row">
                                    	@csrf
                                        <div class="col-md-12 col-sm-12">
                                                <label>Blog title <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="title">
                                            </div>
                                            <select name="category_id" class="form-control">  
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="col-md-12 col-sm-12">
                                                <label>Contents <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="contents">
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label>Images <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="file" name="image">
                                            </div>
                                            @error('image')
                                                {{$message}}
                                            @enderror
                                            {{-- <div class="col-md-12 col-sm-12">
                                                <label>Views <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="views">
                                            </div> --}}
                                            <div class="col-md-12 col-sm-12">
                                                <label>Description <span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="description">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Save</button>

                                        </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

        @endsection