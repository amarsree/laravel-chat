<template>
  <h2> {{ name }}</h2>
</template>
<!-- 
<script>
    export default {
        
        data() {
            return {
                name: 'Temporary Message'
            }
        }
    }
</script> -->





<script>
    export default {
        props: ['name'],
 
        data() {
            return {
                body: this.name
            }
        }
    }
</script>