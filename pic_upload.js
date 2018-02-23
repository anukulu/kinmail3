$(document).ready(function(){
	$('#profile_image').html("<img src='profile_images/profile.jpg' height='256px' width='256px'>");
	$(document).on('change','#file',function(){
		var real_name = document.getElementById('file').files[0];
		var image_name = real_name.name;
		var image_ext = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(image_ext, ['gif', 'png', 'jpg', 'jpeg']) == -1)
		{
			alert('Invalid file!!');
		}
		var image_size = real_name.size;
		if(image_size > 2000000)
		{
			alert('Image size is too large!!');
		}
		else
		{
			var form_data = new FormData();
			form_data.append("file", real_name);
			$.ajax({
				url:"pic_upload.php",
				method:"POST",
				data:form_data,
				contentType:false,
				cache:false,
				processData:false,
				beforeSend:function(){
					$('#profile_image').html('<label>Image is uploading...</label>');
				},
				success:function(data){
					$('#profile_image').html(data);
				}
			});
		}
	});
});
