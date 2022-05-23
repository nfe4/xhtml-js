<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<input type="checkbox"  data-toggle="toggle" data-onstyle="success" data-offstyle="danger"  id="h_activate" name="host" value="1">
<p id="just"></p>   

<script>
    $('#h_activate').on('change', function(event, state) {

var checkStatus = this.checked ? 'ON' : 'OFF';

$.ajax({
         url:"check.php",
         method:"POST",
         data:{"toogle": checkStatus},
         success:function(data){
             
             $('#just').html(data);
             
         }
     });

});
    </script>

</body>
</html>