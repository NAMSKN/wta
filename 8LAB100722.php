<!DOCTYPE html>
<html>
    <head>
        <script> 
            funtion startTime()
            {
                var d=new Date();
                var h=d.gethours();
                var m=d.getMinutes();
                var s=d.getSeconds();
                document.getElementById("txt");innerHTML=h+":"+m+":"+s;
                setTimeOut('startTime()',1000);    
            }
        </script>
        <style type="text/css">
            h1
            {
                font-size:70px;
            }
        </style>
    </head>
    <body bgcolor="#349" text="white" onload="startTime()"><br>
    <h1 align="center">the time from the local system is:
    <spam id="txt">
<?php $today=date("H:i:s"); echo $today;?>
</spam></h1>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<h1>
<?php echo "The time from server is: ".date("h:m:s");?>
</h1>
</body>
</html>