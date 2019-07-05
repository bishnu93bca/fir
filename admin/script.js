////////////////notification1//////////////////////
$(".view-btn").on("click",function(){
	var ids = $(this).data(ids);
	$.ajax({
        type: "POST",
        url: "notify.php",
		data:{data : ids},
		success: function(response) {
			window.location.href = "admin_panel.php";
		},
		error: function(response) {
			alert('error');
		},
	});
});
/////////////////////////////////////////////////////////////////
$(".update-btn").on("click",function(){
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
///////////////////////////////////////////pae chart graph/////////////////////
$(document).ready(function () {
            firstGraph();
        });
function firstGraph()
{
    $.post("chart_controller.php",
            function (data)
            {
                console.log(data);
                var label = [];
                var incidents = [];

                for (var i in data) {
                    incidents.push(data[i].total);
                    label.push(data[i].incident_type);
                }
                console.log(incidents);
                var chartdata = {
                    labels: label,
                            datasets: [
                              {
                                label:false,
                                data: incidents,
                                backgroundColor: [
                                  "#DCDCDC",
                                  "#FAEBD7", 
                                ],
                                borderColor: [
                                  "red",
                                  "#CBCBCB"
                                ],
                                borderWidth: [1, 1]
                              }
                            ]
                };
                var pieTarget = $("#graphCanvas");
                // load piechart
                var pieGraph = new Chart(pieTarget, {
                    type: 'pie',
                    data: chartdata
                });
            });
}