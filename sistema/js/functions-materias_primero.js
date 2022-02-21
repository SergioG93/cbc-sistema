$('#tableMaterias1').DataTable();
var tableMaterias1;

document.addEventListener('DOMContentLoaded',function(){
    tableMaterias1 = $('#tableMaterias1').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": "./models/materias/table_materias_primero.php",
            "dataSrc": ""
        },
        "columns": [
            {"data":"materia_id"},
            {"data":"nombre_materia"},
            {"data":"nivel"},
            {"data":"estatus"},
            {"data":"options"},
        ],
        "resonsieve": true,
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0,"asc"]]
    });

    // CREAR MATERIA
    var formMateria = document.querySelector('#formMateria');
    formMateria.onsubmit = function(e) {
        e.preventDefault();
        var idMateria = document.querySelector('#idMateria').value;
        var nombre = document.querySelector('#txtNombre').value;
        var nivel = document.querySelector('#listnivel').value;
        var status = document.querySelector('#listStatus').value;

        if(nombre == '' || status == '' || nivel == '') {
            swal('Atencion','Todos los campos son necesarios','error');
            return false;
        }

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = './models/materias/ajax-materias.php';
        request.open('POST',ajaxUrl,true);
        var strData = new FormData(formMateria);
        request.send(strData);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var objData = JSON.parse(request.responseText);
                if(objData.status) {
                    $('#modalFormMateria').modal('hide');
                    formMateria.reset();
                    swal('Crear Materia',objData.msg,'success');
                    tableMaterias.ajax.reload(function(){
                        editMateria();
                        delMateria();
                    })
                } else {
                    swal('Atencion',objData.msg,'error');
                }
            }
        }
    }
});
