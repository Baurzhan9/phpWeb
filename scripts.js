$('document').ready(function(){
	getPost();
	$("#signup").click(function(){
		addUser($("#name").val(), $("#email").val(), $("#password").val(), $("#conpassword").val());
		 $("input").val('');


	});
	$("#signin").click(function(){
		Login($("#login_email").val(),$("#login_password").val());
		$("input").val('');
	});

	$("#Addpost").click(function(){
		addPost($("#post").val());
		$("input").val('');
	});
});	


function addUser(Name, Email, Password, Conpassword){

			$.post("to_register.php", {
				
				"name": Name,
				"email": Email,
				"password": Password,
				"conpassword": Conpassword

			}, function(data){

				result = JSON.parse(data);

				if(result['status']=='OK'){

					$("#message_alert").attr('class', 'alert alert-success');
			

				}else{

					$("#message_alert").attr('class', 'alert alert-danger');
				
				}

								$("#message_alert").show();

						$("#message_alert").html(result['message']);
				

			});

		}


		function Login(email, password){
			$.post("to_login.php" , {
				"login_email":email,
				"login_password":password
			},
			function(data){
				res=JSON.parse(data);
				if(res['status']=='OK'){
					window.location.href = "profile.php";
					$("#login_message_alert").attr('class', 'alert alert-success');
				}
				else{
					$("#login_message_alert").attr('class', 'alert alert-danger')
				}


								$("#login_message_alert").show();

						$("#login_message_alert").html(res['mes']);
						
			});
		}

		function addPost(Post){

			$.post("to_post.php", {
				
				"post": Post

			}, function(data){

				result = JSON.parse(data);

				if(result['status']=='OK'){

					$("#message_alert").attr('class', 'alert alert-success');
			

				}else{

					$("#message_alert").attr('class', 'alert alert-danger');
				
				}

								$("#message_alert").show();

						$("#message_alert").html(result['message']);
				

			});

		}

		function getPost(){

			$.get("to_getposts.php", function(data){

				posts = JSON.parse(data);

				tableHTML = "";

				for(i=0;i<posts.length;i++){
					tableHTML+="<tr>";
					tableHTML+="<td>"+parseInt(i+1)+"</td>";
					tableHTML+="<td>"+posts[i]['post']+"</td>";
					tableHTML+="<td>"+posts[i]['post_date']+"</td>";
					tableHTML+="<td>"+posts[i]['user_name']+"</td>";
					tableHTML+="<td><button class = 'btn btn-danger btn-sm' onclick = 'deletePost("+posts[i]['id']+")' style='background-color: black'>Delete</button></td>";
					tableHTML+="</tr>";
				}

				$("#result").html(tableHTML);

			})

		}

		function deletePost(Id){

			$.post("delete.php", {
				
				"id": Id

			}, function(data){

				getPost();

			});
		}
