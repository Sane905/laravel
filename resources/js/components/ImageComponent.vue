<template>
  <div class="form-group mt-4">
    <label for="formGroupExampleInput">プロフィール画像をのせてください。</label>
    <input name="image" type="file" accept="image/*" @change="onFileChange($event)" class="form-control-file" id="exampleFormControlFile1">
    <img :src="imageData" v-if="imageData"> 
  </div>
</template>

<script>
  export default{ 
      data(){
      return{
          imageData:""
      };
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

      }
  
    }
  }
</script>
