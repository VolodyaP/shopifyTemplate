//bootstrap section start// TODO: move to bootstrap section
import axios from 'axios';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.interceptors.request.use(function (config) {
    return window.utils.getSessionToken(window.app).then(token => {
        config.headers.Authorization = `Bearer ${token}`

        return config;
    })
});
//end bootstrap section
import {TitleBar, Modal, Button} from '@shopify/app-bridge/actions'

const titleBarOptions = {
    title: 'My page title',
};
const okButton = Button.create(app, {label: 'Ok'})
const cancelButton = Button.create(app, {label: 'Cancel'})

const modalOptions = {
    title: 'My Modal',
    message: 'Hello world!',
    footer: {
        buttons: {
            primary: okButton,
            secondary: [cancelButton],
        }
    }
};

const myTitleBar = TitleBar.create(app, titleBarOptions);
const myModal = Modal.create(app, modalOptions);

myModal.dispatch(Modal.Action.OPEN);

cancelButton.subscribe(Button.Action.CLICK, () => {
    myModal.dispatch(Modal.Action.CLOSE);
});
okButton.subscribe(Button.Action.CLICK, () => {
    axios.get('/me').then((response) => {
        console.log(response)
    });
});
