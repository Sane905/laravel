<template>
  <div class="form-group mt-4">
    <label for="formGroupExampleInput">プロフィール画像をのせてください</label>
    <input class="form-control-file" id="exampleFormControlFile1" type="file" name="image" ref="preview" @change="uploadFile">
  </div>
</template>

<script>
export default{

  mounted(){
    console.log(this.$refs.preview)
  
  },
  methods:{
    uploadFile(){
      console.log(this.$refs.preview.files[0])
    }
  }

}

</script>

