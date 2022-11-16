<!DOCTYPE html>
<html>
  <head>
    <title>Toggling checkboxes</title>
  </head>
<body>
  <p>Toggling checkboxes</p>
  <script>
  function getcheckboxes() {
      var node_list = document.getElementsByTagName('input');
      var checkboxes = [];
      for (var i = 0; i < node_list.length; i++) {
        var node = node_list[i];
        if (node.getAttribute('type') == 'checkbox') {
          checkboxes.push(node);
        }
      }
      return checkboxes;
  }
  function toggle(source) {
      checkboxes = getcheckboxes();
      for (var i = 0 ,n = checkboxes.length; i < n; i++) {
        checkboxes[i].checked = source.checked;
      }
  }
  </script>

  <input type="checkbox" name="foo1" value="bar1"> Bar 1<br/>
  <input type="checkbox" name="foo2" value="bar2"> Bar 2<br/>
  <input type="checkbox" name="foo3" value="bar3"> Bar 3<br/>
  <input type="checkbox" name="foo4" value="bar4"> Bar 4<br/>

  <input type="checkbox" onClick="toggle(this)" /> Toggle All<br/>
</body>
</html>

<!-- <div>
  <ul class="g-15">
    <li class="gitfform_li"><P><label class="">Name*</label>[text* your-name class:onlycharallow maxlength:100 autocomplete:off]</P></li>
    <li class="gitfform_li"><P><label class="">Phone*</label>[tel* your-mobile class:onlynumallow minlength:8 maxlength:15 autocomplete:off]</P></li>
    <li class="gitfform_li"><P><label class="">Email*</label>[email* your-email maxlength:100 autocomplete:off]</P></li>
    <li class="gitfform_li productstextareadiv"><P>[textarea productsall class:products-textarea placeholder "Products Print"]</P></li>
    <li class="gitfform_li"><select name="products_names" class="form-select chosen-select" id="test">       
      <option value="Stategy">Stategy</option> 
      <option value="Design">Design</option>
      <option value="Communication">Communication</option>
      <option value="Digital">Digital</option>
      <option value="AV Content">AV Content</option>
  </select></li>
    <li class="gitfform_li textareabox"><P><label class="">Message</label>[textarea your-message class:contact-textarea x3 maxlength:250 autocomplete:off]</P></li>
    <li class="gitfform_li"><span class="submtbtn">[submit id:formSubmit class:contactsbmt-btn "Submit" ]</span></li>
  </ul>
</div>

<script src="https://development.ikf.in/mayraspa/wp-content/themes/astra-child/assets/js/custom.js"></script> -->