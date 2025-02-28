<?php

GET("/",function(){
    views('home');
    // views("users/profile",[...$_GET]);
});

GET("/users/profile",function(){
    views("users/profile",[...$_GET]);
});

GET("/vf/index", function(){
    views("vf/index",[...$_GET]);
});

get('/login', function() {
    views('users/login');
});