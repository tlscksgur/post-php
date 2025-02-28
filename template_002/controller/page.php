<?php
GET("/index", function(){
    views('vf/index');
});

GET("/login", function(){
    views('vf/loginshow');
});
GET("/join", function(){
    views('vf/joinshow');
});
GET("/input", function(){
    views('vf/input');
});


GET("/logout", function(){
    views('cf/signout');
});