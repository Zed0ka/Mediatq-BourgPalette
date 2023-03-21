fetch("http://localhost/challenges/Mediatq_BourgPalette/Projet/API/getBook.php") //localhost:--/routeGetAllBook.php
    .then((response)=>{
        console.log(response.status);
        return response.json();
    }).then((data)=>{
        self.postMessage(data);
    });