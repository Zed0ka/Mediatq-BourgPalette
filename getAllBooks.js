fetch("./livresTests.json")
    .then((response)=>{
        return response.json;
    })
    .then((data)=>{
        console.log(data);
        const dataHTML = document.querySelector("body");
        dataHTML.innerHTML=`${data}`
    });
