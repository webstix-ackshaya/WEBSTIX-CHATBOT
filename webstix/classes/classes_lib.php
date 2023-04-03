<?php

class bot
{    
    
    public function insert_query($sql)
    {

        include('db_config.php');

        if (mysqli_query($conn, $sql)) 
        {
            $status="SUCCESS ";
            
        } 
        else 
        {
            echo "Error: " . $sql. "<br>" . mysqli_error($conn);
        }
        return $status;

    }

    public function find_lookup2($string)
    {
        include('db_config.php');

        $sql= "SELECT Query FROM content_details WHERE Relative_ID='$string'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            $xyz=" ";
            $i = 0;
            while ($row = $result->fetch_assoc()) 
            {
                $st[$i] = $row;
                $abc= $st[$i]['Query'];
                $xyz = $abc;
                echo $abc;

                $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$abc',1)";
                $this->insert_query($sql2);
                $i++;
            }
            return $abc;
        } 
        else 
        {
            $st = '';
        }
    }

    public function find_lookup($string)
    {
        include('db_config.php');
        $sql= "SELECT Query FROM content_detail WHERE Relative_ID='$string'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $xyz=" ";
            $i = 0;
            $a=array();
            while ($row = $result->fetch_assoc()) 
            {
                $st[$i] = $row;
                $abc= $st[$i]['Query'];
                $xyz = $abc;
                array_push($a,$xyz);
                
                $sql2="INSERT INTO chat_trans(chat,updated_by) VALUES ('$abc',1)";
                $this->insert_query($sql2);
                $i++;
            }
            return $a;
        } 
        
        else 
        {
            $st = '';
        }
    }

    //Function to serach and return all the content details acording to the button pressed by user 
   /*  public function lookup($string)
    {

        include('db_config.php');

        $sql= "SELECT Query FROM content_details WHERE Relative_ID=(select c_ID  from contents where c_name LIKE '$string')";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $xyz=" ";
            $i = 0;
            while ($row = $result->fetch_assoc()) 
            {
                $st[$i] = $row;
                $abc= $st[$i]['Query'];
                $xyz .= $abc;
                //echo $abc;
                $i++;
            }
            return $xyz;
        } 

        else 
        {
            $st = '';
        }

    }
 */

    


    //Function to fetch the first options and return to user when they enter the chatbot.
   /*  public function init_contentdetails($str)
    {
        include('db_config.php');

        $sql= "SELECT Query FROM content_details WHERE Relative_ID=1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $xyz=" ";
            $i = 0;
            $a=array();
            while ($row = $result->fetch_assoc()) 
            {
                $st[$i] = $row;
                $abc= $st[$i]['Query'];
                $xyz = $abc;
                array_push($a,$xyz);
                $i++;
            }
            return $a;
        } 
        
        else 
        {
            $st = '';
        }
    }

 */


    public function init()
    {
        include('db_config.php');

        $sql= "SELECT Query from contents";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $xyz=" ";
            $i = 0;
            $a=array();
            while ($row = $result->fetch_assoc()) 
            {
                $st[$i] = $row;
                $abc= $st[$i]['Query'];
                $xyz = $abc;
                array_push($a,$xyz);
                $i++;
            }
            return $a;
        } 
        
        else 
        {
            $st = '';
        }
    
    
    }


/* 
    public function init_id()
    {
        include('db_config.php');

        $sql= "SELECT c_ID from contents";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $xyz=" ";
            $i = 0;
            $a=array();
            while ($row = $result->fetch_assoc()) 
            {
                $st[$i] = $row;
                $abc= $st[$i]['c_ID'];
                $xyz = $abc;
                array_push($a,$xyz);
                $i++;
            }
            return $a;
        } 
        
        else 
        {
            $st = '';
        }
    
    } */
}
?>