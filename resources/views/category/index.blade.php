@extends('layouts.master') 
@section('content')

    <h3>All Category</h3>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#insert">
        Add New
    </button>
    <!-- Modal Insert-->
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Category</h4>
                </div>
                <form action="{{ route('category.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title"/>
                        </div>
                        <div class="form-group">
                            <label for="title">Description</label>
                            <textarea name="descrip" id="des" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Show Table -->
    <table class="table table-responsive">
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Option</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat )
                <tr>
                    <td>{{ $cat->title }}</td>
                    <td>{{ $cat->description }}</td>
                    <td>
                        <a href="{{route('category.edit', $cat->id)}}" class="btn btn-info" data-toggle="modal" data-target="#edit">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal Edit-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                </div>
                <form action="{{ route('category.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="title">Description</label>
                            <textarea name="descrip" id="des" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection