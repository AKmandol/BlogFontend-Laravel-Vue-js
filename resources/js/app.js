require('./bootstrap');
import { createApp } from 'vue'
import search from './components/search.vue'
import comment from './components/comment.vue'
import category from './components/category.vue'

const app = createApp({
    components: {
        search,
        comment,
        category,
    }
})

.mount('#app')