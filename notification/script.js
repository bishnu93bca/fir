
$(".view-btn").on("click",function(){
	var ids = $(this).data(ids);
	$.ajax({
        type: "POST",
        url: "notify.php",
		data:{data : ids},
		success: function(response) {
			
		},
		error: function(response) {
			alert('error');
		},
	});
});