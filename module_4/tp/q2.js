
let form = document.getElementById('form')
form.addEventListener('submit', function (event) {
    event.preventDefault()

    let inputs = document.querySelectorAll('input')
    let message = "";

    inputs.forEach(function (val){
        if(val.value === ''){
            message +=  "Le champ " + val.dataset.name + " doit être renseigné\n";
        }
    })

    if(message){
        alert(message)
    }else{
        form.submit()
    }
})