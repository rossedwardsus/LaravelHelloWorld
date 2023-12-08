<!DOCTYPE html>
<a href="/add_friend">Add Friend</><a href="/add_contact">Add Contact</a>
<br/>
bank account
<br>
<form action="/formpost" method="post">
@csrf
email<input name="email" type="text">
<br>
<input type="submit">
</form>