// main.js

fetch('http://localhost:8000/api/data')
    .then(response => response.json())
    .then(data => {
        // Handle data response
        console.log(data); // Tampilkan data di console atau lakukan sesuatu yang sesuai
    })
    .catch(error => {
        // Handle error
        console.error(error); // Tampilkan error di console atau lakukan sesuatu yang sesuai
    });
