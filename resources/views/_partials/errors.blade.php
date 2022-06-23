@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <ul style="list-style: none">
                <li>{{$error}}</li>
            </ul>
        @endforeach
    </div>
@endif
