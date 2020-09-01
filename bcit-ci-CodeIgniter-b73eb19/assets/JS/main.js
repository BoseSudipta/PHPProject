



// };
// function phone(){
// $.ajax('User/get_phone_data',   // request url
//     {
//         success: function (data, status) {// success callback function
//             alert('success');
//     }
// });
// }




var a="";

//catiching location of the device
function geoFindme(){
	const status=document.querySelector('#status');
	const mapLink=document.querySelector('#map-link');

	mapLink.href='';
	mapLink.textContent='';

	function success(position){
		const latitude=position.coords.latitude;
		const longitude=position.coords.longitude;

		status.textContent='';
		mapLink.href=`https://www.google.com/maps/place/${latitude},${longitude}`;
		a=mapLink.href;
		// alert (a);
		get_phone(a);
		// $.post('http://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/User/send',
		// { location : a}
		// function(data,status){
		// 	alert(status+" "+data);
		// 	console.log(a);
		// })
		mapLink.textContent=`${latitude},${longitude}`;
	}
	function error(){
		status.textContent='Unable to retrieve location';
	}
	if(!navigator.geolocation){
	status.textContent='Geolocation is not supported by your browser';
	}
	else{
		status.textContent='locating...';
		navigator.geolocation.getCurrentPosition(success, error);
		navigator.geolocation.watchPosition(success,error);

	}  
	
}
// document.querySelector('#btn').addEventListener('click', geoFindme);

function get_phone(a) {
// alert(a);
	$.post('http://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/User/send',
		{ location : a},
		function(data,status){
			alert(status+" "+data);
			// console.log(a);
		});
		
}
	// alert('hi');
    // $.post('<?php echo base_url("User/get_phone_data"); ?>'
    // $.post('http://localhost/PHPProject/bcit-ci-CodeIgniter-b73eb19/User/send',
    // 	
    // 		alert("status"+"data");
    	
 
        
        // ,
        // // datatype:"json",
        // url: '<?php echo base_url("User/get_phone_data"); ?>',
        // {loc:mapLink.href}
        // success: function(data,status) {
        //     alert(status+data);
        // };
        // alert('hi');
 
		
   

	

$('#btn').click(function(){
	alert('hi');
	geoFindme();
	// get_phone();
	
});	

