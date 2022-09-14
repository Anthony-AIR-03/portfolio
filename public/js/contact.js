const span = document.getElementById("tel-nummer");

span.addEventListener("click", function(event) {
    event.preventDefault();
    navigator.clipboard.writeText(span.textContent);
});

// Notification.requestPermission().then(perm => {
//     if(perm === "granted"){
//         new Notification('hello world',{
//             body: 'dit is cool toch.',
//             tag: 'test'
//         })
//     }
//     else{
//         alert('permission is not granted')
//     }
// });