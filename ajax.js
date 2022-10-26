$("#submit").click(function(){
    var name = $("#name").val();
    var roll = $("#roll").val();
    var address = $("#address").val();
    var password = $("#password").val();

    // For Insert Data 
    $.ajax({
        method:"POST",
        url:"insert.php",
        data:{name:name,roll:roll,address:address,password:password},
        success: function(data){

            read();
        }
    });

     // For Insert Data 
});

function read(){
    var read ="";

    $.ajax({
           method:'POST',
           url:'read.php',
           data: {read:read},
           success:function(data){

            $("#t_body").html(data);

           }
    });

}