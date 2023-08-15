<h2 class="ct">商品分類</h2>
<div class="ct">
    <label for="">新增大分類</label>
    <input type="text" name="big" id="big">
    <button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    <label for="">新增中分類</label>
    <select name="bigs" id="bigs"></select>
    <input type="text" name="mid" id="mid">
    <button onclick="addType('mid')">新增</button>
</div>
<table class="all">
    <?php 
    $bigs=$Type->all(['big'=>0]);
    foreach($bigs as $big){
    ?>
    <tr class="tt">
        <td><?=$big['name'];?></td>
        <td class="ct">
            <button>修改</button>
            <button>刪除</button>
        </td>
    </tr>
        <?php 
            if($Type->hasMid($big['id'])>0){
                $mids=$Type->getMids($big['id']);
                foreach($mids as $mid){
                ?>
                <tr class="pp ct">
                    <td><?=$mid['name'];?></td>
                    <td>
                        <button>修改</button>
                        <button>刪除</button>
                    </td>
                </tr>                
            <?php
            }
        }
    }
    ?>
</table>

<script>
getBigs();

function addType(type){
    let data
    switch(type){
        case "big":
            data={name:$(`#${type}`).val(),big:0}
        break;
        case "mid":
            data={name:$(`#${type}`).val(),big:$("#bigs").val()}
        break;
    }
    $.post("./api/add_type.php",data,()=>{
        location.reload();
    })
}

function getBigs(){
    $.get("./api/bigs.php",(bigs)=>{
        $("#bigs").html(bigs)
    })
}
</script>

<h2 class="ct">商品管理</h2>