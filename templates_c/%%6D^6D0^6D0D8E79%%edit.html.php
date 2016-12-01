<?php /* Smarty version 2.6.22, created on 2016-12-01 15:01:02
         compiled from edit.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $_GET['col']; ?>
</title>
    <link rel="stylesheet" href="style/h_reset.css" />
    <link rel="stylesheet" href="style/edit.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script src="plus/ckeditor/ckeditor.js"></script>
</head>
<body>

<!---------------------------------------------------------------------------------------->

<!--部分说明-->
<div class="sRule" style="display: none;">
    <ul>
        <ol>
            <i style="background:url(style/imgs/i_quit.png) no-repeat;"></i>
            <p>：日期为绿字的是值得纪念的好日子</p>
        </ol>
        <ol>
            <i style="background:url(style/imgs/i_quit.png) no-repeat;"></i>
            <p>：日期为蓝字的是值得纪念的坏日子</p>
        </ol>
        <ol>
            <i style="background:url(style/imgs/i_quit.png) no-repeat;"></i>
            <p>：正文黄底部分为关键字</p>
        </ol>
        <ol>
            <i style="background:url(style/imgs/i_quit.png) no-repeat;"></i>
            <p>：正文红字加粗部分为未来有用的信息</p>
        </ol>
        <ol>
            <i style="background:url(style/imgs/i_quit.png) no-repeat;"></i>
            <p>：正文灰字部分为无用信息</p>
        </ol>
    </ul>
</div>



<input type="hidden" id="col" value="<?php echo $_GET['col']; ?>
" />
<div class="wrapNav">
    <!--导航-->
    <div class="sNav">
        <li data-col="index"><a href="index.php">首页</a></li>
        <li data-col="note"><a href="index.php?act=list&col=note">随笔</a></li>
        <li data-col="material"><a href="index.php?act=list&col=material">- 点 -</a></li>
        <li data-col="topic"><a href="index.php?act=list&col=topic">- 线 -</a></li>
        <li data-col="plane"><a href="index.php?act=list&col=plane">- 面 -</a></li>
        <li data-col="website"><a href="index.php?act=list&col=website">网址</a></li>
        <li data-col="diary"><a href="index.php?act=list&col=diary">日志</a></li>
    </div>
</div>
<script>
$(function(){
    //导航.on
    var col=$("#col").val();
    $("[data-col='"+col+"']").addClass("on").siblings().removeClass("on");
});
</script>

<form class="sForm" method="post" action="index.php?col=<?php echo $_GET['col']; ?>
">

    
    <div class="leftCol">

        <div class="infos">
            <?php if ($this->_tpl_vars['Fields']['update_time']): ?>
            <ol>
                <h5>最后更新：</h5>
                <p><?php echo $this->_tpl_vars['rsedit']['update_time']; ?>
</p>
            </ol>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['Fields']['input_time']): ?>
            <ol>
                <h5>创建时间：</h5>
                <p><?php echo $this->_tpl_vars['rsedit']['input_time']; ?>
</p>
            </ol>
            <?php endif; ?>
        </div>

        <!--标题-->
        <?php if ($this->_tpl_vars['Fields']['ttl']): ?>
        <div class="sTtl">
            <input class="name" type="text" name="ttl" value="<?php if ($_GET['col'] == 'diary' && ! $this->_tpl_vars['rsedit']['ttl']): ?><?php echo $this->_tpl_vars['date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rsedit']['ttl']; ?>
<?php endif; ?>" />
        </div>
        <?php endif; ?>

        <!--描述-->
        <?php if ($this->_tpl_vars['Fields']['description']): ?>
        <div class="sTtl">
            <textarea class="desc" name="description"><?php echo $this->_tpl_vars['rsedit']['description']; ?>
</textarea>
        </div>
        <?php endif; ?>
        

        <!--正文-->
        <?php if ($this->_tpl_vars['Fields']['content']): ?>
        <div class="sEditor">
            <pre id="pre_content" name="pre_content" style="display:none;">
            <?php echo $this->_tpl_vars['rsedit']['content']; ?>

            </pre>
            <textarea id="content" name="content" placeholder="Type your text here...">
            </textarea>
            <script>
                //编辑器
                var content = CKEDITOR.replace('content',{ allowedContent: true });
                content.setData($("#pre_content").html());
            </script>
        </div>
        <?php endif; ?>
        <!--网址-->
        <?php if ($this->_tpl_vars['Fields']['website']): ?>
        <div class="blankTool"></div>
        <div class="sWebsite">
            <textarea style="width:94%; padding:10px 3%; height: 200px;" id="website" name="website"><?php echo $this->_tpl_vars['rsedit']['website']; ?>
</textarea>
        </div>
        <?php endif; ?>
    </div>

    <div class="rightCol">

        <?php if ($this->_tpl_vars['Fields']['bCat'] != ""): ?>
        <div class="bCat l_r">
            <h5>大分类：</h5>
            <input class="input" type="text" name="bCat" value="<?php echo $this->_tpl_vars['rsedit']['bCat']; ?>
" />
            <div class="def">
                <a class="key">选择</a>
                <ol>
                    <?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['bCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
                    <li><?php echo $this->_tpl_vars['bCats'][$this->_sections['list']['index']]['bCat']; ?>
</li>
                    <?php endfor; endif; ?>
                </ol>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Fields']['topic_id'] != ""): ?>
        <div class="topic l_r">
            <h5>topic ID：</h5>
            <input class="input" type="number" name="topic_id" value="<?php echo $this->_tpl_vars['rsedit']['topic_id']; ?>
" />
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Fields']['topic_sort'] != ""): ?>
        <div class="topic l_r">
            <h5>topic 排序：</h5>
            <input class="input" type="number" name="topic_sort" value="<?php echo $this->_tpl_vars['rsedit']['topic_sort']; ?>
" />
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Fields']['recom'] != ""): ?>
        <input type="hidden" id="recom" value="<?php echo $this->_tpl_vars['rsedit']['recom']; ?>
" />
        <div class="l_r">
            <h5>是否推荐到首页：</h5>
            <ol class="radio">
                <label for="recom-1"><input id="recom-1" type="radio" name="recom" value="1" />推荐</label>
                <label for="recom-0"><input id="recom-0" type="radio" name="recom" value="0" />不推荐</label>
            </ol>
            <script>
                $(function(){
                    var recom=$("#recom").val();
                    if(recom=="1"){ 
                        $("#recom-1").attr("checked","checked");
                        $("#recom-1").parent().addClass("on");
                    }
                    else{ 
                        $("#recom-0").attr("checked","checked");
                        $("#recom-0").parent().addClass("on");
                    }
                });
            </script>
        </div>
        <?php endif; ?>

        <!-- <?php if ($this->_tpl_vars['Fields']['sCat']): ?>
        <div class="sCat l_r">
            <h5>小分类：</h5>
            <input class="input" type="text" name="sCat" value="<?php echo $this->_tpl_vars['rsedit']['sCat']; ?>
" />
            <div class="def">
                <a class="key">选择</a>
                <ol>
                    <?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['sCats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
                    <li><?php echo $this->_tpl_vars['sCats'][$this->_sections['list']['index']]['sCat']; ?>
</li>
                    <?php endfor; endif; ?>
                </ol>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Fields']['attr']): ?>
        <div class="sLabel l_r">
            <h5>属性：</h5>
            <input class="input" type="text" name="attr" value="<?php echo $this->_tpl_vars['rsedit']['attr']; ?>
" />
            <div class="def">
                <a class="key">选择</a>
                <ol>
                    <?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['attrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
                    <li><?php echo $this->_tpl_vars['attrs'][$this->_sections['list']['index']]['attr']; ?>
</li>
                    <?php endfor; endif; ?>
                </ol>
            </div>
        </div>
        <?php endif; ?> -->

        <?php if ($this->_tpl_vars['Fields']['keyword']): ?>
        <div class="sLabel l_r">
            <h5>关键字：</h5>
            <input class="input" type="text" name="keyword" value="<?php echo $this->_tpl_vars['rsedit']['keyword']; ?>
" />
            <div class="def">
                <a class="key">选择</a>
                <ol>
                    <?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['keywords']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
                    <li><?php echo $this->_tpl_vars['keywords'][$this->_sections['list']['index']]['keyword']; ?>
</li>
                    <?php endfor; endif; ?>
                </ol>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['Fields']['mark']): ?>
        <input type="hidden" id="mark" value="<?php echo $this->_tpl_vars['rsedit']['mark']; ?>
" />
        <div class="sMark l_r">
            <h5>标题颜色：</h5>
            <ol class="radio">
                <?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['marks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
                    <label for="<?php echo $this->_tpl_vars['marks'][$this->_sections['list']['index']]['mark']; ?>
"><input id="<?php echo $this->_tpl_vars['marks'][$this->_sections['list']['index']]['mark']; ?>
" type="radio" name="mark" value="<?php echo $this->_tpl_vars['marks'][$this->_sections['list']['index']]['mark']; ?>
" /><?php echo $this->_tpl_vars['marks'][$this->_sections['list']['index']]['zh']; ?>
</label>
                <?php endfor; endif; ?>
                <?php if ($this->_tpl_vars['rsedit']['mark']): ?>
                    <script>var mark_on=$("#mark").val(); $("#"+mark_on).attr("checked","checked").parent().addClass("on");</script>
                <?php else: ?>
                    <?php if ($_GET['col'] == 'diary'): ?>
                    <script>$(function(){ $("#black").attr("checked","checked").parent().addClass("on"); });</script>
                    <?php endif; ?>
                    <?php if ($_GET['col'] == 'material'): ?>
                    <script>$(function(){ $("#red").attr("checked","checked").parent().addClass("on"); });</script>
                    <?php endif; ?>
                    <?php if ($_GET['col'] == 'note'): ?>
                    <script>$(function(){ $("#red").attr("checked","checked").parent().addClass("on"); });</script>
                    <?php endif; ?>
                    <?php if ($_GET['col'] == 'website'): ?>
                    <script>$(function(){ $("#red").attr("checked","checked").parent().addClass("on"); });</script>
                    <?php endif; ?>
                    <?php if ($_GET['col'] == 'topic'): ?>
                    <script>$(function(){ $("#black").attr("checked","checked").parent().addClass("on"); });</script>
                    <?php endif; ?>
                <?php endif; ?>
            </ol>
        </div>
        <?php endif; ?>

        <?php if ($_GET['id']): ?>
        <input class="sSubmit" type="submit" value="修改"  />
        <input type="hidden" name="act" value="modify" />
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />
        <?php else: ?>
        <input class="sSubmit" type="submit" value="保存"  />
        <input type="hidden" name="act" value="save" />
        <?php endif; ?>

    </div>

</form>



<div id="val_mark" style="display:none"><?php echo $this->_tpl_vars['rsedit']['mark']; ?>
</div>
<script>
$(function(){
    //单选
    $(".radio label").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
    });
    //分类选择下拉
    $(".l_r .key").on("click",function(){
        $(this).siblings("ol").toggle();
    });
    $(".l_r ol").on("click","li",function(){
        var val_cur=$(this).text();
        $(this).parents(".l_r").find(".input").val(val_cur);
        $(this).parents("ol").hide();
    });
    $(".l_r.bCat").on("click","ol li",function(){
        var bCat=$(this).text();
        var submitData={
            'bCat':bCat,
            'act':"sCatDrop"
        }
        $.post("index.php",submitData,function(data){
            var data = eval("(" + data + ")");
            //console.log(data);
            var htmls='';
            for(var i=0;i<data.length;i++){
                var html='<li>'+data[i]["sCat"]+'</li>';
                htmls+=html;
            };
            $(".sCat.l_r ol").html(htmls);
        });
    });
});
</script>



</body>
</html>