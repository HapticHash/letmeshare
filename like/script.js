$(document).ready(function() {
$("#linkeBtn").removeAttr("disabled");
$("#unlinkeBtn").removeAttr("disabled");
$('#linkeBtn').click(function(e)
    {
        var val = parseInt($("#linkeBtn").val(), 10);
        $.post("index.php", {op:"like"},function(data)
        {
            if(data==1)
            {
                $("#status").html("Liked Sucessfully!!");
                val = val+1;
                $("#linkeBtn").val(val);
                $("#linkeBtn").attr("disabled", "disabled");
                $("#linkeBtn").css("background-image","url(likebw.png)");
            }
            else
            {
                $("#status").html(" Liked!!");
            }
        })
    });
    $('#unlinkeBtn').click(function(e)
    {
        var val = parseInt($("#unlinkeBtn").val(), 10);
        $.post("index.php", {op:"un-like"},function(data)
        {
            if(data==1)
            {
                val = val+1;
                $("#unlinkeBtn").val(val);
                $("#unlinkeBtn").attr("disabled", "disabled");
                $("#unlinkeBtn").css("background-image","url(likebw.png)");
                $("#status").html("Un-liked Sucessfully!!");
            }
            else
            {
                $("#status").html(" Un-liked!!");
            }
        })
    });            
});