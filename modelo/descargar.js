// Este archivo se encarga de mostrar la alerta de los botones descargar documento
// Libreria utilizada: SweetAlert2
function descargarDocumento() {

    Swal.fire({
        title: 'Descargar documento',
        input: 'select',
        inputOptions: {
            'Formatos': {
                pdf: 'PDF',
                docx: 'Word(DOCX)',
                xls: 'Excel(XLS)'
            }
        },
        inputPlaceholder: 'Seleccione un formato para descargar...',
        showCancelButton: true

    })

}