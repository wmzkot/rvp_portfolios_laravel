import React from 'react';
import ReactDOM from 'react-dom';
import ContactsBody from './ContactsBody';
import ContactsMail from './ContactsMail';

const Contacts = () => {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Contact Us</div>

                        <div className="card-body">
                            <ContactsBody />
                            <ContactsMail />
                        </div>


                    </div>
                </div>
            </div>
        </div>
    );
}



if (document.getElementById('contacts')) {
    ReactDOM.render(<Contacts />, document.getElementById('contacts'));
}


export default Contacts;

