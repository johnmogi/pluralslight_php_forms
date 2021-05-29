<?php

$name='';
$password='';
$gender = '';
$color ='';
$languages = [];
$comments = '';
$tc ='';

if (isset($_POST['submit'])){
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    if(isset($_POST['color'])){
        $color = $_POST['color'];
    }
    if(isset($_POST['languages'])){
        $languages = $_POST['languages'];
    }
    if(isset($_POST['comments'])){
        $comments = $_POST['comments'];
    }
    if(isset($_POST['tc'])){
        $tc = $_POST['tc'];
    };

printf('User Name: %s
    <br> Password: %s
    <br> gender: %s
    <br> Color: %s
    <br> Language(s): %s
    <br> Comments: %s
    <br> T&amp;C: %s',
    htmlspecialchars($name, ENT_QUOTES),
    htmlspecialchars($password, ENT_QUOTES),
    htmlspecialchars($gender, ENT_QUOTES),
    htmlspecialchars($color, ENT_QUOTES),
    htmlspecialchars(implode('', $languages), ENT_QUOTES),
    htmlspecialchars($comments, ENT_QUOTES),
    htmlspecialchars($tc, ENT_QUOTES));
};
?>

<form action=""
method="post"
>
user Name: <input type="text" name="name" id=""><br/>
Password: <input type="password" value="password"><br/>
Gender: <input type="radio" name="gender" value="male">male</input>
<input type="radio" name="gender" value="female">female</input>
<br/>
Favorite color: <select name="color">
<option value="">Please select</option>
<option value="#f00">red</option>
<option value="#0f0">green</option>
<option value="#00f">blue</option>
</select>
<br/>

Languages spoken: <select name = "Languages[]" multiple size="3">
<option value="en">English</option>
<option value="fr">French</option>
<option value="it">Italian</option>
</select>
<br/>
comments: <textarea name="comments"></textarea>
<br/>

I accept T&amp;C
<input type="checkbox" name="tc" value="ok">
<input type="submit" name="submit" value="Register">
</form>
