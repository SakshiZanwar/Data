<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
				</div>
			</div><!-- #main -->
			<div class="clear"></div>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-sidebar' ); ?>
					</div>
				</div>
			</footer><!-- #colophon -->
		</div>
	</div><!-- #page -->
	<script type="text/javascript" src="<?php echo cb_theme_url('assets/js/bootstrap.min.js') ?>"></script>
	<?php wp_footer(); ?>
	<div class="hidden">
        <?php echo do_shortcode('[contact-form-7 id="651" title="Hitendra form"]');?>
    </div>
</div>
</body>
</html>
<script>
        jQuery(document).ready(function () {
            jQuery("#test").CreateMultiCheckBox({ defaultText : 'Select Product'});
        });

        jQuery(document).ready(function () {
            jQuery(document).on("click", ".MultiCheckBox", function () {
                var detail = jQuery(this).next();
                detail.show();
            });

            jQuery(document).on("click", ".MultiCheckBoxDetailHeader input", function (e) {
                e.stopPropagation();
                var hc = jQuery(this).prop("checked");
                jQuery(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
                jQuery(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            jQuery(document).on("click", ".MultiCheckBoxDetailHeader", function (e) {
                var inp = jQuery(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);
                jQuery(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
                jQuery(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            jQuery(document).on("click", ".MultiCheckBoxDetail .cont input", function (e) {
                e.stopPropagation();
                jQuery(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

                var val = (jQuery(".MultiCheckBoxDetailBody input:checked").length == jQuery(".MultiCheckBoxDetailBody input").length)
                jQuery(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            jQuery(document).on("click", ".MultiCheckBoxDetail .cont", function (e) {
                var inp = jQuery(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);

                var multiCheckBoxDetail = jQuery(this).closest(".MultiCheckBoxDetail");
                var multiCheckBoxDetailBody = jQuery(this).closest(".MultiCheckBoxDetailBody");
                multiCheckBoxDetail.next().UpdateSelect();

                var val = (jQuery(".MultiCheckBoxDetailBody input:checked").length == jQuery(".MultiCheckBoxDetailBody input").length)
                jQuery(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            jQuery(document).mouseup(function (e) {
                var container = jQuery(".MultiCheckBoxDetail");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });

        var defaultMultiCheckBoxOption = { defaultText: 'Select Product'};

        jQuery.fn.extend({
            CreateMultiCheckBox: function (options) {

                var localOption = {};
                localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
                localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
                localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

                this.hide();
                this.attr("multiple", "multiple");
                var divSel = jQuery("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
                divSel.css({ "width": localOption.width });

                var detail = jQuery("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
                detail.css({ "width": parseInt(options.width) + 10, "max-height": localOption.height });
                var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

                this.find("option").each(function () {
                    var val = jQuery(this).attr("value");

                    if (val == undefined)
                        val = '';

                    multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' value='" + val + "' /></div><div>" + jQuery(this).text() + "</div></div>");
                });

                multiCheckBoxDetailBody.css("max-height", (parseInt(jQuery(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
            },
            UpdateSelect: function () {
                var arr = [];

                this.prev().find(".mulinput:checked").each(function () {
                    arr.push(jQuery(this).val());
                });

                this.val(arr);
            },
        });
      function multicho(){
        var getleng = jQuery(".MultiCheckBoxDetail .cont input.mulinput").length;
        var getvalcal = '';
        var no = 0; 
        var no1 = 0; 
        for(i=0;i<getleng;i++){
					var getvalin =  jQuery(".MultiCheckBoxDetail .cont:eq("+i+") input.mulinput:checkbox:checked").val();
					if(getvalin == undefined || getvalin == ''){
					}else{
						no = parseInt(no) + parseInt(1);
						no1 = parseInt(no1) + parseInt(1);
						getvalcal = getvalcal + no +') '+getvalin + "\n";
					}
				}
// 				if(no1 > 0){
// 					jQuery('.MultiCheckBox').text(no1+' Product Selected');
// 				}else{
// 					jQuery('.MultiCheckBox').text('Select Product');
// 				}
//       }setInterval('multicho()',1000);
		 jQuery('.products-textarea').html(getvalcal);
         if(no1 > 0){
                    jQuery('.MultiCheckBox').text(no1+' Selected Services');
                    jQuery('.MultiCheckBox').addClass('selectedval');
				}else{
					jQuery('.MultiCheckBox').text('Select Service');
                    jQuery('.MultiCheckBox').removeClass('selectedval');
				}
      }setInterval('multicho()',1000);
    </script>