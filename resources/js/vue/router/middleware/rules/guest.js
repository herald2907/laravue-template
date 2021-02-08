import global from '../../../stores/global';
export default (to, from, next) => {
    const {
        state,
        getAuthentication
    } = global;
    let authCheck = getAuthentication();

    if (authCheck) {
        console.log('test2');
        next({
            name: 'dashboard'
        });
    } else {
        console.log('test4');
        next();
    }
}
