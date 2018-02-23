function product()
	{
		var hash = window.location.href.split('=')[1];
		return hash;
	}
function element()
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("output").innerHTML = this.responseText;
		}
	};
	return xmlhttp;
}
function send(hash)
{
	var username = document.form1.username.value;
	var message = document.form1.msg.value;
	var xmlhttp = element();
	xmlhttp.open("GET", "send.php?hash="+hash+"&message="+message+"&username="+username, true);
	xmlhttp.send();
	document.getElementById("msg").value = "";
}
$(document).ready(function()
{
	var hash = product();
	var username = document.form1.username.value;
	var message = document.form1.msg.value;
	var interval = setInterval(function(){
		$.ajax({
			url: "send.php?username="+username+"&hash="+hash+"&message="+message, 
			success: function(data){
				$('#output').html(data);
			}
		}); 
	},100);
});