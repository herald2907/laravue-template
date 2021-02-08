import global from '../../../stores/global';
export default (to, from, next) => {
    const {
        state,
        getAuthentication
    } = global;
    if (getAuthentication()) {
        next();
    } else {
        if (location.href.substring(location.href.lastIndexOf('/') + 1) == 'login') {
            next({
                name: 'login'
            });
        } else {
            next({
                name: 'home'
            });
        }

    }
}
