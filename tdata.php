<?php
$name = "";
if (isset($_GET['user'])) {
    $name = $_GET['user'];
} include("database.php");
$sql = "select * from teamlogin where username = '$name'";
$r = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($r);
    include("db2.php");
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email1 = $_POST["email1"];
        $email2 = $_POST["email2"];
        $num1 = $_POST["num1"];
        $num2 = isset($_POST["num2"]) ? $_POST["num2"] : NULL;
        $num3 = isset($_POST["num3"]) ? $_POST["num3"] : NULL;
        $puniversity = isset($_POST["puniversity"]) ? $_POST["puniversity"] : NULL;
        $pcountry = isset($_POST["pcountry"]) ? $_POST["pcountry"] : NULL;
        $pstate = isset($_POST["pstate"]) ? $_POST["pstate"] : NULL;
        $pprog = isset($_POST["pprog"]) ? $_POST["pprog"] : NULL;
        $pspec = isset($_POST["pspec"]) ? $_POST["pspec"] : NULL;
        $pyear = isset($_POST["pyear"]) ? $_POST["pyear"] : NULL;
        $university = isset($_POST["university"]) ? $_POST["university"] : NULL;
        $ucountry = isset($_POST["ucountry"]) ? $_POST["ucountry"] : NULL;
        $ustate = isset($_POST["ustate"]) ? $_POST["ustate"] : NULL;
        $uprog = isset($_POST["uprog"]) ? $_POST["uprog"] : NULL;
        $uspec = isset($_POST["uspec"]) ? $_POST["uspec"] : NULL;
        $uyear = isset($_POST["uyear"]) ? $_POST["uyear"] : NULL;
        $glink = isset($_POST["glink"]) ? $_POST["glink"] : NULL;
        $blink = isset($_POST["blink"]) ? $_POST["blink"] : NULL;
        $dlink = isset($_POST["dlink"]) ? $_POST["dlink"] : NULL;
        $plink = isset($_POST["plink"]) ? $_POST["plink"] : NULL;
        $rcountry = isset($_POST["rcountry"]) ? $_POST["rcountry"] : NULL;
        $rstate = isset($_POST["rstate"]) ? $_POST["rstate"] : NULL;
        $radd = isset($_POST["radd"]) ? $_POST["radd"] : NULL;
        $applied = isset($_POST["applied"]) ? $_POST["applied"] : NULL;
        $ptype = isset($_POST["ptype"]) ? $_POST["ptype"] : NULL;
        $cname = isset($_POST["cname"]) ? $_POST["cname"] : NULL;
        $role = isset($_POST["role"]) ? $_POST["role"] : NULL;
        $fdate = isset($_POST["fdate"]) ? $_POST["fdate"] : NULL;
        $tdate = isset($_POST["tdate"]) ? $_POST["tdate"] : NULL;
        $wid = $row['workid'];
        $x = 1;
        $purl=null;
        $skill=null;
        $c1 = "";
        $clink1 = "";
        $d="";

        while(true){
          $d = "url".$x;
          if(isset($_POST[$d])){
            $purl = $purl . $_POST[$d] . " , ";
            echo $purl;
            $x++;
          }else{
            break;
          }
        }
        $x = 1;
        while(true){
          $d = "skill".$x;
          if(isset($_POST[$d])){
            $skill = $skill. $_POST[$d] . " , ";
            $x++;
          }else{
            break;
          }
        }
        $x = 1;
        while(true){
          $d = "c".$x;
          if(isset($_POST[$d])){
            $c1 = $c1. $_POST[$d] . " and ";
            $d = "clink".$x;
            $clink1 = $clink1 . $_POST[$d] . " , ";
            $x++;
          }else{
            break;
          }
        }
        unset($_POST["submit"]);
        try{
            $checkQuery = "SELECT * FROM  data WHERE fname = '$fname' AND lname = '$lname' AND mail1 = '$email1'";
            $result = mysqli_query($con, $checkQuery);
            $count = mysqli_num_rows($result);
            $flag = true;
            if($count!=0){
                while ($row = mysqli_fetch_assoc($result)) {
                    if( $row['appliedrole'] == $applied){
                        $flag = false;
                        break;
                    }
                }
            }
        if($flag){
          $sql = "INSERT INTO data (fname, lname, mail1, mail2, contact1, contact2, contact3, pguniversityname, pgstate, pgcountry, pgprogtype, pgpassyear, pgspec, uguniversityname, ugstate, ugcountry, ugprogtype, ugpassyear, ugspecialization, githubid, behance, dribble, portfolio,plink, address, state, country, appliedrole, profiletype, excompany, exrole, exfdate, extodate, skill, certifications, clink, workid)
          VALUES ('$fname', '$lname', '$email1', '$email2', '$num1', '$num2', '$num3', '$puniversity', '$pstate', '$pcountry', '$pprog', '$pyear', '$pspec', '$university', '$ustate', '$ucountry', '$uprog', '$uyear', '$uspec', '$glink', '$blink', '$dlink','$plink', '$purl', '$radd', '$rstate', '$rcountry', '$applied', '$ptype', '$cname', '$role', '$fdate', '$tdate', '$skill', '$c1', '$clink1', '$wid')";
           mysqli_query($con,$sql);      
             $_POST = array();
             unset($_POST["submit"]);
             $newColumnValue = $row['completed'] + 1;
             $sql = "UPDATE teamlogin SET completed = '$newColumnValue' WHERE username = '$name'";
             mysqli_query($conn,$sql);
             echo '<script> 
             window.location.href = "teamdashboard.php?user=' . urlencode($name) . '";
             alert("Data Entry Done");
           </script>';  
        }
        else{
            echo '<script> 
             window.location.href = "teamdashboard.php?user=' . urlencode($name) . '";
             alert("Data is already present");
           </script>';  
        }
         
        }catch(mysqli_sql_exception $e){
          echo "SQL Exception: " . $e->getMessage();
        }
    }
?>