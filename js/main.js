
$(document).ready(function(){
    $("#department").hide();
    $("#dept_lvl").hide();
    $('#program').change(function(){
         $("#dept_lvl").show();
        $("#department").show();
        var prgm=$(this).val();
        $.ajax({
            url:'select_dept.php',
            type:'post',
            data:{id:prgm},
            dataType:"text",
            success:function(data) {
                      $("#department").html(data);
                      //console.log(data);
            }
        });
    });
    $("#batch").hide();
    $("#batch_lvl").hide();
    $('#department').change(function(){
            $("#batch").show();
                $("#batch_lvl").show();
        var dept=$(this).val();
        var prgm=$("#program").val();
        $.ajax({
            url:'select_batch.php',
            type:'post',
            data:{id:dept,id2:prgm},
            dataType:"text",
            success:function(data) {
                    $("#batch").html(data);
                      //console.log(data);
            }
        });
    });
});