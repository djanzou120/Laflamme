$(document).ready(function(){

    var quill = new Quill('#editorContainerr', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ header: [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block']
            ]
        },
        placeholder: 'Contenu de votre sujet...',
    });


    document.addEventListener('submit', (e)=>{

        e.preventDefault();
        $data  = ($('#addSubjectButtonForm').serialize());

        $data += "&content="+quill.root.innerHTML;
        var request = $.ajax({
            url: $('#addSubjectButtonForm').attr('action'),
            method: "POST",
            data: $data,
        });

        request.done(function( data ) {
            if (data.message == 'success'){
                Notifier.show('Ajoute avec success', 'success', ()=>{
                    window.location = '/forum';
                }, 1000);
            }else{

                Notifier.show(data.message, 'error', ()=>{
                    // window.reload();
                }, 6000);
            }
        });

        request.fail(function( jqXHR, textStatus ) {
            Notifier.show('Oups! Une erreur est survenu !', 'error', ()=>{
                // window.reload();
            }, 6000);
        });
    })
})

