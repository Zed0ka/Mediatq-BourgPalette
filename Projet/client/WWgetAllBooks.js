fetch("../livresTests.json") //localhost:--/routeGetAllBook.php
    .then((response)=>{
        console.log(response.status);
        return response.json();
    })
    .then((data)=>{
        self.postMessage(data);
    });