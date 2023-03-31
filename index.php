<?php
  if(isset($_POST['fname'])){
   $server="localhost";
   $username="root";
   $password="";

   $conn=mysqli_connect($server,$username,$password);

   if(!$conn){
        die("connect to this database failed due to ".mysqli_connect_error());
   }
   //echo"succesfull connect to the database";
   
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $gender=$_POST['gender'];
   $mono=$_POST['mono'];

   $sql="INSERT INTO `login`.`login` (`first_name`, `last_name`, `gender`, `mobiel_no`) VALUES ('$fname', '$lname', '$gender', '$mono')";
   //$sql1="INSERT INTO `login`.`login` (`fname`, `lname`, `gender`, `mono`) VALUES ('$fname', '$lname', '$gender', '$mono')";
   
   //echo $sql;
  $conn ->query($sql);
   
   
   $conn ->close();
  
  //echo"not insert";
}
else{

}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>my webpage</title>   
</head>
<style>
*{
    margin: 0;
    padding:0;
}
body{
    margin:0;
    padding:0;
    background:url(background.jpg)no-repeat;
    background-size: cover;
    }




.header{
    width:100%;
    height:60px;
    background: red;
   }
.logo{
    position:sticky;
    margin-top:5px;
    background: url(logo.jpg)no-repeat;
    background-size:cover;
    margin-left: 20px;
    width:4.3%;
    height:50px;
    border-radius: 100%;
    background-color: blue;
   
    float:left;
  }

.list{
    float:left;
    text-decoration: none;
    list-style: none;
    margin-top:5px;
    margin-left:60px;
    cursor:pointer;
    text-align:center;
    color:white;
   }

   
   
   .button{
margin-top:5px;
margin-left:5px;
width:auto;
height:33px;
border:2px solid black;
border-radius:10%;
cursor: pointer;
   }

.input{

   margin-left:170px;
  
   width:170px;
   height:30px;
   border:2px solid black;
   border-radius:10%;

  }
.logineBox{

  width:30%;
  height:350px;
  margin-left:35%;
  margin-top:70px;
  border:3px solid black;
  border-radius:7%;
  background:rgba(250,255,255,0.9);
 
  box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;}
  .formNameText{
    font-size:25px;
   }
 .submit{
    align-items: center;
    text-align:center;
    width:70px;
    height:30px;;
    background-color:yellowgreen;
    margin-left:140px;
    border-radius:5%;
    border: 3px solid black;
   }
  .fname{
     height:25px;
     width:200px;
     border:2px solid black;
     border-radius:5%;
  }
  .lname{
    margin-left:5px; 
    height:25px; 
    width:200px;
    border:2px solid black;
    border-radius:5%;
  }
  .selectgender{
    width:152px; 
    margin-left:5px; 
    height:27px; 
    border:2px solid black;
    border-radius:5%;
  }
  .mono{
    width:200px; 
    margin-left:25px; 
    height:25px; 
    border:2px solid black;
    border-radius:5%;
  }
   
 /* row css for responsive perpus*/
.opensidebarmenu{
    width:0;
    height:0;
   
}


.sidebaricontoggle{
    width:1;
    height:1;
}
/*  css for 415px    */
@media screen and (max-width:415px) {
    *{
        box-sizing: border-box;
    }
    html,body{
        overflow-x: hidden;
    }
    body{
    height: 915px;
    background:url(backgroundFor415px.jpg)no-repeat;
    background-size: cover;
    }

  .sideBarMenu{
    height:100%;
    position:fixed;
    left:0;
    top:0;
    width:200px;
    margin-top: 60px;
    background:orange;
    transform: translateX(-201px);
   }
   .menu{
    margin:0;
    padding:0;
   }
   .menu li{
    display:block;
   }

   .sidebaricontoggle{
   width: 22px;
   
   height: 22px;
   z-index:20;
   top:22px;
   left:15px;
  }
   .opensidebarmenu{
    margin-top:15px;
    width:5px;
    height:5px;
    transform:translateX(-50);
    
    cursor:pointer;
    display:block;
    color:white;
    
   }
  
   .opensidebarmenu:checked ~ .sideBarMenu{
    transform: translateX(0px);
    transition:300ms ease-in-out ;
    
   }
   .spinner{
    width:30px;
    margin-left:5px;
    height:3px;
    background:white;
    transition:all 0.3s;
    
   }
    .top{
        margin-top:5px;
        width:30px;
        height:5px;
    }
    .middle{
        margin-top:5px;
        width:30px;
        height:5px;
    }
    .last{
        margin-top:5px;
        width:30px;
        height:5px;
    }

     .header{
    width:100%;
    height:60px;
    background-color: yellowgreen;
    position:fixed;
    z-index:10;
   }
  .logo{
    background:yellowgreen;
    width:0;
    height:0;
    margin:0;
   }
  .list{
    font-size:20px;
  }




  /* header complete */
   .input{
       height:39px;
       width:230px;
       margin-top:50px;
       margin-left:40px;
   }
   .button{
    height:40px;
    width:80px;
    margin-top:50px;
    margin-left:3px;
   }
   .logineBox{
    margin-top:200px; 
    width:300px;
    margin-left:45px;
   }
   .fname{
     height:25px;
     border:2px solid black;
     border-radius:5%;
     width:150px;

  }
  .lname{
    margin-left:5px; 
    height:25px; 
    border:2px solid black;
    border-radius:5%;
    width:150px;
  }
  .selectgender{
    width:100px; 
    margin-left:5px; 
    height:27px; 
    border:2px solid black;
    border-radius:5%;


    
  }
  .mono{
    width:150px; 
    margin-left:25px; 
    height:25px; 
    border:2px solid black;
    border-radius:5%;
  }
  .submit{
    margin-left:115px;
  }
}

</style>
<body>

   <div class="header">
     <div class="logo"> </div>
     <input type="checkbox" class="opensidebarmenu">
     
     <label for="opensidebarmenu"class="sidebaricontoggle ">
        <div class="spinner top"></div>
        <div class="spinner middle"></div>
        <div class="spinner last"></div>
     </label>
     <div class="sideBarMenu">
      <ul class="menu">
            <li class="list">HOME  </li>
            <li class="list">ABOUT US</li>
            <li class="list">LOGIN IN</li>
            <li class="list">SINGE UP</li>
            <li class="list">PROJECTS</li>
      </ul>
    </div>
       <input class="input"  alt="Search"/><button class="button"onclick="search">Search</button>
   </div>
   



   <div class="logineBox">
       <form action="index.php" method="post"><br><br>
           <label for=""><b class="formNameText">first name:-</b></label>
                   <input type="text" name="fname" style="" class="fname"/><br><br>
           <label for=""><b class="formNameText" >last name:-</b></label>
                   <input type="text" name="lname" style="" class="lname"/><br><br>
           
           <label for=""><b class="formNameText" > Select Gender:-</b></label>
                  <select name="gender" style="" id="" class="selectgender ">
                     
                       <option value="male" class="genderoption  ">Male</option>
                       <option value="female" class="genderoption">Female</option>
                       <option value="other" class="genderoption" >Other</option>
                  </select>
                  <br><br>
            <label for=""><b class="formNameText">Mo.No.:-</b></label>
                 <input type="text" name="mono" class="mono"style=""/><br><br>
            
                 
            <br>
            <button type="submit" class="submit">Submit</button>
       </form>
    
   </div>

     
   
</body>

</html>