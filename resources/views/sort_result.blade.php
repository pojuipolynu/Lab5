@extends ('template.recipetemplate')
@section('content')
<p style="color:#535E4B;">Людина коментувала такі страви:</p>
@if($check)
    @foreach($check->all_dish as $x) 
            <p style="color:#535E4B;"> {{$x->dish_name}}</p>
    @endforeach
@endif
@endsection