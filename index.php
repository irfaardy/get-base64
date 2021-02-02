<!DOCTYPE html>
<html>
<head>
  <title>AMBIL BASE64</title>
  <!-- 
  @author Irfa Ardiansyah
  @email irfa.backend@protonmail.com
   -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>
<body>
<form>
  <input type="text" placeholder="URL" id="url"  name="url"><br>
  <textarea id="result"></textarea><br>
  <button type="button" onclick="toDataURL(document.getElementById('url').value)">Get Base64</button>
</form>
</body>
<script type="text/javascript">
 function toDataURL(url_)
 {
   $.ajax({
            url: url_,
            type: "GET",
            crossDomain: true,
           headers: {
                "Access-Control-Allow-Origin": true,
                "Access-Control-Allow-Credentials": true,
            },
            xhrFields: {
                withCredentials: true
            },
            mimeType: "text/plain; charset=x-user-defined"
        }).done(function( data, textStatus, jqXHR ) {
            $("#result").val('data:image/jpeg;base64,' + base64encode(data));
        }).fail(function( jqXHR, textStatus, errorThrown ) {
            alert("fail: Cek Console");
        });
 }
</script>
</html>