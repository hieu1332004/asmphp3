@extends('layouts.app')
<div class="container mt-5">
    <h2>Đăng Ký</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Họ và tên</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
</div>
