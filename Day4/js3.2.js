
// Changing promises & promise utility function
const fetch = require('node-fetch');
// node fetch - fetches data from http server
const apiUrl = 'https://6009602d0a54690017fc31d8.mockapi.io/api/v1';

//const user = {'id': 1};

fetch(`${apiUrl}/user/1`)

    .then(res => res.json())
    //.then(user => console.log(user))
    .then(user => fetch(`${apiUrl}/user/${user.id}/product`))
    .then(res => res.json())
    .then(products => console.log(products))
    .catch((err) => console.log(err))

//RUN THIS ON TERMINAL USING node.js3.2.js

//UTILITY FUNCTION
const user1 = fetch(`${apiUrl}/user/1`)
    .then(res => res.json())
const user2 = fetch(`${apiUrl}/user/2`)
    .then(res => res.json())
const user3 = fetch(`${apiUrl}/user/3`)
    .then(res => res.json())

Promise.all([user1, user2, user3])
    .then((objects) => console.log(objects))
    .catch((err) => console.log(err))


//ASYNC FUUNCTIONS AND ASYNC WAIT

async function getUser(id) {
    const res = await fetch(`${apiUrl}/user/1/product`);
    user = await res.json()
    console.log(user)
}
getUser(1)

