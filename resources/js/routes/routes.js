import HomeComponent from '../components/backend/HomeComponent.vue';
import CategoryComponent from '../components/backend/category/IndexComponent.vue';
import CategoryCreateComponent from '../components/backend/category/CreateComponent.vue';

export const routes = [
    { path: '/home', component: HomeComponent },
    { path: '/categories', component: CategoryComponent },
    { path: '/categories/create', component: CategoryCreateComponent }
];
