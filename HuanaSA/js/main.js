const inputs = document.querySelectorAll(".input");
const logged = document.getElementById("login");
const users = [
	{
		uname: "admin",
		passwd: "12345"
	},
	{
		uname: "empleado1",
		passwd: "123"
	},
	{
		uname: "empleado2",
		passwd: "132"
	}
];


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

logged.addEventListener("click", (event) => {
	event.preventDefault();
	let username = document.getElementById("username");
	let password = document.getElementById("password");

	userlist = users.find(users => users.uname == username.value);
	console.log(password);

	if (userlist && userlist.passwd == password.value) {
		setTimeout(function(){ 
			window.location.href = "Categorias/categorias.php"; 
		}, 1000);
        // Aquí puedes redirigir al usuario a otra página, mostrar contenido protegido, etc.
      } else {
        alert("Credenciales incorrectas. Por favor, intenta nuevamente.");
      }
});