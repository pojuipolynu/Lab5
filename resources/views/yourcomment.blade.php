@extends ('template.recipetemplate')

@section('content')
    <h1 style="color:#535E4B;">Твій коментар (⊙_⊙)</h1>
    @if($vid)
        <p style="color:#535E4B;">Що ви хотіли сказати: {{$vid}}</p>
    @endif
@endsection