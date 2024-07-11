const titleBarOptions = {
    title: 'My page title',
};
const modalOptions = {
    title: 'My Modal',
    message: 'Hello world!',
};

const myTitleBar = actions.TitleBar.create(app, titleBarOptions);
const myModal = actions.Modal.create(app, modalOptions);
myModal.dispatch(actions.Modal.Action.OPEN);
