<template>
  
<div class="container py-4">
  <div class="page">
    <section>
      <form class="chart-form mb-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="メッセージを入力" v-model="message">
            

            <div class="input-group-append">
              <button class="btn btn-primary" type="button" @click="send()">送信</button>

            </div>
          </div>
        </form>
    </section>
    
    
    <section class="card">
      <div class="card-header">
        オト仲間掲示板
      </div>
      
      <div class="card-body" v-for="m in messages">
        <div class="media">
        

          <div class="media-body">

            <p v-text="m.body"></p>
            <time class="text-secondary mr-4" v-text="m.created_at"></time>

          </div>

        </div>
      </div>
    </section>
  </div>
</div>
</template>

<script>
export default{

    data(){
      return{
        message:"",
        messages:[]

        };
      },
      mounted(){
          this.getMessages();

          Echo.channel('chat')
            .listen('MessageCreated',(e)=>{
              this.getMessages();
            });
      },  
      methods:{
        send(){
          const url='ajax/message';
          const params={message:this.message};
          axios.post(url,params)
          .then(res=>{
              this.message="";
          });
        
        },
        getMessages(){
          const url='ajax/message';
          axios.get(url)
          .then(res=>{
              this.messages=res.data;
          });
        }
      
      }

  }


</script>