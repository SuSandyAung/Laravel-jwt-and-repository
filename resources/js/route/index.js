import PublicPage from '../components/public/public-layout';
import AdminPage from '../components/admin/admin-layout';
import UserPage from '../components/user/user-layout';
import Public from './public';
import Admin from './admin';
import User from './user';
import Register from '../components/auth/Register.vue';
import Login from '../components/auth/Login.vue';
import Unauthorized from '../components/Unauthorized.vue'; 
const route = [
    {
        path: '/',
        component: PublicPage,
        children: Public,
        
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/Unauthorized',
        name: 'Unauthorized',
        component: Unauthorized,
    },
    {
        path: '/admin',
        component: AdminPage,
        children: Admin,
        
    },
    {
        path: '/user',
        component: UserPage,
        children: User,
       
    },
    
   
];

export default route;