@extends('container.dashboard')

@section('content')
    <div class="car">                
        <div class="card">
            <div class="new">
                <button>New</button>
            </div>
            <div class="card1">
                <div class="cust">
                    <button>New Customer</button>
                </div>
                <div class="tek">
                    <button>New Teknisi</button>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="table">
            <h3>Table Manner</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Nomor Telepon</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customer as $data)
                    <tr>
                        <td>{{ $data->nama_pelanggan }}</td>
                        <td>{{ $data->number_phone }}</td>
                        <td>{{ $data->contact }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection