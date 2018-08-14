<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/css/login.css">
</head>
<body>
<div class="main">
    <div class="logo">
        <img src="/Public/img/logo.png" alt="">
    </div>
    <div class="sign-box">
        <div class="sign-box-head">Sign In</div>
        <div class="sign-box-input">
            <p>邮箱：</p>
            <input type="text" name="username" id="username" placeholder="请输入您的邮箱">
        </div>
        <div class="sign-box-input">
            <p>密码：</p>
            <input type="password" name="pwd" id="pwd" placeholder="请输入您的密码">
        </div>
        <div class="sign-box-link">
            <a href="/Home/index/usercenter">Sign In</a>
        </div>

    </div>
</div>
</body>
</html>