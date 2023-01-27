/*$(window).on("load", function () {
	$("#exampleModalToggle").modal("show");
});*/
let sender = document.getElementById('sender');
const info = document.getElementById('info');
const chat = document.getElementById('chat');
const style = document.getElementById('myStyle')
const title = document.getElementById('title')

const mode = {
        groot : {
                /*En fonction de ce que tu écris il active le mode groot et cherche aléatoirement des caractéres spéciaux*/
                punctuation: [
                        '?',
                        '!',
                        '...',
                        '!?',
                        ':O',
                        
                ],
        },
        debugMe : {
                /*Si tu lui pose une question il active le mode debugMe et cherche aléatoirement une réponse*/
                debugMeArray : [
                        "Pourquoi ?",
                        "Reformule ta question.",
                        "Reformule ta problématique.",
                        "Est-ce que tu es sûr de ce que tu as écrit ?",
                        "As-tu affiché du debug (console.log en JS, print_r ou var_dump en PHP, ...) ?",
                        "Est-ce que le fichier est bien appelé ?",
                        "Où est ton fichier ?",
                        "Où est la déclaration de ta fonction ?",
                        "Où exécutes-tu ta fonction ?",
                        "Où est la déclaration de ta variable ?",
                        "Qu'y a-t-il dans ta variable ?",
                        "Décris-moi ce que tu veux faire en langage courant.",
                        "Que fait ton code ?",
                        "Tu as regardé sur Google ?",
                        "Google est ton ami ;)",
                        "Il manquerait pas un point-virgule ou une parenthèse ?",
                        "Est-ce que ton code est bien indenté ?",
                        "As-tu regardé dans l'inspecteur du navigateur ?",
                        "Prends un papier et un crayon ;)",
                        "Fais une pause :)",
                        "Que fait cette fonction ?"
                ],
                
        },
}
const dialog = [
        {
                keywords : [
                        'blague',
                        'carambar'
                ],
                response : "Qu'est ce qu'un chien avec des lunettes ? Un optichien"
        },
        {
                keywords : [
                        'ça',
                        'va',
                        'comment',
                        'allez-vous'
                ],
                response : "Je vais bien"
        },
        {
                keywords : [
                        'blague',
                        'toto'
                ],
                multipleReponse : true,
                response : [
                    'C’est la maîtresse qui demande à Toto « Cite-moi un mammifère qui n’a pas de dents »… « Ma grand-mère ? ».',
                    'C’est l’histoire de Toto va voir sa maman en chialant comme une grosse merde « – Maman, Maman… je me suis fait mal ! – Où ça ? – Là-bas ! »',
                    'C’est la maîtresse de Toto qui lui demande : « Toto, quand je dis « il pleuvait », de quel temps il s’agit ? », et là Toto il répond « D’un sale temps madame ! ».'
                ]
        }
]
function getRandomInt(max) {
        return Math.floor(Math.random() * max);
}

function sendMessage() {
        info.style.visibility = 'hidden';
        title.style.visibility = 'hidden'
        chat.style.visibility = 'visible';
        chat.innerHTML += '<p class="messageSend">' + sender.value + '</p>';
        style.innerText = '.response {' +
            'overflow: hidden;' +
            'border-right: .15em solid orange;' +
            'white-space: nowrap;' +
            'margin: 0 auto;' +
            'letter-spacing: .15em;' +
            '}'

        function keywordCheck(string,array){
        let keywordsNumber = 0
        for (i=0 ; i<array.length ; i++){
                if(string.split(' ').includes(array[i]))
                keywordsNumber++
        }
        return keywordsNumber>=2;
}

        for (let i = 0; i < dialog.length; i++){
                //console.log(dialog[i].keywords)
                if (keywordCheck(sender.value, dialog[i].keywords)){
                        if (dialog[i].multipleReponse){
                                chat.innerHTML +=
                                    '<p id="rep" class="response text-end rep">'+
                                    dialog[i].response[getRandomInt(dialog[i].response.length )] +
                                    '</p>';
                                    console.log("true");
                                retr;
                        }
                        chat.innerHTML +=
                            '<p id="rep" class="response text-end rep">'+
                            dialog[i].response +
                            '</p>';
                
                        return;
                }
                
        }
        if (sender.value.indexOf('?') >= 0){
                chat.innerHTML +=
                    '<p id="rep" class="response text-end rep">'+
                    mode.debugMe.debugMeArray[getRandomInt(mode.debugMe.debugMeArray.length)]+
                    '</p>';
                //console.log('je suis dans le deuxieme if')
        } else {
                        chat.innerHTML +=
                            '<p id="rep" class="response text-end rep"> Je suis Groot '+
                            mode.groot.punctuation[getRandomInt(mode.groot.punctuation.length)]+
                            '</p>';
                }
        
        //console.log("false");
    
}

