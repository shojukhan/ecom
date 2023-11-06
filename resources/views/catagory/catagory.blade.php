@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <div class="row">
                        <section>
                            <div class="row">
                                <div class="col-lg-3 col-sm-12"></div>
                                <div class="col-lg-6 col-sm-12 border rounded bg-light mt-5 shadow p-3 mb-5">
                                    <h3><span class="d-flex justify-content-center text-warning"> Catagory Upload</span></h3>
                                    <form class="container m-2 p-3" method="POST" enctype="multipart/form-data"
                                        action="{{ route('catagory_store') }}">
                                        @method('POST')
                                        @csrf

                                        <div class="mb-3">
                                            <label for="catagory" class="form-label">Catagory name </label>
                                            <input type="text" class="form-control" name="catagoryName"required>
                                        </div>


                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Select image</label>
                                            <input class="form-control" type="file" name="image">
                                        </div>

                                        <div class="mb-3">
                                            <label for="icon" class="form-label">Select Icon</label>
                                            <input class="form-control" type="file" name="icon">
                                        </div>

                                        <div class="d-grid col-3 mx-auto d-flex justify-content-evenly">
                                            <button class="btn btn-primary " type="submit" name="Save">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-sm-12"></div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
