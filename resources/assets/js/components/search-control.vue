<template>
            <label for=""><h3 class="panel-title">البحث عن دور النشر</h3></label>
            <input type="text" class="form-control" v-model="search" @keyup="initializeSearch | debounce 500">
</template>

<script>

    export default {
        data() {
            return {
                search: ''
            }
        },
        ready() {
            window.search_component = this;
        },
        methods: {
            initializeSearch() {
                window.dtable.search( this.search ).draw();
                this.countResults();
            },
            countResults() {
                var res = window.dtable.page.info().recordsDisplay;

                if(res == 0)
                    this.searchFallback();

                $(".count-results").text( res
                + " من "
                + window.dtable.page.info().recordsTotal );
            },
            searchFallback() {
                // try fuse.js search
                var res = window.fuse.search(this.search);
                if(res.length == 0)
                    $(".custom-zero-msg").html('');
                else
                    $(".custom-zero-msg").html('هل تقصد: <a href="#" onclick="window.search_component.search = $(this).text(); window.search_component.initializeSearch(); return false; ">' + res[0].name + "</a> ؟");
            }
        }
    }
</script>
