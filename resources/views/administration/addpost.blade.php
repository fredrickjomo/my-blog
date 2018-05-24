@extends('layouts.admin')
<style>
.jumbotron-fluid label{
    color: red;
}
    textarea{
        height: 150px;
    }

</style>
@section('header')
    Add a new post
    @endsection
@section('page-icon')
    <i class="fa fa-plus"></i>
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.success')
            <div class="jumbotron-fluid">
                <form method="post" action="{{route('administration.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="category">Category<span class="required">*</span></label>
                        <select id="category"  class="form-control " name="category" required>
                            <option value="">---Select Category---</option>
                            <option value="Celebrity">Celebrity</option>
                            <option value="Politics">Politics</option>
                            <option value="Sports">Sports</option>
                            <option value="Trends">Trends</option>
                            <option value="Campus Vibe">Campus Vibe</option>
                            <option value="Relationships">Relationships</option>
                            <option value="Health">Health</option>
                            <option value="Betting tips">Betting tips</option>
                            <option value="Movies">Movies</option>
                            <option value="Unclassified">Unclassified</option>

                        </select>
                        @if ($errors->has('category'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="title">Post Title<span class="required">*</span> </label>
                        <input placeholder="Post Title" id="title" required name="title" spellcheck="false" class="form-control" />
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="photo">Post Caption<span class="required">*</span> </label>
                        <input placeholder="Post Caption" id="photo" type="file" name="photo" spellcheck="false" class="form-control" value=""/>
                        @if ($errors->has('photo'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Description<span class="required">*</span> </label>
                        <textarea placeholder="Post Description" id="" required name="description" spellcheck="false" class="form-control"></textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg col-md-4" value="POST" onclick="if (form.photo.value==''){

                        return  confirm('Are you sure you want to upload a post without a caption?');}"/>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @endsection

