<?php
GET("/index", function(){
    views('vf/index');
});

GET("/loginmove", function(){
    views('vf/loginshow');
});
GET("/joinmove", function(){
    views('vf/joinshow');
});
GET("/input", function(){
    views('vf/input');
});


GET("/logout", function(){
    views('cf/signout');
});