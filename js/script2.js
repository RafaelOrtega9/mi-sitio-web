let menu=document.querySelector('#menu-icon');
let navlist=document.querySelector('.navlist');

menu.onclick=() => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
    document.body.classList.toggle('no-scroll');
}
function mostrarContenedor() {
    const contenedor = document.querySelector('.agregar_p');
    contenedor.style.marginLeft = '0';
}
function ocultarContenedor() {
    const contenedor = document.querySelector('.agregar_p');
    contenedor.style.marginLeft = '-10000px';
}
document.querySelectorAll('.editar-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const row = btn.parentElement;
        const celdas = row.querySelectorAll('.editable');
        celdas.forEach(celda => {
            const valor = celda.innerText;
            celda.innerHTML = `<input type="text" value="${valor}">`;
        });
        row.querySelector('.guardar-btn').style.display = 'table-cell';
        btn.style.display = 'none';
    });
});
document.querySelectorAll('.guardar-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const row = btn.parentElement;
        const id = row.getAttribute('data-id');
        const inputs = row.querySelectorAll('input');
        const valores = Array.from(inputs).map(input => input.value);
        fetch('actualizar.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${id}&nombre=${valores[0]}&email=${valores[1]}&user=${valores[2]}&pass=${valores[3]}&rol=${valores[4]}`
        }).then(res => res.text())
          .then(data => {
              inputs.forEach((input, i) => {
                  input.parentElement.innerText = valores[i];
              });
              row.querySelector('.editar-btn').style.display = 'table-cell';
              btn.style.display = 'none';
          }).catch(err => {
              console.error(err);
          });
    });
});


document.querySelectorAll('.editar-btun').forEach(btn => {
    btn.addEventListener('click', () => {
        const row = btn.parentElement;
        const celdas = row.querySelectorAll('.editable');
        celdas.forEach(celda => {
            const valor = celda.innerText;
            celda.innerHTML = `<input type="text" value="${valor}">`;
        });
        row.querySelector('.guardar-btun').style.display = 'table-cell';
        btn.style.display = 'none';
    });
});
document.querySelectorAll('.guardar-btun').forEach(btn => {
    btn.addEventListener('click', () => {
        const row = btn.parentElement;
        const id = row.getAttribute('data-id');
        const inputs = row.querySelectorAll('input');
        const valores = Array.from(inputs).map(input => input.value);
        fetch('actualizarprod.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${id}&titulo=${valores[0]}&precio=${valores[1]}&imagen=${valores[2]}&categoria=${valores[3]}`
        }).then(res => res.text())
          .then(data => {
              inputs.forEach((input, i) => {
                  input.parentElement.innerText = valores[i];
              });
              row.querySelector('.editar-btun').style.display = 'table-cell';
              btn.style.display = 'none';
          }).catch(err => {
              console.error(err);
          });
    });
});