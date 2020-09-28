@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <form action="">
                <div class="formgroup">
                    <label for="input"></label>
                    <input type="text" name="input" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Editarf</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
        
            </form>
            <Thought-component></Thought-component>
            
        </div>
        <Thought-component>asdasd</Thought-component>

    </div>
</div>
@endsection
