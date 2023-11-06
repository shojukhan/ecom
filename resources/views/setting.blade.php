@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('massage'))
    <div class="alert alert-success">
        {{ session('massage') }}
    </div>
    @endif

    <form action="">
        <div>
            <div class="row">
                <h3>1.Choose Your Template:</h3>
                <div class="border rounded card shadow bg-light col-3  p-1">
                    <img src="{{ asset('images/tem.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
                <div class="border rounded card shadow bg-light col-3  p-1">
                    <img src="{{ asset('images/tem.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
                <div class="border rounded card shadow bg-light col-3  p-1">
                    <img src="{{ asset('images/tem.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
                <div class="border rounded card shadow bg-light col-3  p-1">
                    <img src="{{ asset('images/tem.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
            </div>
            <div class="row">
                <h3><i class="fa fa-upload" aria-hidden="true">Upload your Logo</i></h3>
                <div class="col-12 d-flex gap-3">
                    <input type="file" id="imageInput" accept="image/*" class="rounded form-control m-1 p-1 input-logo w-50">
                    <div id="imagePreview"></div>
                </div>
                <br>
                <div class="col-12 d-flex gap-3">
                    <input type="file" id="faviconInput" accept="image/*" class="rounded form-control m-1 p-1 input-logo w-50">
                    <div id="favicomPreview"></div>
                </div>
            </div>
            <!-- upload slider image  -->
            <div class="row">
                <h3>Slider Image</h3>
                <div class="col-12 d-flex justify-content-between">
                    <input type="file" placeholder="slider Image" class="border rounded form-control m-1 p-1" required>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label">
                                inactive
                            </label>
                        </div>
                        <div>
                            <button id="click" class="btn btn-outline-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="append"></div>
            {{-- ========================================footer setup section==============================================   --}}
            <div class="row">
                <div class="border rounded card shadow bg-light col-3 p-1 h-25">
                    <img class="h-50" src="{{ asset('images/footer.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
                <div class="border rounded card shadow bg-light col-3 p-1 h-25">
                    <img class="h-50" src="{{ asset('images/footer.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
                <div class="border rounded card shadow bg-light col-3 p-1 h-25">
                    <img class="h-50" src="{{ asset('images/footer.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
                <div class="border rounded card shadow bg-light col-3 p-1 h-25">
                    <img class="h-50" src="{{ asset('images/footer.jpg') }}" alt="logo">
                    <div class="form-check d-flex justify-content-center bg-secondary border rounded shadow">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-style mb-2 form-control">Save</button>
            <button type="submit" class="btn-style mb-2 form-control">Cancel</button>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</div>
@endsection