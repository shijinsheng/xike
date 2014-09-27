<div class="prnav5">
                
                
<style type="text/css">
.fixed{
    position: fixed;
    top: 5px;
    z-index: 1000;
}

</style>


<div style="height: 390px; width: 193px;">
    <div class="prnav12" id="float">
        <div class="prnav13 clearfix">
            <a href="javascript:void(0)"></a><span>产品搜索</span>
        </div>
        <form action="javascript:prsera();"  method="post">
        <div class="prnav14 clearfix">
            <div>
                <input type="text" id="prkeynum" value="按型号查询" onblur="if (this.value==''){ this.value='按型号查询';}"
                    onfocus="if (this.value=='按型号查询') {this.value='';}" />
            </div>
            <a href="javascript:prsera();">搜 索</a>
        </div>
        </form>
        <div class="prnav15">
            <div class="prnav16">技术咨询</div>
<div class="prnav17"><a href="mailto:400@hikvision.com">97317421@qq.com</a></div>
<div class="prnav18">028-65929285</div>							
        </div>
        <div class="prnav19">
            <div class="prnav16">
                常见问题解答</div>
            
                    <div class="prnav20">
                        <a target="_blank"  href="answer<?php echo "125"; ?>_<?php echo "246"; ?>.html">
                            清除控件的方法
                        </a>
                    </div>
                
                    <div class="prnav20">
                        <a target="_blank"  href="product_list_<?php echo "175"; ?>.html">
                            高清网络枪机列表
                        </a>
                    </div>
                
                    <div class="prnav20">
                        <a target="_blank"  href="answer<?php echo "125"; ?>_<?php echo "248"; ?>.html">
                           使用IE访问前的注意事项
                        </a>
                    </div>
					<div class="prnav22"><a target="_blank" href="download_<?php echo "240"; ?>.html">软件下载</a></div>
        </div>
    </div>
</div>

<script language="javascript" type="text/javascript">
    function prsera() {
        var keycp = document.getElementById("prkeynum");
        if (keycp.value != null && keycp.value != "" && keycp.value != "按型号查询") {
            window.location.href = "prSearch_"+keycp.value+".html";
        }
        else {
            alert("请输入型号查询");
        }
    }

</script>


<script language="javascript" type="text/javascript">
     function fixDiv(div_id) {
                        var offset = arguments[1] ? arguments[1] : 0;
                        var Obj = $('#' + div_id);
                        var ObjTop = Obj.offset().top;
                        var isIE6 = $.browser.msie && $.browser.version == '6.0';
                        if (isIE6) {
                            $(window).scroll(function () {
                                if ($(window).scrollTop() <= ObjTop) {
                                    Obj.attr("class", "prnav12");
                                } else {
                                    Obj.attr("class", "prnav12 fixed");
                                }
                            });
                        } else {
                            $(window).scroll(function () {
                                if ($(window).scrollTop() <= ObjTop) {
                                    Obj.attr("class", "prnav12");
                                } else {
                                     Obj.attr("class", "prnav12 fixed");
                                }
                            });
                        }
                    }

                    //fixDiv("float");

</script>
            </div>