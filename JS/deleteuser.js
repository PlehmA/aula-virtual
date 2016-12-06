function deleteUsuario(id){
  if (window.confirm("¿Desea Eliminar el usuario seleccionado?")) {
    document.location.href = 'delete_usuario.php?id=' + id;
  }
}
