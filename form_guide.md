
select, checkbox should have values
multiline select must be sent with name[];

htmlspecialchars - is escaping xss and injections
" < > &

ENT_QUOTES as an added constant also escapes ''
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);


naming the submit button and checking it on the go:
if (isset($_POST['submit'])){

todo: languages select validation not working- revise.

is_array

user Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>"><br/>
prefill inputs with html escaping characters.


prefill check box and radio:
Gender: <input type="radio" name="gender" value="male"<?php
if($gender === 'male') {
    echo ' checked';
}?>

regex

php.net/pcre

preg_match returns a 0 / 1 


stopped on :
https://app.pluralsight.com/course-player?clipId=59d23e8a-b5a8-42af-9d68-968db25a5c9d

todo: languages + revise regex from scratch

