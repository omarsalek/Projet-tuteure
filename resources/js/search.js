const form = document.getElementById('search-form');
form.addEventListener('submit', function (e) {
    e.preventDefault();


    const token = document.querySelector('meta[name="csrf-token"]').content;
    const url = this.getAttribute('action');
    const searchRes = document.getElementById('searchRes').value;
    fetch(url,{
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token,
        },
            method: 'post',
            body: JSON.stringify({
                searchRes: searchRes
            })
        }).then(response => {
            response.json().then( data =>{
                console.log(data)
                })
        }).catch(error => {
            console.log(error)
        })

});
