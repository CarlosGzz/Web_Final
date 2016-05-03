$( document ).ready(function() {
	$("#login").click(function(){
	    $("#form").load("login.html")
	    $("#titulo").replaceWith('<span class="card-title" id="titulo">Login</span>');
	});

	$("#signup").click(function(){
	    $("#form").load("signup.html")
	    $("#titulo").replaceWith('<span class="card-title" id="titulo">Signup</span>');
	});
});