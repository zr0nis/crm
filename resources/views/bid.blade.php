@extends('parts/html_layout')
@section('title')
Заявка
@endsection
@section('content')
<?php session_start();?>
<form action="#" method="post">

	<input type="text" name="username" value="<?=$_SESSION['username'] ?>" placeholder="Введите имя" class="form-control">
		<div class="text-danger"><?=$_SESSION['username_error_min'] ?></div>
	<br><input type="email" name="email" value="<?=$_SESSION['email'] ?>" placeholder="Введите email" class="form-control">
			<div class="text-danger"><?=$_SESSION['email_error_min'] ?></div>
	<br><input type="submit" value="Отправить" class="btn btn-success">
</form>
@endsection
