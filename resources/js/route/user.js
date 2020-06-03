import home from '../components/user/Home/Home';

const route = [
    {
        path: '/',
        component: home,
        meta: {
            reqiuresAuth: true,
            Admin:false, // for only admin component
            User:true
          }
    }
];

export default route;