@extends ('template.recipetemplate')

@section('content')
<h1 style="color:#535E4B;">Хо' прокоментувати?</h1>
@if($errors->any())
    <div>
        <ul style="list-style-type: none; display: contents; color: #850000; margin-left: 10px;">
          @foreach($errors->all() as $error)
            <li style="padding: 0; margin: 0;text-align: center;">{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif
    <form style="display: flex; flex-direction: column; margin-left: 10px;" action="/dishes/submit" method="post">
        @csrf
        <input style="background-color:#535E4B; border:solid #47533b; border-radius:8px; width: 35%; height:300px;" type="text" name="comm" placeholder="Коментар" id="vidhuk">
        <button style="background-color:#535E4B; border:solid #47533b; border-radius:4px; width: 100px; margin-top:10px;" type="submit">Коментувати</button>
    </form>
@endsection