@extends ('template.recipetemplate')

@section('content')
    <h1 style="color:#535E4B;">Страви</h1>
    @if($food)
        @foreach($food as $value)
            <p style="color:#535E4B;">Страва: {{$value}}</p><br>
        @endforeach
    @endif
@endsection