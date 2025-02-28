<?php
POST("/", function(){
    views('vf/index');
});

POST("/users/profile", function () {
    extract($_GET);
    extract($_POST);
    echo $id;
});

POST("/page", function () {
    views("vf/createpage");
});

POST('/file', function(){
    views("vf/file");
});

POST("/create", function(){
    views('cf/create');
});

POST("/lologin", function(){
    views('cf/login');
});

POST("/join", function(){
    views('cf/join', [...$_POST]);
});