@extends('dashbord')
@section('adminContrl')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 border rounded shadow">
                <div>
                    @if (session('massage'))
                        <div class="alert alert-success">
                            {{ session('massage') }}
                        </div>
                    @endif
                    <div class="row">
                        <h3><span class="d-flex justify-content-center text-warning"> Product List</span></h3>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Discription</th>
                                    <th scope="col">Prise</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td scope="row">{{ $data->id }}</td>
                                        <td>{{ $data->pro_name }}</td>
                                        <td>{{ $data->pro_select }}</td>
                                        <td>{{ $data->purchas_prise }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
