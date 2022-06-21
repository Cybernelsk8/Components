@if ($errors->any())
    <div class="text-red-600 font-bold text-xs">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif