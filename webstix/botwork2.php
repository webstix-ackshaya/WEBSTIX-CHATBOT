<?php
include('classes/db_config.php');
include ("classes/classes_lib.php");
    $texts = $_POST['texts'];
    $text1 = $_POST['text1'];
    $text2= $_POST['text2'];
    $bt=new bot();
    $z=array();
    if($text2)
    {
      $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
      $s2=$bt->insert_query($sql2);
      echo "That's Awesome!";
    }


    switch ($texts) 
    {
      case 1:
        $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
        $s=$bt->insert_query($sql); 
        $z=$bt->find_lookup($texts);  

        foreach ($z as $value) 
        {
          echo "<br/>";
          echo $value;
          if($text2)
          {
            $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
            $s2=$bt->insert_query($sql2);
            echo "That's Awesome!";
          }
          echo "<br/>";
        }
        break;

      case 2:
        $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
        $s=$bt->insert_query($sql); 
        $z=$bt->find_lookup($texts);  

        foreach ($z as $value) 
        {
          echo "<br/>";
          echo $value;
          if($text2)
          {
            $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
            $s2=$bt->insert_query($sql2);
            echo "That's Awesome!";
          }
          echo "<br/>";
        }
        break;

      case 3:
        $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
        $s=$bt->insert_query($sql); 
        $z=$bt->find_lookup($texts);  

        foreach ($z as $value) 
        {
          echo "<br/>";
          echo $value;
          if($text2)
          {
            $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
            $s2=$bt->insert_query($sql2);
            echo "That's Awesome!";
          }
          echo "<br/>";
        }
      break;

      case 4:
        $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
        $s=$bt->insert_query($sql); 
        $z=$bt->find_lookup($texts);  

        foreach ($z as $value) 
        {
          echo "<br/>";
          echo $value;
          if($text2)
          {
            $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
            $s2=$bt->insert_query($sql2);
            echo "That's Awesome!";
          }
          echo "<br/>";
        }  
     break;

      case 5:
        $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
        $s=$bt->insert_query($sql); 
        $z=$bt->find_lookup($texts);  

        foreach ($z as $value) 
        {
          echo "<br/>";
          echo $value;
          if($text2)
          {
            $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
            $s2=$bt->insert_query($sql2);
            echo "That's Awesome!";
          }
          echo "<br/>";
        }
        break;

      case 6:
        $sql="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text1',1)";
        $s=$bt->insert_query($sql); 
        $z=$bt->find_lookup($texts);  

        foreach ($z as $value) 
        {
          echo "<br/>";
          echo $value;
          if($text2)
          {
            $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$text2',0)";
            $s2=$bt->insert_query($sql2);
            echo "That's Awesome!";
          }
          echo "<br/>";
        }
      break;
    
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

