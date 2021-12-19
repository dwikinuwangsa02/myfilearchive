//Cek Koneksi
	var status = 'online';
	var current_status = 'online';
	function check_internet_connection()
	{
		if(navigator.onLine)
		{
			status = 'online';
		}
		else
		{
			status = 'offline';
		}
	
		if(current_status != status)
		{
			if(status == 'online')
			{

    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Terhubung Ke Internet'
})

			}
			else
			{

                const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'Terputus Dari Internet'
})

			}
	
			current_status = status;
	
			$('.toast').toast({
				autohide:false
			});
	
			$('.toast').toast('show');
		}
	}
	check_internet_connection();
	
	setInterval(function(){
		check_internet_connection();
	}, 1000);
    //End Cek Koneksi

	// IP 
window.setTimeout("getip()",1000);
function getip(){
  var xhr=new XMLHttpRequest();
  var url='https://ipwhois.app/json/';
  xhr.onloadend=function(){
  data=JSON.parse(this.responseText);
  document.getElementById("ip").textContent=data.ip
};
xhr.open("GET",url,true);
xhr.send();
}
	//End IP

	// ISP
window.setTimeout("getisp()",1000);
function getisp(){
  var xhr=new XMLHttpRequest();
  var url='https://ipwhois.app/json/';
  xhr.onloadend=function(){
  data=JSON.parse(this.responseText);
  document.getElementById("isp").textContent=data.isp
};
xhr.open("GET",url,true);
xhr.send();
}	
	//End ISP
	
	//Detect OS
	var detectOS = "Unknown OS";
if (navigator.appVersion.indexOf("Win") != -1) 
    detectOS = "Windows";
if (navigator.appVersion.indexOf("Mac") != -1) 
    detectOS = "MacOS";
if (navigator.appVersion.indexOf("Linux") != -1) 
    detectOS = "Linux";
		document.getElementById("browser").innerHTML=detectOS;