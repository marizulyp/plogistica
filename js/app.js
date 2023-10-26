window.addEventListener("load", () => {
  let button = document.getElementById("formulario");
  let usuario = document.getElementById("usuario");
  let password = document.getElementById("password");
  console.log(button);

  console.log(usuario);

  function data() {
    let datos = new FormData();
    datos.append("usuario", usuario.value);
    datos.append("password", password.value);
    fetch("vlogin.php", {
      method: "POST",
      body: datos,
    })
      .then((Response) => Response.json())
      .then((datos) => {
        console.log(datos);
      })
      .catch((error) => console.log(error));
  }

  button.addEventListener("submit", (e) => {
    e.preventDefault();

    data();
  });
});
