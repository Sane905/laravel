<template>
  <div class="form-group mt-4">
    <label for="formGroupExampleInput">プロフィール画像をのせてください。(任意)</label>
    <input class="form-control-file" id="exampleFormControlFile1" type="file" ref="file" name="image" accept="image/*" @change="onFileChange">
    <img v-bind:src="imageData" v-if="imageData" height="240" width="50%"> 
    <button class="btn btn-danger" v-if="imageData" @click="resetFile()">画像をリセット</button>
  </div>
</template>

<script>
  export default{ 
      data(){
      return{
          imageData:""
        };
      },
      mounted() {
        console.log('Component mounted.')
      },
      methods:{
          onFileChange(e){
              const files=e.target.files;
                if(files.length>0){ 
                const file=files[0];
                const reader=new FileReader();

                reader.onload=(e)=>{
                  this.imageData=e.target.result;
                };
                reader.readAsDataURL(file);
              }

          },
          resetFile(){
            const input=this.$refs.file;
            input.type='text';
            input.type='file';
            this.imageData='';
          }
      
        }
  }
</script>
