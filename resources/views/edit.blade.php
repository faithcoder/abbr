@extends('layout')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">

            <div class="form-area mb-5" style="width: 50%; margin: auto;">
                <h2 class="text-center mb-5">Update Abbreviation</h2>
                <form method="post" action="{{route('update', [$abbrArr->id])}}">
                    @csrf
                    <div class="form-group">

                        <input type="text" name="word" class="form-control" placeholder="word" value="{{$abbrArr->word}}"/>

                    </div>
                    <div class="form-group">

                        <input type="text" name="abbr" class="form-control" placeholder="abbreviation" value="{{$abbrArr->abbr}}"/>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Update Abbreviation</button>
                </form>

            </div>
        </div>
    </div>
</div>