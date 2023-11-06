@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div>
                    <div class="row">
                        <section>
                            <div class="row">
                                <div class="col-lg-2 col-sm-12"></div>
                                <div class="col-lg-8 col-sm-12 border rounded bg-light mt-2 shadow p-3 mb-5">
                                    <h3><span class="d-flex justify-content-center text-warning"> Product Upload</span></h3>
                                    @if (session('massage'))
                                    <div class="alert alert-success">
                                        {{ session('massage') }}
                                    </div>
                                @endif
                                    <form class="container m-2 p-3" method="POST" enctype="multipart/form-data"
                                        action="{{ route('productstore') }}">
                                        @method('POST')
                                        @csrf
                                        <div class="mb-2">
                                            <label for="proname" class="form-label">Product name </label>
                                            <input type="text" class="form-control" name="pro_name">
                                        </div>
                                        <select class="form-select" name="pro_select" aria-label="Default select example">
                                            <option >select one</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                        <div class="mb-2">
                                            <label for="buy" class="form-label">purchas prise</label>
                                            <input  name="purchas_prise" type="number" class="form-control" placeholder="00">
                                        </div>
                                        <div class="mb-2">
                                            <label for="buy" class="form-label">Sell prise</label>
                                            <input name="sell_prise" type="number" class="form-control" placeholder="00">
                                        </div>

                                        <div>
                                            <div class="d-flex justify-content-evenly gap-2">
                                                <input name="pro_qnt" type="number" class="form-control" placeholder="Qnt">
                                                <input name="pro_stock" type="number" class="form-control"
                                                    placeholder="in stock">
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="messege" class="form-label">Product description</label>
                                            <textarea name="pro_descriotion" class="form-control" rows="2"></textarea>
                                        </div>

                                        <div class="mb-2">
                                            <label for="formFile" class="form-label">Select image</label>
                                            <input id="imageInput" accept="image/*" name="proImg" class="form-control"
                                                type="file">
                                            <div class="product_img" id="imagePreview"></div>
                                        </div>

                                        <div class="d-grid col-3 mx-auto d-flex justify-content-evenly gap-3">
                                            <button class="btn btn-primary " type="submit" name="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-2 col-sm-12"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function() {
            const file = imageInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = new Image();
                    img.src = e.target.result;
                    imagePreview.innerHTML = '';
                    imagePreview.appendChild(img);
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = 'No image selected';
            }
        });
    </script>
@endsection
