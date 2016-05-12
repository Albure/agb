@extends('unlacedlayout')

@section('content')

    <div class="row clr pdg">
        <form action="{{route('contact.post')}}" method="post" class="col-md-6">
            {{csrf_field()}}
            <div class="form-group pdg2">
                <label for="Name">Your Name:</label>
                <input type="text" name="Name" id="Name" class="form-control" value="{{old('Name')}}">
            </div>

            <div class="form-group pdg2">
                <label for="Email">Your Email:</label>
                <input type="text" name="Email" id="Email" class="form-control" value="{{old('Email')}}">
            </div>

            <div class="form-group pdg2">
                <label for="message">Message:</label>
                <textarea type="text" name="message" id="message" class="form-control" row="50">
                    {{old('message')}}
                </textarea>
                <!--<input type="text" name="Message" id="Message" class="form-control" value="{{old('Message')}}">-->
            </div>

                <input type="submit" class="btn btn-success">
        </form>
    </div>

@stop