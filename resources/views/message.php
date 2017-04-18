<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
      var _token = '<?php echo csrf_token() ?>';
         function getMessage(){
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data: { _token : _token },
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>
   </head>
   
   <body>
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
       
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
         <input type="button" onClick="getMessage()" name="Click" value="Clk"/>
     
   </body>

</html>