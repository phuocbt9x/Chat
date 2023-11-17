import HomePage from '../pages';
import Login from '../pages/login';
import Register from '../pages/register';
import { Fragment } from 'react';

export const routers = {
    home: { path: '/', component: HomePage },
    login: { path: '/login', component: Login },
    logout: { path: '/logout', component: Fragment },
    register: { path: '/register', component: Register },
};

const routersArray = Object.entries(routers).map(([key, value]) => ({ key, ...value }));

export default routersArray;
