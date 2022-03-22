const form = document.getElementById('search-form');

form.addEventListener('submit', function (e) {
    e.preventDefault();


    const token = document.querySelector('meta[name="csrf-token"]').content;
    const url = this.getAttribute('action');
    const searchRes = document.getElementById('searchRes').value;
    const searchResListe = document.getElementById('searchResListe').value;
    fetch(url,{
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token,
        },
            method: 'post',
            body: JSON.stringify({
                searchRes: searchRes,
                searchResListe:searchResListe
            })
        }).then(response => {
            response.json().then( data =>{

                const annonces = document.getElementById('annonces');
                annonces.innerHTML = '';
                Object.entries(data)[0][1].forEach(elements=>{
                    annonces.innerHTML +=`&nbsp;<div id="idCard" >
                                <div class="card-columns-fluid" >
                                    <div class="card  bg-light" >
                                        <div id="imageAnnonce">
                                            <img src="storage/imageAnnonces/${elements.photoAnnonce}" />
                                        </div>
                                        <br>
                                        <div class="card-body">
                                            <h5><b>${elements.ville}</b></h5>
                                            <p>${elements.date}</b></p>
                                              <div>
                                                <form  action="{{ route('consulterOffre')}}" method="post">
                                                <button type="submit" class="btn btn-info "><input type="hidden" id="annonceConsChoix" name="idAnnonce" value="{{ $annonce->idAnnonce  }}">Consulter</button>
                                                <button type="submit" class="btn btn-success "><a id="annonceConsChoix" href='#'>Choisir</a></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>&nbsp;`

                    })
                })
        }).catch(error => {
            console.log(error)
        })

});
