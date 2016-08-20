<!DOCTYPE html>
<html>
  <head>
    <title>LIKE</title>
  </head>
  <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link href="style.css" rel="stylesheet" type="text/css" />

<body>
    <div>
    <center>  <h2>Here is the like button</h2> </center>

<?php
include('connect.php');
$strSQL_Result  = mysqli_query($con,"SELECT `like`,`un-like` from `like` where id=1");
$row            = mysqli_fetch_array($strSQL_Result);

$like       = $row['like'];
$unlike     = $row['un-like'];
if($_POST)
{
    if(isset($_COOKIE["counter"]))
    {
        echo "-1";
        exit;
    }
    setcookie("counter", "liked", time()+3600*24, "/like-unlike-in-php-mysql/");
    if(mysqli_real_escape_string($con,$_POST['op']) == 'like')
    {
        $update = "`like`=`like`+1";
    }
    if(mysqli_real_escape_string($con,$_POST['op']) == 'un-like')
    {
        $update = "`un-like`=`un-like`+1";
    }
    mysqli_query($con,"update `like` set $update where `id`=1");
    echo 1;
    exit;   
}
?>


<div class="grid">
<span id="status"></span><br>
<input type="button" value="<?php echo $like; ?>" class="button_like" id="linkeBtn" />
<input type="button" value="<?php echo $unlike; ?>" class="button_unlike" id="unlinkeBtn" />
<!-- <input type="textarea" name="comment" class="comment" placeholder="Enter your comment" /> -->

<div class="dropdown">
  <button class="dropbtn"><i class="material-icons">share</i> </button>
  <div class="dropdown-content">
    <!-- Email -->
    <a href="mailto:?Subject=LetMeShare&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://letmeshare.ml">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" style=" height: 40px; width: 40px;" alt="Email" /> Mail this!
    </a>

    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://letmeshare.ml" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" style=" height: 40px; width: 40px;" alt="Facebook" /> Facebook this!
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://letmeshare.ml" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" style=" height: 40px; width: 40px;"  alt="Google" /> G Plus this!
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://letmeshare.ml&amp;hashtags=letmeshare" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" style=" height: 40px; width: 40px;" alt="Twitter" /> Tweet this!
    </a>
    
  </div>
</div>

<?php
include('connect.php');
if($_POST)
{
    $sid = mysqli_real_escape_string($con,$_POST['sid']);
    $comment = mysqli_real_escape_string($con,$_POST['comment']);
    
    
    $strSQL_Result  = mysqli_query($con,"insert into comments(sid,comment) values($sid,'$comment')");
    exit;
}
$strSQL_Result  = mysqli_query($con,"select id,status from status ORDER BY 'id' DESC LIMIT 1 ");
$row            = mysqli_fetch_array($strSQL_Result);
    
$sid         = $row['id'];
$status     = $row['status'];
$commentshow = "";
$strSQL_Comment     = mysqli_query($con,"select id,comment from comments ORDER BY 'id' DESC LIMIT 100000");
while($rowcomm = mysqli_fetch_array($strSQL_Comment))
{
    $id             = $rowcomm['id'];
    $comment        = $rowcomm['comment'];
    $commentshow    .= "<div class='commentarea'>".$comment."</div>";
}

$content ='<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script>
$(document).ready(function() {
$(\'#comment\').keyup(function(e)
    {
        if(e.keyCode == 13)
        {
        var comment = $(\'#comment\').val()
        var sid = $(\'#sid\').val()
            if(comment == "")
            {
                alert("Please write something in comment.");
            }
            else
            {
                $("#commentbox").append("<div class=\'commentarea\'>"+comment+"</div>");
                $.post("index.php", {sid:sid,comment:comment},function(data)
                {
                                                         
                })
                $(\'#comment\').val("");
            }
        }
    });            
});
</script>
<style>
.status
{
    width:350px;
    font-size: 13px;
    margin-left: 500px;
    line-height: 18px;
    font-family: \'lucida grande\',tahoma,verdana,arial,sans-serif;
}
.commentarea
{
    width:350px;
    font-size: 13px;
    line-height: 18px;
    font-family: \'lucida grande\',tahoma,verdana,arial,sans-serif;
    border: thin;
    border-color: white;
    border-style: solid;
    background-color: hsl(0, 0%, 96%);
    padding: 5px;
}
#comment
{
    width: 357px;
    height: 23px;
    margin-left: 500px;
    font-size: 15px;
}
</style>
<div class="status">'.$status.'</div>
<input type="text" name="comment" id="comment" placeholder="Write a comment...." />
<div id="commentbox" style="margin-left: 500px">
'.$commentshow.'
</div>
<input type="hidden" name="sid" id="sid" value="'.$sid.'">';


$pre = 1;
$title = "Comments ";
$heading = "Showing comments";
include("html.php");            
?>

</div>
</body>
</html>