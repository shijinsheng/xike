<?php
require_once('./mydb/db.php');
require_once('./mydb/Paging.php');
$db=new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="西科,成都西科,西科光端机,成成都西科高新技术有限公司" />
    <meta name="description" content="西科,成都西科,西科光端机,成都西科高新技术有限公司">
    <meta name="baidu-site-verification" content="LD10I6bZyc" />
    <title>光端机|光纤收发器|光纤交换机|poe交换机|工业交换机|网络摄像机-成都西科高新技术有限公司</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <!--[if IE 6]>
	<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a.js" ></script>
	<script type="text/javascript">
	DD_belatedPNG.fix('.bottomsx,img,background');
	</script>
	<![endif]-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src= "js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <link rel="stylesheet" type="text/css" href="css/compare.css"/>
    <script type="text/javascript">
    function closeDiv()
    {
       $.prettyPhoto.close();
        return false;
    }
    function search()
    {
        var key1 = $("#producttype1  option:selected").val();
        var key = $("#producttype2  option:selected").val();
        window.location.href = "compare.aspx?stat=1&c_kind=2&c_kind2=115&c_kind3=135&key=" + escape(key) + "&key1=" + escape(key1);
    }
    
    </script>
    </head>
    <body>
    <form name="form1" method="post" action="compare.aspx?stat=1&amp;c_kind=2&amp;c_kind2=115&amp;c_kind3=135" id="form1">
      <div> </div>
      <script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>
      <div> </div>
      <div class="prtc" style="z-index: 999; top: 0px; bottom: 0px; left: 0px;">
        <div class="prtcclose" style="display: none;"> <a href="javascript:closeDiv2();"></a> </div>
        <div class="prtc1"> 选择产品</div>
        <div class="mtgzbt clearfix" style="width: 889px; margin: 0 auto; padding-top: 8px;
                height: 42px;"> <span>产品类别 ：</span>
          <div>
            <select name="producttype1" onchange="javascript:setTimeout('__doPostBack(\'producttype1\',\'\')', 0)" id="producttype1">
              <option value="">请选择</option>
              <option value="114">摄像机（网络）</option>
              <option selected="selected" value="115">摄像机（模拟）</option>
              <option value="116">摄像机（数字）</option>
              <option value="117">摄像机配件</option>
              <option value="118">存储产品</option>
              <option value="119">编解码产品</option>
              <option value="120">传输产品</option>
              <option value="121">显示与控制产品</option>
              <option value="122">客户端软件</option>
              <option value="123">系统级产品</option>
              <option value="124">行业产品与平台软件</option>
            </select>
          </div>
          <div>
            <select name="producttype2" id="producttype2" onchange="search();">
              <option value="">选择栏目</option>
              <option value="134">模拟摄像机</option>
              <option selected="selected" value="135">智能球型摄像机</option>
              <option value="136">一体化摄像机/机芯</option>
            </select>
          </div>
          <div class="prtc7"> 
          <a href="javascript:void(0)" id="btnSubmit"> <img src="images/prtcpic2.jpg" /></a>
          <a href="javascript:form1.reset();"><img src="images/prtcpic3.jpg" /></a></div>
          <input type="hidden" id="canshu1" value="" />
          <input type="hidden" id="canshu2" value="" />
          <input type="hidden" id="canshu3" value="" />
          <input type="hidden" id="canshu4" value="" />
        </div>
        <!-- content block -->
        <div id="mcs_container">
          <div class="customScrollBox">
            <div class="container">
              <div class="content" style="width: 941px;">
                <div id="productlist">
                  <div class="prtc2 clearfix"><a>摄像机（模拟）</a><span>&gt;</span><a>智能球型摄像机</a></div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">H系列高速智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120905133455599910.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15260" value="15260">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF4262系列">DS-2AF4262系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20131210171625280.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15258" value="15258">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7268-A (室外)">DS-2AF7268-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20131210171625280.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15257" value="15257">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7264-A (室外)">DS-2AF7264-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15256" value="15256">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7258-A (室外)">DS-2AF7258-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100800331015.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao14555" value="14555">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF5268系列">DS-2AF5268系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100800331015.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao14554" value="14554">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF5264系列">DS-2AF5264系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13044" value="13044">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7256-A (室外)">DS-2AF7256-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13043" value="13043">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7254-A (室外)">DS-2AF7254-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao10715" value="10715">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-768">DS-2AF1-768</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao10711" value="10711">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-764">DS-2AF1-764</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100800331015.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao9998" value="9998">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-568/5608/5638">DS-2AF1-568/5608/5638</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100800331015.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao9993" value="9993">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-564/5604/5634">DS-2AF1-564/5604/5634</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100723919385.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao9540" value="9540">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-517/507/537">DS-2AF1-517/507/537</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100723919385.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao9539" value="9539">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-515/505/535">DS-2AF1-515/505/535</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100723919385.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao9538" value="9538">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-513/503/533">DS-2AF1-513/503/533</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117150109995035.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8521" value="8521">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-717">DS-2AF1-717</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117150109995035.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8520" value="8520">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-715">DS-2AF1-715</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117150109995035.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8519" value="8519">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-713">DS-2AF1-713</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8518" value="8518">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-718">DS-2AF1-718</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8517" value="8517">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-716">DS-2AF1-716</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8516" value="8516">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-714">DS-2AF1-714</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100852498479.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao356" value="356">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-518/508/538">DS-2AF1-518/508/538</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100852498479.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao355" value="355">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-516/506/536">DS-2AF1-516/506/536</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100852498479.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao354" value="354">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-514/504/534">DS-2AF1-514/504/534</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100852498479.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao353" value="353">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-512/502/532">DS-2AF1-512/502/532</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">H系列中速智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13376" value="13376">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM7264-A (室外)">DS-2AM7264-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13375" value="13375">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM7268-A (室外)">DS-2AM7268-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13374" value="13374">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM7258-A (室外)">DS-2AM7258-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13339" value="13339">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM7256-A (室外)">DS-2AM7256-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163556985762.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13338" value="13338">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM7254-A (室外)">DS-2AM7254-A (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116101018729294.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao12031" value="12031">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-568/5608/5638">DS-2AM1-568/5608/5638</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116101018729294.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao12029" value="12029">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-564/5604/5634">DS-2AM1-564/5604/5634</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao10730" value="10730">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-768">DS-2AM1-768</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117151652432293.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao10716" value="10716">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-764">DS-2AM1-764</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117144339598248.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8524" value="8524">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-718">DS-2AM1-718</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117144339598248.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8523" value="8523">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-716">DS-2AM1-716</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20120117144339598248.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao8522" value="8522">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-714">DS-2AM1-714</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116101058869166.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao375" value="375">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-518/508/538">DS-2AM1-518/508/538</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116101058869166.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao374" value="374">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-516/506/536">DS-2AM1-516/506/536</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116101058869166.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao373" value="373">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-514/504/534">DS-2AM1-514/504/534</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116101058869166.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao372" value="372">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AM1-512/502/532">DS-2AM1-512/502/532</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">E系列智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao16173" value="16173">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5162系列">DS-2AE5162系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15277" value="15277">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5168系列">DS-2AE5168系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15276" value="15276">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5164系列">DS-2AE5164系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao15275" value="15275">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5156系列">DS-2AE5156系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao14355" value="14355">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5158系列">DS-2AE5158系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130628153437845844.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao14319" value="14319">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7162系列">DS-2AE7162系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130614061421798770.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13917" value="13917">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7152系列">DS-2AE7152系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130628153512355647.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13651" value="13651">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7168系列">DS-2AE7168系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130628153459396062.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13650" value="13650">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7164系列">DS-2AE7164系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130614061717317206.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13649" value="13649">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7158系列">DS-2AE7158系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130903171829565189.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13648" value="13648">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7156系列">DS-2AE7156系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130614061421798770.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13647" value="13647">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE7154系列">DS-2AE7154系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao13312" value="13312">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5152系列">DS-2AE5152系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20130205163130159909.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao12613" value="12613">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE5154系列">DS-2AE5154系列</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">H系列光纤智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100723919385.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao12641" value="12641">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-518F/508F/538F">DS-2AF1-518F/508F/538F</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100723919385.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao12514" value="12514">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-564F/5604F/5634F">DS-2AF1-564F/5604F/5634F</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116100723919385.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao12512" value="12512">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF1-517F/507F/537F">DS-2AF1-517F/507F/537F</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">S系列自动跟踪智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116102608898515.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao220" id="bijiao10047" value="10047">
                          </div>
                          <span style="height:16px;cursor:pointer" title="iDS-2AF1-5X5-B">iDS-2AF1-5X5-B</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116102629388440.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao220" id="bijiao1206" value="1206">
                          </div>
                          <span style="height:16px;cursor:pointer" title="iDS-2AF1-517/507/537">iDS-2AF1-517/507/537</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20121116102629388440.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao220" id="bijiao717" value="717">
                          </div>
                          <span style="height:16px;cursor:pointer" title="iDS-2AF1-515/505/535">iDS-2AF1-515/505/535</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">H系列雨刷智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20131211092709985.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao16162" value="16162">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7268-AW (室外)">DS-2AF7268-AW (室外)</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20131211092709985.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao16161" value="16161">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AF7264-AW (室外)">DS-2AF7264-AW (室外)</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="prtc3 clearfix">
                    <div class="prtc4">E系列mini智能球型摄像机</div>
                    <ul class="clearfix">
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20131217205454760.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao16181" value="16181">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE4562系列">DS-2AE4562系列</span></div>
                      </li>
                      <li>
                        <div class="prtc5"><img src="http://www.hikvision.com//uploadfile/image/product/small/20131217200656453.jpg" /></div>
                        <div class="prtc6 clearfix">
                          <div style="float:left; width:22px; height:22px;">
                            <input type="checkbox" name="bijiao105" id="bijiao16180" value="16180">
                          </div>
                          <span style="height:16px;cursor:pointer" title="DS-2AE4162系列">DS-2AE4162系列</span></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="dragger_container">
              <div class="dragger"> </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
                $(function () {
                    var zhi1 = $("#canshu1").val();
                    var zhi2 = $("#canshu2").val();
                    var zhi3 = $("#canshu3").val();
                    var zhi4 = $("#canshu4").val();
                    var tt1 = $("#producttype1  option:selected").val();
                    var tt2 = $("#producttype2  option:selected").val();
                            //获取传参的值
                    $("#bijiao" + zhi1).attr('checked', "true");
                    $("#bijiao" + zhi1).css('background-color', "rgb(246, 254, 200)");
                    $("#bijiao" + zhi2).attr('checked', "true");
                    $("#bijiao" + zhi2).css('background-color', "rgb(246, 254, 200)");
                    $("#bijiao" + zhi3).attr('checked', "true");
                    $("#bijiao" + zhi3).css('background-color', "rgb(246, 254, 200)");
                    $("#bijiao" + zhi4).attr('checked', "true");
                    $("#bijiao" + zhi4).css('background-color', "rgb(246, 254, 200)");


                            $("#btnSubmit").click(function () {
                                var aa ="";
                                //遍历处于选中状态的checkbox
                                if ($("input:checkbox:checked").length <= 4&&$("input:checkbox:checked").length>=2) {

                                    $(":checkbox").each(function (i) {

                                        if ($(this).attr("checked")) {

                                            aa+=$(this).val()+"|";
                                        }

                                    });
                                    //判断;
                                    if (aa != null && aa != "") {
                                        parent.location.href = "comparelist.php?stat=1&c_kind=2&c_kind2=" + tt1 + "&c_kind3=" + tt2 + "&bj=" + aa;
                                    }
                                    else {
                                        alert('你好，你没有选择任何比较项，可以点击关闭按钮返回！')
                                        return false;
                                    }

                                }
                                else { alert('你好，请选择大于等于2小于等于4个的产品对比！') }

                               
                            });
                        });
            </script> 
        <script type="text/javascript">
      $(window).load(function () {
       
        $("#mcs_container").mCustomScrollbar("vertical", 400, "easeOutCirc", 1.05, "auto", "yes");

    });
        
            </script> 
        <script src="js/jquery.mCustomScrollbar.js"></script> 
      </div>
    </form>
</body>
</html>
