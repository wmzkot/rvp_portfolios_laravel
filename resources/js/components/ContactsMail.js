import React from 'react';
import Axios from 'axios';

const ContactsMail = () => {
    return ( <
        div id = "ContactsMail" >
        <
        input type = "email"
        id = "email"
        name = "email"
        placeholder = "E-mail" / >
        <
        input type = "submit"
        value = "Подписаться"
        onClick = {
            () => inner()
        }
        /> < /
        div >
    );
};

const inner = () => {
    let email = document.getElementById('email').value;
    Axios.get('/ajax/subscribe?email=' + email)
        .then(
            (response) => {
                document.getElementById('ContactsMail').innerHTML = response.data;
                console.log(response);
            }
        )
        .catch(
            (error) => {
                console.log(error);
            }
        )
};


export default ContactsMail;