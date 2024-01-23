@if ($errors->any())
    <div class="p-2 bg-yellow border-2 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<input name="title" type="text" value="{{old('title')}}" />