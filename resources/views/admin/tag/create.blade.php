@extends('layouts.wrapper-admin', ['title' => 'Tag'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Tag</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="w-25">
                        <form method="post" action="{{ route('admin.tag.store') }}">
                            @csrf
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label for="title">Enter Tag Name:</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Enter tag here">
                                    @error('title')
                                    <div class="text-danger">This field is required</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
