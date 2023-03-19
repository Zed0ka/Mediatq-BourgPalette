fetch("../livresTests.json")
    .then((response)=>{
        console.log(response.status);
        return response.json();
    })
    .then((data)=>{
        self.postMessage(data);
    });

self.terminate;