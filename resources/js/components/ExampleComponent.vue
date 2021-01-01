<template>
  <div class="text-right">
    <button @click="unfavorite()" class="btn btn-danger" v-if="result">
    気になる解除
    </button>

    <button @click="favorite()" class="btn btn-success" v-else>
    <i class="far fa-thumbs-up"></i>
    気になる
    </button>
          
    <span class="badge badge-pill badge-primary">気になる数:{{count}}</span>
  

  </div>
</template>

<script>
    export default{
        props:['user'],
        data(){
          return{
            result:"false",
            count:""
          };
        },
        mounted(){
          this.hasfavorites();
          this.countfavorites();
          
        },
        methods:{
          favorite(){
            axios.get('ajax/good/'+this.user.id+'/favorites')
            .then(res=>{
                this.count=res.data.count;
            }).catch(function(error){
                console.log(error.response);
          });

        },
        unfavorite(){
          axios.get('ajax/good/'+this.user.id+'/unfavorites')
          .then(res=>{
              this.count=res.data.count;
          }).catch(function(error){
              console.log(error.response);
          });
        },
        countfavorites(){
          axios.get('ajax/good/'+this.user.id+'/countfavorites')
          .then(res =>{
            this.count=res.data;
          }).catch(function(error){
              console.log(error.response);
          });
        },
        hasfavorites(){
          axios.get('ajax/good/'+this.user.id+'/hasfavorites')
          .then(res=>{
            this.result=res.data;
          }).catch(function(error){
              console.log(error.response);
          });
        }
    }
  }
</script>