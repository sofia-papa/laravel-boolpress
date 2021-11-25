@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="card-header">
                <h1>Contattaci</h1>
            </div>
            <div class="card-body">
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>        
                @endif
                <form action="{{route('admin.posts.store')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input class="form-control form-control-lg" type="text" 
                        placeholder="Inserisci il tuo nome" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email_address">Indirizzo email</label>
                        <input class="form-control form-control-lg" type="text" 
                        placeholder="Inserisci il tuo indirizzo email" id="email_address" name="email_address" value="{{ old('email_address') }}">
                    </div>

                    <div class="form-group">
                        <label for="message">Messaggio</label>
                        <textarea  class="form-control" type="textarea" placeholder="Inserisci il tuo messaggio"
                        id="message" name="message" >{{old('message') }} </textarea>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
@endsection