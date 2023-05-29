const eliminarBotones = document.querySelectorAll(".eliminar");

eliminarBotones.forEach(e => {
    e.addEventListener("click",() => {
        const id = e.getAttribute("data");
        Swal.fire({
            title: '¿ESTAS SEGURO QUE QUIERES ELIMINAR ESTE USUARIO?',
            text: "No puedes revertirlo",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar'
          }).then((result) => {
            if (result.isConfirmed) {
                Eliminar(id);
                setTimeout(function(){
                    window.location.href = "UsuariosView.php";
                },1500)
            }
        });
    })
})

async function Eliminar(id) {
    const datos = new FormData;
        datos.append('id', id);

    const result = await fetch("UsuariosEliminar.php",{
        method: "POST",
        body: datos
    });

    return result;
}