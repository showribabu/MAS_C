<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
     

        /*Image*/
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
        position:absolute;
        background-color:white;
        margin-left: 120px;
       font-size:10px;
       top:8px;
       /* width:fit-content; */
        margin-top:0%;
       width:160px; 
       height:90px;
       display:block;
       text-align:center;
       border-radius:5px;
           
    } 

    .data3
    {
        color:white;
        position:absolute;
        top:28px;
        margin-left: 120px;

    }
    footer {
        text-align: center;
        padding: 3px;
        width: 100%;
        bottom: 0;
        position:fixed;
        color: white;
        font-weight: bold;
        background-color: #100a89;
    }


    /* img 
    {
        width:90px;
        height:90px;
    } */

    .pic:hover + .data {
    display: block;
}


</style>
</head>
<body>
    <div class="hd">
        <h2>GROUP MANAGER</h2>
        <nav>

            <li><a href="group.php">Home</a></li>
            <li id="grp"><a href="#">Add a Member</a>
                <ul class="sub-menu">
                    <li ><a href="request.php" >From Requestlist</a></li>
                    <li><a href="groupinit.php" >By Selecting</a></li>
                </ul>
            </li>
            <li><a href="remove.php">Remove</a></li>
            <li><a href="suspend.php">Suspend</a></li>
            <li><a href="unsuspend.php">Suspended Members</a></li>
            <li><a href="group_view.php">Group View</a></li>
            <li><a href="gmstatus.php">Status</a></li>
            <li id="grp"><a href="#" >Data Access</a>
                <ul class="sub-menu">
                    <li><a href="fileupload.php">Upload file</a></li>
                    <li><a href="files.php">Access file</a></li>
                </ul>
            </li>
            <li><a href="index.php">Logout</a></li>
        </nav>
    </div>
    


    <div class='pic'>
            <img src="gm1.jpg" alt="group manager">
    </div>

<footer>
        <p>MAS : MULTI PARTY AUTHENTICATION SYSTEM</p>
</footer>

<p class="data2"><?php echo $_SESSION['name'];?></p>

</body>
</html>

