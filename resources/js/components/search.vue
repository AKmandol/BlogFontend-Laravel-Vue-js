<template>
    <div class="menu_srch d-flex ml-2" @click="showSearch = !showSearch">
        <i class="bi bi-search search_btn"></i>
        <!-- SEARCH INPUT -->
        <div class="header_serch" @click.stop v-if="showSearch">

            <div  class="header_serch_i" @click="showSearch = false">
                <i class="bi bi-x-lg text-danger"></i>
            </div>
            <div class="header_serch_input">
                <input type="text" @keyup.enter="seachBlog" v-model="str" placeholder="Search">
            </div>
            <div  class="header_serch_i" @click="seachBlog">
                <i class="bi bi-search"></i>
            </div>
            
        </div>
        <!-- SEARCH INPUT -->
    </div>
</template>

<script>
export default{
    data(){
        return {
            showSearch: false,
            str: ''
        }
    },
    
    created(){
    
},

methods: {
    seachBlog() {
        if(this.str != ''){
        window.location = `/search?str=${this.str}`
        }
    }
}



}
</script>