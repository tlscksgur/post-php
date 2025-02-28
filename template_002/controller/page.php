<?php

GET("/",function(){
    views('home');
    // views("users/profile",[...$_GET]);
});

GET("/users/profile",function(){
    views("users/profile",[...$_GET]);
});

get('/login', function() {
    views('users/login');
});