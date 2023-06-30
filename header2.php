
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #b8d5ff;
        }
        
        h2 {
            background-color: #100a89;
            color: white;
            width: 100%;
            text-align: center;
            padding: 12px;
            margin: 0;
            font-weight: bold;
            letter-spacing: 0.2rem;
        }

        nav {
            display: flex;
            justify-content: flex-end;
            padding: 20px;
            background-color: #100a89;
        }

        nav ul {
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin-left: 20px;
            position: relative;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 14px 16px;
        }

        .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #100a89;
            padding: 16px;
            border-radius: 5px;
            margin-left: 1px;
        }

        .sub-menu li {
            text-align: center;
            margin-left: 1px;
        }

        .sub-menu li a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 4px 8px;
            margin-left: 1px;
        }

        nav li:hover .sub-menu {
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

        nav ul ul a:hover {
            text-decoration: underline;
        }

        nav li a:hover {
            background-color: #1f84f7;
        }

        nav ul ul {
            display: none;
            position: absolute;
            background-color: #100a89;
            padding: 0;
            margin-top: 0;
        }

        nav ul li:hover>ul {
            display: inherit;
        }

        nav ul ul li {
            float: none;
            width: 100%;
        }

        nav ul ul a {
            padding: 10px 16px;
        }

        nav ul ul a:hover {
            text-decoration: underline;
        }

        .img {
            position: absolute;
            top: 0;
            left: 0;
            max-height: 103px;
            max-width: 103px;
        }
        
        .name {
            color: white;
            font-size: 25px;
            margin-left: 10px;
            position:absolute;
            top:36px;
            right: 1400px;

        }

    </style>
</head>
<body>
    <h2>GROUP MANAGER</h2>

    <nav>
        <div>
            <img src="gm.jpg" alt="group manager image" class="img">
            <span class="name">shiva</span>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Add Member</a>
                <ul class="sub-menu">
                    <li><a href="#" class="btn btn-warning">From Requestlist</a></li>
                    <li><a href="#" class="btn btn-danger">By Selecting</a></li>
                </ul>
            </li>
            <li><a href="#">Remove Member</a></li>
            <li><a href="suspend.php">Suspend Members</a></li>
            <li><a href="unsuspend.php">Suspended Members</a></li>
            <li><a href="group_view.php">Group view</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    <footer>
        <p>MULTI PARTY AUTHENTICATION SYSTEM</p>
    </footer> 
</body>
</html>

