@extends("master")
@section("content")
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route("storeUpload")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input name="gallery"  class="form-control" type="file">
                </div>
                <div class="form-group">
                    <input placeholder="Enter name" name="name"  class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input placeholder="Enter price" name="price"  class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input placeholder="Enter category" name="category"  class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input placeholder="Enter description" name="description"  class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input value="Upload"  class="btn btn-info btn-block" type="submit">
                </div>
            </form>
            <a class="btn btn-info btn-block" href="{{route("products")}}">
                View Products
            </a>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
