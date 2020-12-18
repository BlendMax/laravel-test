@extends('layouts.layout')

@section('content')
    <section>
        <div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">from_currency_id</th>
                    <th scope="col">to_currency_id</th>
                    <th scope="col">ratio</th>
                    <th scope="col">Updated Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($rates as $rate)
                        <tr>
                            <th scope="row">{{$rate->id}}</th>
                            <td>{{$rate->from_id}}</td>
                            <td>{{$rate->to_id}}</td>
                            <td>{{$rate->ratio}}</td>
                            <td>{{$rate->update_date}}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

