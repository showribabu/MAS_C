<?php

include "conn.php";
session_start();
if (isset($_GET['muid'])) {
    $uid1 = $_GET['muid'];
    $_SESSION['uid1']=$uid1;
    $gmid=$_SESSION['gmid'];

    function rid() {

        $char='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ucase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lcase='abcdefghijklmnopqrstuvwxyz';
        $rands='';
        $index=rand(0,strlen($char)-1);
        $rands.=$char[$index];
        $index=rand(0,strlen($ucase)-1);
        $rands.=$ucase[$index];
        $rands.=rand(100,999);
        $index=rand(0,strlen($lcase)-1);
        $rands.=$lcase[$index];
        
        return $rands;
        
    }
    $request_id=rid();

    $sql3 = 'INSERT INTO requests (request_id,request_from,request_to,message,r_status) VALUES ("'.$request_id.'","' . $gmid . '","'.$uid1.'","You are selected as a group member: from Group manager - check status table..!!!","p")';
   

    $r1 = mysqli_query($con, $sql3);


    if ($r1) {
       echo "<script>alert('Request sended successfully');</script>";
    }
} else {
    echo "<script>alert('user id is not found');</script>";
}


//now with status column also

/*

                 if ($i['status'] == 'accept') {
                     echo "<td class='status accepted'><a href='upload.php' style='background-color: green; color: #fff;' id='A'>Accepted</a></td>";
                 } elseif ($i['status'] == 'reject') {
                     echo "<td class='status rejected'><a href='#' class='btn btn-danger' id='R'>Rejected</a></td>";
                 } elseif ($i['status'] == 'pending') {
                     echo "<td class='status pending'><a href='#' class='custom-button' id='P'>$i[status]</a></td>";
                 } else {
                     echo "<td>$i[status]</td>";
                 }
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background-color: rgb(232, 236, 237); */
            background-color: #b8d5ff;

        }
        .hd 
        {
            margin-top:0px;
            /*background-color: white;*/
            background-color: #100a89;
            border-radius: 5px;  
            /*border-top: 10px solid darkblue;*/
            /* width:100%; */
            /*padding:10px;*/
            padding: 0 4.8rem;
            /* display:flex;
            flex-direction: column; */

        }
        h2 
        {
            /* padding:15px;
            text-align: center; */
           
            color: white;
            width: 100%;
            text-align: center;
            padding: 12px;
            margin: 0;
            font-weight: bold;
            letter-spacing: 0.2rem;

        }
        nav 
        {
            display:flex;
            padding:20px;
            margin-left:33%;
            /* justify-content:flex-end; */
            margin-right:0%;
        }
        nav li {
            text-decoration: none;
            list-style: none;
            position: relative;
            margin-right:0%;

        }
        
        nav li a {
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            padding: 14px 20px;
            /* background-color: darkblue; */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            /* margin-right: 20px; */
            font-weight: bold;
            margin-right:0%;

            
        }
        .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 6px;
            border-radius: 5px;
        }
        .sub-menu li {
            margin-bottom: 8px;
        }
    
        .sub-menu li a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 8px 6px;
            /* background-color: darkblue; */
            border-bottom:2px solid black;
            /* text-decoration: underline; */
            
        } 
        
        #grp:hover .sub-menu {
            display: block;
        }
      

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn.btn-danger {
            background-color: #dc3545;
            color: #fff;
          }
          
          .btn.btn-danger:hover {
            background-color: #c82333;
          }
          
          .btn.btn-danger:active {
            background-color: #bd2130;
          }


          /* hover */

          nav li a:hover {
            background-color: #1f84f7;
        }

        footer {
        text-align: center;
        padding: 3px;
        width: 100%;
        bottom: 0;
        position: fixed;
        color: white;
        font-weight: bold;
        background-color: #100a89;
    }
      
        .data
        {
            /*min-width:200px; 
            min-height:600px; */
            align-items: center;
            text-align: center;
            /* background-color:rgb(251, 249, 233); */
            background-color:white;
            /* box-shadow: 2px 2px 4px black; */

            /* background-color:rgb(220, 211, 211);  */
            /* padding:50px; */
            margin-top:30px;
            width:50%;
            margin-left:25%;
            border-radius:18px;
            padding:25px 23px 15px 15px;

            overflow-y: scroll;
            max-height:500px;
            
        }
       
       
        .tb 
        {

            background-color:white;
            box-shadow: 2px 2px 6px black;
          
            margin-top:30px;
           
        }

        .status {
            padding: 3px;
            border-radius: 1rem;
            text-align: center;
        }

        /* .status.accepted {
    background-color: transparent;
    color: #006b21;
    cursor: pointer;
    border: 1px solid #86e49d;
    padding: 8px 16px;
    transition: background-color 0.3s;
}

.status.accepted:hover {
    background-color: #86e49d;
    color: #fff;
} */
.status {
    padding: 8px 16px;
    border: 1px solid #86e49d;
    border-radius: 4px;
    text-align: center;
    transition: background-color 0.3s;
    cursor: pointer;
}

.status.accepted {
    background-color: transparent;
    color: #006b21;
}

.status.rejected {
    background-color: transparent;
    color: #b30021;
}

.status.pending {
    background-color: transparent;
    color: #fff;
}



        table {
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #f9f9f9;
        border: 2px solid #ddd;
        border-radius:18px;
    }
    
    th, td {
        padding: 10px;
        border-bottom: 2px solid #ddd;
    }
    
    th {
    position: sticky;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}
    
    tr:nth-child(even) {
        background-color: #f8f8f8;
    }
    
    tr:hover {
        background-color: #e0e0e0;
    }
    
    .data table td,th {
        border: 3px solid black; /* Set the desired border color */
        padding: 10px;
        text-align: center;
    }
    td,th {
            border-collapse: collapse;
            padding: 1rem;
            text-align: center;
            }
     .pp
    {
        /* background-color: rgba(207, 15, 15, 0.267); */
        background-color:white;
        color:black;
        border-bottom:3px darkblue solid;
        border-top:3px darkblue solid;
        padding:15px;
        
        box-shadow: 2px 2px 4px black;
        
        text-align:center;
        align-items:center;
     
    }

    #req {

    letter-spacing: 0.2rem;
    font-weight:bold;
    font-weight:bolder;
    font-size:16px;
    }    

    table {
        border-collapse: collapse;
    }
    #tr1 th,
    #tr1 td {
        border: 3px solid black;
        padding: 18px;
        text-align: center;
        font-size:16px;

    }
 
    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .btn-danger {
        color: #fff;
        /* background-color: #ff0000; */
        background-color: #ff2222; /* Lighter shade of red */
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
    }
    
    .btn-danger:hover {
        background-color: #cc0000;
    }

    .btn.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn.btn-success:hover {
  background-color: #218838;
}

.btn.btn-success:active {
  background-color: #1e7e34;
}
.btn.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn.btn-danger:hover {
  background-color: #c82333;
}

.btn.btn-danger:active {
  background-color: #bd2130;
}
.btn.btn-warning {
  background-color: #ffc107;
  color: #fff;
}

.btn.btn-warning:hover {
  background-color: #e0a800;
}

.btn.btn-warning:active {
  background-color: #d39e00;
}


.btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn.btn-danger {
            background-color: #dc3545;
            color: #fff;
          }
          
          .btn.btn-danger:hover {
            background-color: #c82333;
          }
          
          .btn.btn-danger:active {
            background-color: #bd2130;
          }


    /* Modified table....*/

             /* */
             .data
        {
            /*min-width:200px; 
            min-height:600px; */
            align-items: center;
            text-align: center;
            /* background-color:rgb(251, 249, 233); */
            background-color:white;
            /* box-shadow: 2px 2px 4px black; */

            /* background-color:rgb(220, 211, 211);  */
            /* padding:50px; */
            margin-top:30px;
            margin-left:25%;
            border-radius:18px;
            padding:25px 23px 15px 15px;

            overflow-y: scroll;
            max-height:500px;
           



            
        }
       
       
        .tb 
        {

            background-color:white;
            box-shadow: 2px 2px 6px black;
            /* margin-top:30px;   */
        }

    .pp
    {
        /* background-color: rgba(207, 15, 15, 0.267); */
        background-color:rgb(202, 196, 224);
        color:black;
        border-bottom:3px darkblue solid;
        border-top:3px darkblue solid;
        padding:15px;
        
        box-shadow: 1px 1px 4px black;
        
        text-align:center;
        align-items:center;
        /* width:780px; */
        margin-top:0px;
 
        
     
    }

    #req {
    letter-spacing: 0.2rem;
    font-weight:bolder;
    font-size:18px;
    text-shadow:1px 1px .1px black;
    }

    table {
        border-collapse: collapse;

    }

    #tr1 th,
    #tr1 td {
        border: 3px solid black;
        padding: 18px;
        text-align: center;
        font-size:16px;
        /* background-color: rgb(103 98 185 / 48%); */

    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #f9f9f9;
        border: 2px solid #ddd;
        border-radius:18px;
        /* background-color:white; */
        
    }
    
    th, td {
        padding: 10px;
        border-bottom: 2px solid #ddd;
    }
    
    th {
    position: sticky;
    background-color: #b495fdfe;
    cursor: pointer;
    text-transform: capitalize;
}
    
    tr:nth-child(even) {
        background-color: #f8f8f8;
    }
    
    tr:hover {
        background-color: #dccfcf;
    }
    
    .data table td,th {
        border: 3px solid black; /* Set the desired border color */
        padding: 10px;
        text-align: center;
    }
    td,th {
            border-collapse: collapse;
            padding: 1rem;
            text-align: center;
            }
    
    .pic 
    {
       
       
        position:absolute;
        top:8px;
        left:5px;

    }

    img 
    {
        width:90px;
        height:90px;
    }
    .data2 
    {
        color:white;
        position:absolute;
        top:28px;
        margin-left: 120px;

    }
</style>
</head>
<body>
<div class="hd">
        <h2>GROUP MANAGER</h2>
        <nav>
          <!-- <li><a href="gmsuccess.php">Home</a></li> -->

            <li id="grp">
                <a href="#">Add a Member</a>
                <ul class="sub-menu">
                    <li ><a href="request.php" class='btn btn-danger'>From Requestlist</a></li>
                    
                    <li><a href="groupinit.php" class='btn btn-danger'>By Selecting</a></li>

                </ul>
            </li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="suspend.php">Suspend</a></li>
            <li><a href="unsuspend.php">Suspended Members</a></li>
            <!-- <li><a href="group_view.php">Group View</a></li> -->
            <li><a href="group_view.php">Group View</a></li>
            <!-- <li><a href="gmstatus.php?user_id=<?//php echo $id;?>">Status</a></li> -->
            <li><a href="gmstatus.php">Status</a></li>
            <li><a href="login.html">Logout</a></li>

        </nav> 
    </div>
    <div class="data">
        <p class="pp" id="req">LIST OF MEMBERS</p>
    
        <table border="5px" cellpadding="8px" align="center" cellspacing="5px" class="tb" style="height:100px; width:780px;  text-align:center; align-items:center;">
            <tr id="tr1"><th>USER ID</th><th>MEMBER SELECTION</th><th>STATUS</th></tr>
            <?php

                $sql = 'SELECT * FROM requests WHERE request_from ="'.$gmid.'"';

                $r=mysqli_query($con, $sql);

                if($r) {
                    $udata=$r;
                } else {
                    echo"<script>alert('Nodata Found');</script>";
                }

            foreach ($udata as $i) {
                echo "<tr><td>$i[request_to]</td>";
                // echo "<td><a href='#' class='btn btn-success' id='R'>Selected</a></td>";
                echo "<td>Selected</td>";

                if ($i['r_status'] == 'a') {
                    echo "<td class='status accepted'><a href='credentials.php?user_id={$i['request_to']}' class='btn btn-success' id='A'>Accepted</a></td>";
                }elseif ($i['r_status'] == 'r') {
                    echo "<td class='status rejected'><a href='#' class='btn btn-danger' id='R'>Rejected</a></td>";
                } elseif ($i['r_status'] == 'p') {
                    echo "<td class='status pending'><a href='#' class='btn btn-warning' id='P'>Pending</a></td>";
                } else {
                    echo "<td>$i[r_status]</td>";
                }
                
                echo "</tr>";
               

              

                //  if ($i['status'] == 'a') {
                //      echo "<td class='status accepted'><a href='upload.php' class='btn btn-success' id='A'>Accepted</a></td>";
                //  } elseif ($i['status'] == 'r') {
                //      echo "<td class='status rejected'><a href='#' class='btn btn-danger' id='R'>$i[status]</a></td>";
                //  } elseif ($i['status'] == 'Pending') {
                //      echo "<td class='status pending'><a href='#' class='btn btn-warning' id='P'>$i[status]</a></td>";
                //  } else {
                //      echo "<td>$i[status]</td>";
                //  }

            }
            
            ?>
      
        </table>
    </div>
    <div class='pic'>
            <img src="gm1.jpg" alt="group manager">
    </div>
    <p class="data2"><?php echo $_SESSION['name'];?></p>
    <footer>
        <p>MAS : MULTI PARTY AUTHENTICATION SYSTEM</p>
    </footer>
</body>

</html>

