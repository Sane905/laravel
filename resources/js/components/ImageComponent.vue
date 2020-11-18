<template>
  <div id="file-preview">
  <input class="form-control-file" name="image" type="file" accept="image/*" v-on:change="onFileChange($event)">
  <img :src="imageData" v-if="imageData">

  </div>
</template>

<script>
  export default{ 
      el: '#file-preview',
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
