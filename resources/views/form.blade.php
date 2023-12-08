<!DOCTYPE html>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/formpost" method="post">
@csrf
email<input name="email" type="text">
<br>
<input type="submit">
</form>
<ul>
    <li>{{ $users }}</li>
</ul>
