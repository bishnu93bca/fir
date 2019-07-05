
$(".view-btn").on("click",function(){
	var ids = $(this).data(ids);
	$.ajax({
        type: "POST",
        url: "notify.php",
		data:{data : ids},
		success: function(response) {
			window.location.href = "subadmin_panel.php";
		},
		error: function(response) {
			alert('error');
		},
	});
});
/////////////////////////////////////////////////////////////////
$(".view-btn").on("click",function(){
	var ids = $(this).data(ids);
	$.ajax({
        type: "POST",
        url: "notify.php",
		data:{data : ids},
		success: function(response) {
			window.location.href = "subadmin_panel.php";
		},
		error: function(response) {
			alert('error');
		},
	});
});