<div class="back_to_top_root ban_select">
    <span id="back_to_top_arrow">⇧</span>
</div>
<script>
    back_to_top_arrow.onclick = function(){
        var back=setInterval(() => {
            if (document.body.scrollTop<=0){
                clearInterval(back);
            }
            else{
                document.body.scrollTop -= (document.body.scrollTop>100 ? document.body.scrollTop/25:4);
            }
        }, 10);
    }
    window.onscroll=function(){
		back_to_top_arrow.style.opacity=document.body.scrollTop/200;
		foot.style.opacity=document.body.scrollTop/200
	}
</script>