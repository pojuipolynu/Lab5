@extends ('template.recipetemplate')
@section('content')
@if($r)
    @foreach($r as $x) 
            <p style="color:#535E4B;">Користувач каже:</p><br>
            <p style="color:#535E4B;">{{$x->text}}. Про страву {{$x->dish_name->dish_name}}</p><br>
    @endforeach
@endif
@if($errors->any())
    <div>
        <ul style="list-style-type: none; display: contents; color: #850000; margin-left: 10px;">
          @foreach($errors->all() as $error)
            <li style="padding: 0; margin: 0;text-align: center;">{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif
    <form style="display: flex; flex-direction: column; margin-left: 10px;" action="/db/submit" method="post">
        @csrf
        <input style="background-color:#535E4B; border:solid #47533b; border-radius:8px; width: 15%; height:50px; margin-bottom:10px;" type="text" name="dish_id" placeholder="Назва страви" id="vidhuk">
        <input style="background-color:#535E4B; border:solid #47533b; border-radius:8px; width: 15%; height:50px; margin-bottom:10px;" type="text" name="commentator" placeholder="Ім'я" id="vidhuk2">
        <input style="background-color:#535E4B; border:solid #47533b; border-radius:8px; width: 35%; height:300px;" type="text" name="comm" placeholder="Коментар" id="vidhuk1">
        <button style="background-color:#535E4B; border:solid #47533b; border-radius:4px; width: 100px; margin-top:10px; margin-bottom:75px;" type="submit">Коментувати</button>
    </form>
@endsection