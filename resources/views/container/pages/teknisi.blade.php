@extends('container.dashboard')

@section('content')
    <div class="car">                                
        <div class="table">
            <h3>Table Teknisi</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Teknisi</th>
                        <th>Status</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($teknisi as $data)
                    <tr>
                        <td>{{ $data->nama_teknisi }}</td>
                        <td>{{ $data->status }}</td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection