@extends ('template.recipetemplate')
@section('content')
<p style="color:#535E4B;">Подивиться, які страви прокоментував користувач:</p><br>
@if($errors->any())
    <div>
        <ul style="list-style-type: none; display: contents; color: #850000; margin-left: 10px;">
          @foreach($errors->all() as $error)
            <li style="padding: 0; margin: 0;text-align: center;">{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif
    <form style="display: flex; flex-direction: column; margin-left: 10px;" action="/sort/submit" method="post">
        @csrf
        <input style="background-color:#535E4B; border:solid #47533b; border-radius:8px; width: 15%; height:70px;" type="text" name="user_name" placeholder="Ім'я" id="vidhuk3">
        <button style="background-color:#535E4B; border:solid #47533b; border-radius:4px; width: 100px; margin-top:10px; margin-bottom:75px;" type="submit">Шукати</button>
    </form>
@endsection