<html>
    <head>
        <title>Selecting or deselecting all CheckBoxes</title>
        <script type="text/javascript">
            function selects(){
                var ele=document.getElementsByName('chk');
                for(var i=0; i<ele.length; i++){
                    if(ele[i].type=='checkbox')
                        ele[i].checked=true;
                }
            }
        </script>
    </head>
    <body>
        <h3>Select all or some checkboxes:</h3>  
        <input type="checkbox" name="chk" value="Strategy">Strategy<br>
        <input type="checkbox" name="chk" value="Design">Design<br>
        <input type="checkbox" name="chk" value="Communication">Communication<br>
        <input type="checkbox" name="chk" value="Digital">Digital<br>
        <input type="checkbox" name="chk" value="AV Content">AV Content<br>
        <input type="checkbox" onclick='selects()' name="chk" value="Select All"/>Select All<br/>
        <!-- <input type="checkbox" onclick='deSelect()' value="Deselect All"/> Deselect All<br/> -->
    </body>
</html>

<!-- <div class="grid-form">
<div class="row g-15">
  <div class="col-lg-4 col-md-4 col-sm-4"><P><label class="">Name*</label>[text* your-name class:onlycharallow maxlength:100 autocomplete:off]</P></div>
  <div class="col-lg-4 col-md-4 col-sm-4"><P><label class="">Email*</label>[email* your-email maxlength:100 autocomplete:off]</P></div>
  <div class="col-lg-4 col-md-4 col-sm-4"><P><label class="">Contact*</label>[tel* your-mobile class:onlynumallow minlength:8 maxlength:15 autocomplete:off]</P></div>
  <div class="col-lg-4 col-md-4 col-sm-4"><P>[snippet prod-input]<P></div>
  <div class="col-lg-4 col-md-4 col-sm-4 productstextareadiv"><P>[textarea productsall class:products-textarea placeholder "Products Print"]</P></div>
  <div class="col-lg-4 col-md-4 col-sm-4"><P>[snippet country-name] </P></div>
  <div class="col-lg-12 col-md-12 col-sm-12"><P><label class="">Message</label>[textarea your-message class:contact-textarea x3 maxlength:250 autocomplete:off]</P></div>
  <div class="col-lg-4"><span class="submtbtn">[submit id:formSubmit class:contactsbmt-btn "Submit" ]</span></div>
</div>
</div>

<script type="text/javascript">
            function selects(){
                var ele=document.getElementsByName('chk');
                for(var i=0; i<ele.length; i++){
                    if(ele[i].type=='checkbox')
                        ele[i].checked=true;
                }
            }
</script>
<div>
    [text* your-name class:onlycharallow minlength:2 maxlength:50 placeholder "Name*"]<br/>
    [email* your-email minlength:5 maxlength:50 placeholder "Email*"]<br/>
    [tel* call-no class:onlynumallow minlength:8 maxlength:15 placeholder "Contact*"]<br/>
    <input type="checkbox" name="chk" value="Strategy">Strategy<br>  
        <input type="checkbox" name="chk" value="Design">Design<br>  
        <input type="checkbox" name="chk" value="Communication">Communication<br>  
        <input type="checkbox" name="chk" value="Digital">Digital<br>
        <input type="checkbox" name="chk" value="AV Content">AV Content<br>
        <input type="checkbox" onclick='selects()' name="chk" value="Select All"/>Select All<br/>
    [textarea message minlength:5 maxlength:140 placeholder "Message"]<br/>
    [submit "Submit"]
</div> -->