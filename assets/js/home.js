$(document).ready(function(){
     $("#save").click(function(event){
      var start_date=$("#sr_start_date").val();
      var end_date=$("#sr_end_date").val();
      var report=$("#sr_report").val();
      var name=$("#sr_name").val();
      $.ajax({
        url: 'form_data.php',
        type: 'POST',
        data: {start_date:start_date,end_date:end_date,report:report,name:name},
        success: function(data) {
        alert("New Report Successfully added");
        var modal_2 = document.getElementById('generate_report');
        var modal_1 = document.getElementById('submit_report');
        modal_1.style.display = "none";
        modal_2.style.display = "none";
        }
        });
    });

    
    var modal_2 = document.getElementById('generate_report');
    var modal_1 = document.getElementById('submit_report');
    window.onclick = function(event) {
      if (event.target == modal_1) {
        modal_1.style.display = "none";
      }

      if (event.target == modal_2) {
        modal_2.style.display = "none";
      }
    }
    
});
   function generate()
    {
        var modal_2 = document.getElementById('generate_report');
        var modal_1 = document.getElementById('submit_report');
        modal_1.style.display = "none";
        modal_2.style.display = "none";
        alert("New Report Successfully Generated");
    }