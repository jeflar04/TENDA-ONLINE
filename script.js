// Obtener todas las imágenes con la clase "producto"
const imagenesProducto = document.querySelectorAll(".producto img");

// Recorrer todas las imágenes y agregar un evento "click" a cada una
imagenesProducto.forEach((imagen) => {
  imagen.addEventListener("click", () => {
    // Obtener la URL de la imagen grande
    const urlImagenGrande = imagen.src.replace("thumbnail", "large");

    // Crear un elemento de imagen para la imagen grande
    const imagenGrande = document.createElement("img");
    imagenGrande.src = urlImagenGrande;

    // Crear un contenedor para la imagen grande
    const contenedorImagenGrande = document.createElement("div");
    contenedorImagenGrande.classList.add("contenedor-imagen-grande");

    // Agregar la imagen grande al contenedor
    contenedorImagenGrande.appendChild(imagenGrande);

    // Agregar el contenedor al cuerpo del documento
    document.body.appendChild(contenedorImagenGrande);

    // Agregar un evento "click" al contenedor para cerrar la imagen grande
    contenedorImagenGrande.addEventListener("click", () => {
      document.body.removeChild(contenedorImagenGrande);
    });
  });
});
