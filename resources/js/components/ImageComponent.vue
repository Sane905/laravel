<template>
  <div class="file">
  <input name="image" type="file" accept="image/*" class="form-control-file" id="exampleFormControlFile1" @change="onFileChange($event)">
  <img class="userInfo__icon" :src="imageData" v-if="imageData">

  </div>
</template>

<script>
  export default{
      data(){
      return{
          imageData:""
      }
  },
  methods(){
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
