<template>
  <div class="file">
  <input name="image" type="file" accept="image/*" v-on:change="onFileChange($event)" class="form-control-file" id="exampleFormControlFile1">
  <img :src="imageData" v-if="imageData">

  </div>
</template>

<script>
  export default{ 
      data(){
      return{
          imageData:""
      };
  }
  
  
  
  
  }
  

</script>
