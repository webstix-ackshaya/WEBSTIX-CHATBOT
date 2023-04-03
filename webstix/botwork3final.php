<?php
include('classes/db_config.php');
include ("classes/classes_lib.php");
    $texts = $_POST['texts'];
    $text1 = $_POST['text1'];
    $text2= $_POST['text2'];
    $bt=new bot();
    $z="";
    if($text2)
    {
      $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
      $s2=$bt->insert_query($sql2);
      echo "That's Awesome!";
    }


    if($texts==1)
    {
      $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
      $s=$bt->insert_query($sql);
      $z=$bt->find_lookup($text1);


    }
   if($texts==2)
    {
      $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
      $s=$bt->insert_query($sql);
      $z=$bt->find_lookup($text1);

    }
     if($texts==3)
    {
      $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
      $s=$bt->insert_query($sql);
      $z=$bt->find_lookup($text1);

    }
     if($texts==4)
    {
      $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
      $s=$bt->insert_query($sql);
      $z=$bt->find_lookup($text1);

    }
     if($texts==5)
    {
      $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
      $s=$bt->insert_query($sql);
      $z=$bt->find_lookup($text1);

    }
 

    if($texts==6)
    {
      $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
      $s=$bt->insert_query($sql);
      $z=$bt->find_lookup($texts);

    }













/*
$("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
        


                // start ajax code
                $.ajax({
                    url: 'botwork2.php',
                    type: 'POST',
                    data: 'text2='+$value,
                    success: function(result){
                         $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight); 

                      }
                    }); 
                });
    
*/








 
?>

