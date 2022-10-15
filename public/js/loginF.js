let url =window.location.href
console.log(url)
url= url.replaceAll('http://localhost/equipo-7-tm-22-4ta/?','')
console.log(url)
if (url=="error=true") {
    swal({
        title: "Error de autentificacion!",
        text: "Datos incorrectos !",
        icon: "error",
      });
}