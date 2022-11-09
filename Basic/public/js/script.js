var sreach_input = document.getElementById('search');

sreach_input.addEventListener('keyup', () => {
    fetch('search/' + sreach_input.value, {
        method : "GET"
    }).then((response=>{
        return response.text()
    })).then((data)=>{
        console.log(data);
        document.getElementById('content').innerHTML = data;
    })
})