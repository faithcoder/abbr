@extends('layout')

@section('content')
    <h2 class="text-center mt-5 mb-5">ABBREVIATON ARCHIVE</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    {{session('msg')}}
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Abbreviation</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abbrArr as $abbr)
                    <tr>
                        <td>{{$abbr->word}}</td>
                        <td>{{$abbr->abbr}}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection