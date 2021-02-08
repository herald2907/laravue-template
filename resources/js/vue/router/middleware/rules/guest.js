import global from '../../../stores/global';
export default (to, from, next) => {
    const {
        state,
        getAuthentication
    } = global;
    let authCheck = getAuthentication();

    if (authCheck) {
        next({
            name: 'dashboard'
        });
    } else {
        next();
    }
}
