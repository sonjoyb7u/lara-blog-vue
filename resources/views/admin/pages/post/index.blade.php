@extends('layouts.admin.master')

@section('title', 'Manage Post || ')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item {{ request()->is('home/post/index') ? 'active' : '' }}"><a href="{{ route('home.post.index') }}">Manage Post</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                @includeIf('alert-message.message')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Post List of Datatable</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="postDataTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>User Name</th>
                                <th>Category Name</th>
                                <th>Post Title</th>
                                <th>Post Description</th>
                                <th>Post Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->category->name }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->desc }}</td>
                                    <td>
                                        <img src="{{ $data->image ? asset('assets/images/post/'.$data->image) : asset('assets/images/post/default.png') }}" alt="Category Image" width="80" height="80px">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="postStatusToggle" data-id="{{ $data->id }}" {{ $data->status == 'published' ? 'checked' : '' }}  data-toggle="toggle" data-size="xs" data-on="Published" data-off="Draft" data-onstyle="success" data-offstyle="info" >
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info btn-sm" id="showPost" title="View Post"><i class="fas fa-eye"></i></button>
{{--                                        <a href="{{ route('category.edit', base64_encode($data->id)) }}" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>--}}
{{--                                        @php--}}
{{--                                            $count_cat_id = App\Models\Product::with('category')->where('category_id', $data->id)->select('category_id')->count();--}}
{{--                                        @endphp--}}
{{--                                        @if($count_cat_id < 1)--}}
{{--                                            <a href="{{ route('category.delete', base64_encode($data->id)) }}" id="deleteData" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></a>--}}
{{--                                        @endif--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sl No.</th>
                                <th>User Name</th>
                                <th>Category Name</th>
                                <th>Post Title</th>
                                <th>Post Description</th>
                                <th>Post Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection



