$( document ).ready(function() {
	$("#login").click(function(){
		$("#signupForm").hide()
	    $("#loginForm").show()
	    $("#titulo").replaceWith('<span class="card-title" id="titulo">Login</span>');
	});

	$("#signup").click(function(){
		$("#loginForm").hide()
	    $("#signupForm").show()
	    $("#titulo").replaceWith('<span class="card-title" id="titulo">Signup</span>');
	});
});