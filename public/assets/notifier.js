// Usage : Notifier.show('je suis un super contenu', 'error', ()=>{}, 50000);

class Notifier{
    static show( message, alertType, callback, time = 3000 ) {

        this.render(message, alertType, time, callback);
    }

    static render(message, alertType, time, callback){
        let imageUrl = document.querySelector('#assetUrl').value;
        var div = document.createElement('div');
        div.className = 'notifierComponent';
        div.innerHTML = `
            <img src='${imageUrl}packs/media/svg/${alertType == 'success'? 'success' : 'error' }.svg' />
            <div>
            ${message}
            </div>
        `
        document.body.appendChild(div);

        setTimeout(()=>{
            $(div).fadeOut(3000, ()=>{
                div.remove();
                callback();
            })
        }, time)

    }
}
