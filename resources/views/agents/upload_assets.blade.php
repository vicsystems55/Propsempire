<fieldset class="pt-0">
            <h6 class="py-50">Upload Images</h6>
            <div class="row">

                <div class="col-sm-6">

                                <script>
                                  function openFileOption()
                                        {
                                        document.getElementById("file1").click();
                                        }
                                    function previewFile(input){
                                        console.log('hello');
                                        var file = $("input[name=featured_img]").get(0).files[0];
                                
                                        if(file){
                                            var reader = new FileReader();
                                
                                            reader.onload = function(){
                                                $("#previewImg").attr("src", reader.result);
                                            }
                                
                                            reader.readAsDataURL(file);
                                        }
                                    }
                                </script>

                    <div class="form-group">
                        <img class="img-thumbnail" id="previewImg" src="/images/banner/banner-21.jpg" alt="">
                       
                        <div class="custom-file">
                                <input id="file1" onchange="previewFile(this);" type="file" name="featured_img" class="custom-file-input" >
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>

                </div>

                <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Pix 1</label>
                    <img width="150px" height="150" class="img-thumbnail shadow" src="/images/banner/banner-21.jpg" alt="">   
                    </div>
                </div>

              
            </div>
          </fieldset>