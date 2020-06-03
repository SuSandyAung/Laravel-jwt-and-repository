import home from '../components/admin/home/home';

const route = [
    {
        path: '/',
        component: home,
        meta: {
            reqiuresAuth: true,
            Admin:true, // for only admin component
            User:false
          }
        
    }
];

export default route;