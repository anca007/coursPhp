let buttons = document.querySelectorAll('button');

buttons.forEach(function (button) {

    button.addEventListener('click', function () {
        callApi(this.value)
        //envoi en GET
        // fetch('server.php?response=' + value)
        //     .then(response => response.json())
        //     .then(data => console.log(data));
    });
})

// async function callApi(value) {
//
//     let promise = await fetch('server.php?response=' + value)
//     let result = await promise.json()
//
//     console.log(result)
//
// }

//avec POST
async function callApi(value) {
    let auto = {'immat' : "45ert78", 'marque' : 'Citroen'};
    let promise = await fetch('server.php', {method : 'POST', body : JSON.stringify(auto)});
    let result = await promise.json()

    console.log(result)

}


function display(data) {

    document.getElementById('result').innerText = data.result

}