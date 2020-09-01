// function openForm() {
// document.getElementById("popupForm").style.display = "block";
// }
// function closeForm() {
// document.getElementById("popupForm").style.display = "none";
// }
// $(document).ready(function(){
// 	$("#pop_up").click(function(){
// 		$("#popup-Form").fadein(300);
// 	});
// });
// $("#pop_up").on("click",function(){
// 	$("#popup-overlay,#popup-content").addClass("active");
// });

// $("#update,#popup-overlay").on("click",function(){
// 	$("#popup-overlay,#popup-content").removeClass("active");
// });
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})