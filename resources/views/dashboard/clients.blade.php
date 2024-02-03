@extends('layout.app-2')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between pt-3 pb-5">
            <h2>Clients</h2>
            <div>
                <a href="{{  route('client.add')}}" class="btn btn-primary py-2 px-4">Add Client</a>
            </div>
        </div>
        <div class="shadow p-4 rounded">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client Logo</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <img src="{{ asset('/uploads/'. $client->image)}}" style="width: 130px;height: auto;" alt="">
                        </td>
                        <td>{{ $client->title }}</td>
                        <td style="min-width: 200px">
                            <a href="/client/{{ $client->id }}/edit" class="btn btn-success d-inline-flex align-items-center gap-1 me-2">
                                <i class="fa-regular fa-pen-to-square"></i> Edit
                            </a>
                            <a href="/client/{{ $client->id }}/delete" class="btn btn-danger d-inline-flex align-items-center gap-1">
                                <i class="fa-solid fa-trash-can"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
