@extends('layouts.app')
@section('content')
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
                <li><a href="javascript:avoid(0)">Category</a></li>
                <li><a href="javascript:avoid(0)">Add Category</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                @include('includes.message')
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Category Add Form</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('manage-category') }}" class="btn btn-primary">All Category</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="POST" action="{{ route('save-category') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category" class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" placeholder="Category Name" data-validation="required">
                                            @error('category')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Save Category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--STRIPE-->
        </div>
    </div>
@endsection
