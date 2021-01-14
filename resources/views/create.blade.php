@extends('layout')
{{--<form method="post" action="save">
    @csrf
    <input type="text" name="word" placeholder="word">
    <br>
    <input type="text" name="abbr" placeholder="abbreviation">
    <br>
    <input type="submit" name="submit" value="Add Abbreviation"/>
</form>--}}


<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-area mb-5" style="width: 50%; margin: auto;">
                <h2 class="text-center">Add New Abbreviation</h2>
                <form method="post" action="save">
                    @csrf
                    <div class="form-group">

                        <input type="text" class="form-control" name="word" id="word" aria-describedby="emailHelp" placeholder="Word or Word Group">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" id="abbr" name="abbr" placeholder="Abbreviation">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Add Abbreviation</button>
                </form>
                <br>
                <h4 class="badge-success">{{session('msg')}}</h4>
                <br>
            </div>
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Abbreviation</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($abbrArr as $abbr)
                    <tr>
                        <td>{{$abbr->word}}</td>
                        <td>{{$abbr->abbr}}</td>
                        <td><a href="edit/{{$abbr->id}}">Edit</a></td>
                        <td><a href="delete/{{$abbr->id}}">Delete</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>