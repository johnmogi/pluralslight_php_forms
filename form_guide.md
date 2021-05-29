
select, checkbox should have values
multiline select must be sent with name[];

htmlspecialchars - is escaping xss and injections
" < > &

ENT_QUOTES as an added constant also escapes ''
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);


naming the submit button and checking it on the go:
if (isset($_POST['submit'])){



https://app.pluralsight.com/course-player?clipId=02cb5ffa-591b-474b-987b-7075a3754b2e

